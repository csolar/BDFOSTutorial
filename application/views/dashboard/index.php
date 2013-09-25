<?php
  echo Form::open(Route::url('update'), array("method"=>"post"));
  
  echo Form::csrf();
  echo 'new email:';
  echo Form::input('email', '');
  echo Form::button('update', 'update', array('type' => 'submit'));
  echo Form::close();
?>