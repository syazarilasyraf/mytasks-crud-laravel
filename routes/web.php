<?php

Route::get('/', 'PagesController@home');

Route::resource('tasks', 'TasksController');
