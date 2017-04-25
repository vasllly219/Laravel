<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('/phone', 'PhoneController', ['only' => [
                      // Verb	        Path      	 Action	    Route Name
    'index',          //+GET	       /phone	     index    	phone.index
    'create',         //+GET	    /phone/create	 create	     phone.create
    'store',          //+POST   	/phone	        store   s	phone.store
    //'show',           // GET    	/phone/{phone}	 show    	phone.show
    'edit',           //+GET	/phone/{phone}/edit	  edit	      phone.edit
    'update'          //+PUT/PATCH	/phone/{phone}	update	   phone.update
]]); //https://laravel.com/docs/5.2/controllers#restful-resource-controllers
