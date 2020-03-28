<?php

namespace App\User\Controllers;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Support\Http\Controllers\Controller;

final class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }
}
