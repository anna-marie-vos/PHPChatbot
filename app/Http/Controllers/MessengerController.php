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
    $input = \Input::all();
    \Log::info(print_r($input,1));

    // Now we're making the bot using pimax\FbBotApp
    $token = env('PAGE_ACCESS_TOKEN');
    $bot = new FbBotApp($token);
  }

}
