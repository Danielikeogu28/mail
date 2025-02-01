<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', function(){
    return view('send-mail');
});

Route::post('send-email', function(Request $request){

    // Mail::raw($request->message, function($message) use($request){
    //     $message->to($request->email)
    //     ->subject('the from Laravel email testing');   
    // });
    // return redirect()->back()->with('success', 'Email sent successfully!');

    //Mail::to($request->email)->send(new SendMail($request->message));
    Mail::to($request->email)->queue(new SendMail($request->message));
    return response()->json(['message' => 'Email sent successfully']);
})->name('send.mail');

Route::get('component', function(){
    return view('blade-component');
});