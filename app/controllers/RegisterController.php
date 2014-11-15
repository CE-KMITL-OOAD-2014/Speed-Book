<?php
Class RegisterController extends BaseController{

	public function register(){
  $input = Input::all();
		$rules = array(
            'name' => 'min:6|unique:forregister',
           	'email' => 'email|unique:forregister',
            'password' => 'min:8|confirmed',
           	'password_confirmation',

        );

      
        $validator = Validator::make($input,$rules);

 		if($validator->fails()){
        	return Redirect::to('register');//->withErrors($validator)->withInput();
       }else{	

		$user = new User() ;
		$user->name = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('login');
		//echo "string";

		}

	}

// 	 public function store()
//     {
//         $rules = [
//             'username' => 'required|min:6|unique:users',
//             'email' => 'required|email|unique:users',
//             'password' => 'required|confirmed|min:6'
//         ];

//         $input = Input::only(
//             'username',
//             'email',
//             'password',
//             'password_confirmation'
//         );

//         $validator = Validator::make($input, $rules);

//         if($validator->fails())
//         {
//             return Redirect::back()->withInput()->withErrors($validator);
//         }

//         $confirmation_code = str_random(30);

//         User::create([
//             'username' => Input::get('username'),
//             'email' => Input::get('email'),
//             'password' => Hash::make(Input::get('password')),
//             'confirmation_code' => $confirmation_code
//         ]);



//         return Redirect::home();
//     }

// 	public function login()
// 	{

// 		$credential = Input::only('email','password');
// 		if(Auth::attempt($credential)){	
// 			 return Redirect::to('member')->with('message', 'You are now logged in!');
// } 		else {
//    			 return Redirect::to('index')
//        			 ->with('message', 'Your username/password combination was incorrect')
//        			 ->withInput();
// }
// 	}

		

// 	}
}
?>