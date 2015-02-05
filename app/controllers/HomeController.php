<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function index() {
        $aperos = Apero::paginate(3);

        return View::make('aperos.index', array('aperos' => $aperos));
    }

    public function single($id) {

        $aperos = Apero::find($id);

        return View::make('aperos.single', array('aperos' => $aperos));
    }

    public function showLogin() {
        // show the form
        return View::make('login.index');
    }

    public function doLogin() {
        // process the form
        $rules = array(
            'username' => 'required', // make sure the username is an actual username
            'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                            ->withErrors($validator) // send back all errors to the login form
                            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                 return Redirect::to('connect');
                // for now we'll just echo success (even though echoing in a controller is bad)
                //echo 'SUCCESS!';
            } else {

                // validation not successful, send back to form 
                return Redirect::to('login');
            }
        }
    }

    public function doLogout() {
        if(Auth::check()){

            Auth::logout(); // log the user out of our application

            return Redirect::to('login'); // redirect the user to the login screen*

        }
    }

    public function connect() {

        if(Auth::check()){

            $name = Auth::user()->username;

            return View::make('login.connect', array('name' => $name));

        }else{

            return Redirect::to('login');

        }
        
        

    }

    public function connectpost() {

        if(Auth::check()){

            $userdata = array(
            'title' => Input::get('title'),
            'user_id' => Auth::user()->id,
            'tag_id' => 1,
            'content' => Input::get('content'),
            'status' => Input::get('status')
        );
        
        Apero::create($userdata);

        }else{

            return Redirect::to('login');
            
        }
		
    }
}
