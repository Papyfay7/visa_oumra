<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
public function showRegistrationForm()
{
return view('html.register');
}

public function register(Request $request)
{
$this->validator($request->all())->validate();

$user = $this->create($request->all());

auth()->login($user);

return redirect()->intended('login');
}

protected function validator(array $data)
{
return Validator::make($data, [
'name' => ['required', 'string', 'max:255'],
'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
'password' => ['required', 'string', 'min:8', 'confirmed'],
]);
}

protected function create(array $data)
{
return User::create([
'name' => $data['name'],
'email' => $data['email'],
'password' => Hash::make($data['password']),
]);
}
}
