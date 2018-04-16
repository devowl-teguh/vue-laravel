<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\serviceMail;
use App\User;
use Hash, Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function redirect($provider) {
          switch ($provider) {
                case 'facebook':
                      return Socialite::driver($provider)->fields([
                            'email', 'gender', 'birthday'
                      ])->scopes([
                            'email', 'user_birthday'
                      ])->redirect();
                break;
                default:
                      return Socialite::driver($provider)
                      // ->scopes(['openid', 'profile', 'email'])
                      ->redirect();
                break;
          }
    }

    public function callback($provider) {
          switch ($provider) {
                case 'facebook':
                      $user = Socialite::driver($provider)->fields([
                            'name','email', 'gender', 'birthday'
                      ])->user();
                break;
                default:
                      $user = Socialite::driver($provider)
                      ->user();
                break;
          }

          $data['provider'] = $provider;
          $data['social_id'] = $user->id;

          if(isset($user->name)) {
                $data['name'] = $user->name;
          }

          if(isset($user->email)) {
                $data['email'] = $user->email;
          }

          if(isset($user->user['gender'])) {
                $data['gender'] = $user->user['gender'];
          }

          if(isset($user->user['birthday'])) {
                $data['birthdate'] = $user->user['birthday'];
          }

          $result = $this->login_social->loginSocial($data);

          Auth::loginUsingId($result['id']);
          return redirect('/');
    }
}
