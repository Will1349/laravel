<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\EventListener\MessageLoggerListener;

class MessageController extends Controller
{

    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5',

        ], [
            'name.required' => __('I need your name'),

        ]);

        Mail::to('willabad97@gmail.com')->queue(new MessageReceived($msg));
        return 'Mensaje enviado';
    }
}
