<?php

use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/sendmail', function(){
    $data = [
        'code'=>123456,
    ];
    Mail::to('nayaunglin5454@gmail.com')->send(new VerificationMail($data));
});