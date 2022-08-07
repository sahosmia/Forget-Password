<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function(){
    // return view('auth.email.email');
    echo User::find(1)->get();
});

Route::post('send-mail', function (Request $request) {

    $details = [
        'email' => $request->email,
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    Mail::to($request->email)->send(new \App\Mail\ForgetPasswordMail($details));

return back()->with('status', "Email send successfully. Please Check your Email");
});

Route::get('reset-password/{email}', function (Request $request) {
    return view('auth.passwords.confirm', ['email' => $request->email,]);
});

Route::post('/password-confirm', function(Request $request){
    $email = $request->email;
    $password = bcrypt($request->password);
    // foreach(User::select("*")->where("email", "=", $email)->get() as $data){
    //     echo $data['name'];
    // }
die();
    // User::where("email" => $email)->update([
    //     'name' => "ab",
    // ]);
    echo "done";
});
