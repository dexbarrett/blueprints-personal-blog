<?php
class UserController extends BaseController
{
   public function postLogin()
   {
        Auth::attempt(array(
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        ));

        return Redirect::route('add_new_post');
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