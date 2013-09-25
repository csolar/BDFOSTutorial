<?php 
  echo Form::open(Route::url('login'), array('method' => 'post'));
  echo 'username:';
  echo Form::input('username', '');
  echo '<br />password:';
	echo Form::input('password', '');
  echo Form::button('login', 'Login', array('type' => 'submit'));
  echo Form::close();
?>