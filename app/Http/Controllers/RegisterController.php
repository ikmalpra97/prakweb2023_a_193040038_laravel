<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' =>'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        user::create($validateData);

        // $request->session()->flash('success', 'Registrastion Successfull! Please login');

        return redirect('/login')->with('success', 'Registrastion Successfull! Please login');
    }
}
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
