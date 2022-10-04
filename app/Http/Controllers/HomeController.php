<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $k = Karyawan::all(); 
        return view('home', compact('k'));
    }

    public function edit($id)
    {
        $k = Karyawan::whereId($id)->first(); 
        return view('edit', compact('k'));
    }
    
    public function update(Request $request, Karyawan $karyawan)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required|integer',
            'alamat' => 'required',
        ]);
        
        $data = [
            'Name' => $validation['name'],
            'Email' => $validation['email'],
            'No_Hp' => $validation['no_hp'],
            'Alamat' => $validation['alamat'],
        ];

        $karyawan->update($data);
        return redirect()->route('home');
        Route::get('/', 'HomeController@index')->update('home');
     
    }

        
}
