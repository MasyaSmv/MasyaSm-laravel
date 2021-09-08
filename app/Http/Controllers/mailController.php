<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send() {
        Mail::send(['text' => 'mail'], ['name', 'MasyaSm'], function($message) {
            $message -> to('kuvaldamax@gmail.com', 'MasyaSmm')->subject('Test e-mail');
            $message -> from('kuvaldamax@gmail.com', 'Masyasmmm');
        });
    }
}
