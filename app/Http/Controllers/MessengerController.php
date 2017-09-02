<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use pimax\FbBotApp;
use pimax\Messages\Message;

class MessengerController extends Controller
{
  public function webhook(){
    return "this is the webhook";
  }
    //
}
