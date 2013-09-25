<?php defined('SYSPATH') OR die('No direct script access.');


class Kohana_Csrf
{
  public static $namespace = 'csrf_guard_';

  /**
   * It generates a hash that can be used to secure forms against csrf attacks.
   * The generated token is also saved into the session against the given key.
   *
   * @param string $key the key to be used to store the generated token into the session
   * @return string a hash to be used as token to secure forms
   */
  public static function token($key)
  {
    $token = hash('sha512', mt_rand(0, mt_getrandmax()));
    Session::instance()->set($key, $token);
    return $token;
  }

  /**
   * It check whether the given POST data contains csrf data and validates it if this is the case.
   *
   * @param array $post the POST request's array containing form data
   * @throws Csrf_Exception if no csrf data is found in POST array or if the csrf data is invalid
   */
  public static function check($post)
  {
    $key_attr   = self::$namespace . Form::$csrf_key;
    $token_attr = self::$namespace . Form::$csrf_token;

    //can we find the csrf key in the posted form?
    if(!isset($post[$key_attr]))
      throw new Csrf_Exception('cannot find csrf key');

    $key = $post[$key_attr];
    $token = $post[$token_attr];

    //let's now check that the key and token are what we expect
    if(!self::validate($key, $token))
      throw new Csrf_Exception('invalid csrf token');
  }

  /**
   * It validates the given csrf token against the token stored in the session indexed by the given key.
   * The token stored in the session, if found, will be destroyed so that it can no longer be used.
   *
   * @param string $key the key to be used to index the required session data
   * @param string $token the token to be checked against the token stored in in the session 
   * @return boolean true if the token is valid, false otherwise
   */
  protected static function validate($key, $token)
  {
    $session_token = Session::instance()->get_once($key, null);

    if(is_null($token) || ($token != $session_token))
      return false;
    
    return true;
  }
}