<?php


use App\Events\SendMessage;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('send-mail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::resource('store', PostController::class);

Route::get('component', function(){
    return view('blade-component');
});

Route::get('/message', function(){
    return view('message');
});

Route::get('/send-message', function(){

    event(new SendMessage("this a new message!!", 7));
    dd('message sent');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


