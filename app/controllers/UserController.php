<?php
class UserController extends BaseController
{
   public function postLogin()
   {
      $login_ok =  Auth::attempt(array(
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        ));

      if ($login_ok) { return Redirect::route('add_new_post'); }

      return Redirect::route('login')
          ->with('login_errors', 'Your user credentials are wrong. Please try again');  
   }

   public function getLogin()
   {
      return View::make('login');
   }

   public function getLogout()
   {
        Auth::logout();

        return Redirect::route('index');
   } 
}