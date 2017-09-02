<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use pimax\FbBotApp;
use pimax\Messages\Message;

class MessengerController extends Controller
{
  public function webhook(){
    $local_verify_token = env('WEBHOOK_VERIFY_TOKEN');
    $hub_verify_token = \Input::get('hub_verify_token');

    if($local_verify_token == $hub_verify_token){
        return \Input::get('hub_challenge');
    }
    else return "Bad verify token";
  }
  // making the webhook_post function
  public function webhook_post()
  {
    \Log::info('Message received');
  }

}
