<?php defined('SYSPATH') OR die('No direct script access.');

class Csrf_Form extends Kohana_Form
{
	public static $csrf_key   = 'key';
	public static $csrf_token = 'token';

	/**
	 * It generates HTML to be used to secure form against csrf attacks. 
	 * 
	 * @see https://www.owasp.org/index.php/CSRF
	 * @return string html snipped with key and token data to secure a form with
	 */
	public static function csrf()
	{
		$key = Csrf::$namespace . mt_rand(0,mt_getrandmax());
		$token = Csrf::token($key);
		$html  = self::input(Csrf::$namespace . self::$csrf_key, $key, array('type' => 'hidden'));
		$html .= self::input(Csrf::$namespace . self::$csrf_token, $token, array('type' => 'hidden'));
		return $html;
	}
}