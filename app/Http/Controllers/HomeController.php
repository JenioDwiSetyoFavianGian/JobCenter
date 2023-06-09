<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '2') {
            return view('admin.home');
        } else if ($usertype == '1') {
            return redirect()->route('dashboard_company', auth()->user()->id);
        } else {
            return redirect()->route('getLowongan');
        }
    }
}
