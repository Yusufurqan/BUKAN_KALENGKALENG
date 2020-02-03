<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }
    
    public function index(){
        $user=Auth::user();
        return response()->json([
            'status'=>true,
            'data'=>$user
        ]);
    }
}
