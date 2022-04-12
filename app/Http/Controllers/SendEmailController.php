<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotifyMail;
use Mail;
use Auth;

class SendEmailController extends Controller
{
      public function index()
    {
      $data='Vivek kumar prjapati';
     
      Mail::to('vivekkumar240898@gmail.com')->send(new NotifyMail($data));
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    } 
}
