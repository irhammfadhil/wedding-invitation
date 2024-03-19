<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Attendance;
use App\Services\UserService;

class UserController extends Controller
{
    protected $user_service;
    public function __construct(UserService $user_service)
    {
        $this->user_service =  $user_service;
    }
    public function getLogin() {
        return view('admin.login');
    }
    public function doLogin(Request $request) {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            Auth::user();
            return redirect()->route('index-admin');
        }
        else {
            return redirect()->back()->with('errorMessage', 'Login gagal. Silakan cek kembali nama atau password Anda');
        }
    }
    public function register(Request $request) {
        $data = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        $query = $this->user_service->create($data);

        return 200;
    }
    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
