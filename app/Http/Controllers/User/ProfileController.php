<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Senario;

class ProfileController extends Controller
{
    // index
    public function index(Request $request)
    {
        // senario_tableからtitle, overviewを取得
        $senarios = Senario::all();
        // 2つをviewに渡す
	    return view('users.top', ['senarios' => $senarios]);
    }
    
}
