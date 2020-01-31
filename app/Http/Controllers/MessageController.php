<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

public function store()
{
    $mess = new Message();
    $mess->first = request('first');
    $mess->last = request('last');
    $mess->email = request('email');
    $mess->message = request('message');
    $mess->save();
return \Redirect::back()->withSuccess('Message sent');

}

}
