<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('pages')->with('page',Page::find(1));
});

//_________________________________CONTACTING (EMAIL)____________________________


Route::get('pages/contact', function(){
	return View::make('contact');
});


Route::post('pages/contact', function(){

		$aRules = array(
			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'email_message'=>'required',
		);
	$validator = Validator::make(Input::all(),$aRules);

	if($validator->fails()){
		return Redirect::to('pages/contact')->withErrors($validator)->withInput();;
	} else {
		$data = Input::all();
		Mail::send('contactEmail', $data, function($message) use ($data)
		{
			$message->from($data["email"],$data["name"]);
		    $message->to("annie.c.kyles@gmail.com", "Annie")->subject($data["subject"]);
		});
		return Redirect::to('pages/contactConfirm');
	}
});


Route::get('pages/contactConfirm', function(){
	return View::make('contactConfirm');
});



//________________________________CONTENT ROUTES_____________________________________

Route::get('pages/create', function(){
	return View::make('pageCreate');
})->before('admin.permission');


Route::post('pages', function(){
	$aRules = array(
		'title'=>'required|unique:pages',
		'content'=>'required',
		'photo'=>'required',
		'caption'=>'required',
		);
	$validator = Validator::make(Input::all(),$aRules);

	if($validator->fails()){
		return Redirect::to('pages/create')->withErrors($validator)->withInput();;
	} else {
		$Page = Page::create(Input::all());
		$Page->save();

		Input::file('photo')->move("img", "image_".$Page->id.".jpg");
		$Page->image = "image_".$Page->id.".jpg";
		$Page->save();
		return Redirect::to('pages/'.$Page->id);
	}
});

Route::get('pages/{id}', function($id){
	return View::make('pages')->with('page',Page::find($id));
});


Route::put('pages/{id}', function($id){
	$oPage = Page::find($id);
	if(Input::has("file_upload")){
		if(Input::hasFile("image")){
			$aRules = array(
				'image'=>'max:200',
			);
			$validator = Validator::make(Input::all(),$aRules);
			if($validator->passes()){
				Input::file('image')->move("img", $oPage->image);
			}
		}

		return Redirect::to('pages/'.$id);
	}else{
		$updatedField = Input::get("field");
		$oPage->$updatedField = Input::get("value");
		$oPage->save();
		return Input::get("value");
	}
});


//________________________________USER ROUTES_____________________________________


Route::resource('users', 'UserController');


//_________________________________AUTHENTICATION____________________________
Route::get('login', function(){
	return View::make('login');
});

Route::post('login', function(){
	$aDetails = array(
		'username' => Input::get('username'),
		'password' => Input::get('password')
		);

	if(Auth::attempt($aDetails)){
		// return Redirect::intended('users/'.Auth::user()->id);
		return Redirect::to('pages/1');
	} else {
		return Redirect::to('login')->with('error', 'Incorrect combination');
	}
});

Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('pages/1');
});


