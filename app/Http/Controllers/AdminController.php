<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class AdminController extends Controller
{
    protected $user_service;
    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }
    public function index(){
        return view('admin.index');
    } 
}
