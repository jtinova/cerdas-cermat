<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Peserta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch admins and eager load their user relationship
        $admins = Admin::with('users')->get();
        
        // Fetch pesertas and eager load their user relationship
        $pesertas = Peserta::with('users')->get();

        $users = User::with('pesertas')->get();
        
        // Combine the collections and map them to include the user data with null checks
        $combinedUsers = $admins->concat($pesertas)->map(function ($person) {
            // Jika relasi 'user' adalah null, maka akan menggunakan placeholder
            $email = $person->user ? $person->user->email : 'No email';
            $level = $person->user ? $person->user->level : 'No role';
    
            return [
                'nama' => $person->nama,
                'email' => $email,
                'password' => '*********', // Placeholder, karena kita tidak boleh mengekspos password asli
                'level' => $level
            ];
        });
        // dd($users);
        return view('pages.user', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('pages.add-user')->with('request', $request);
    }    

    /**
     * Store a newly created resource in storage.
     */
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|unique:users',
        'password' => 'required',
    ]);
    
    $tanggal = Carbon::now()->format('d');
    $jam = Carbon::now()->format('h');

    $user = User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'level'=> 'admin',
    ]);
    
    Admin::create([
        'nama' => $request->nama, // Ubah sesuai kebutuhan
        'id_user' => $user->id,
    ]);
    
    return redirect()->action('user');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan user berdasarkan ID
        $user = User::findOrFail($id);
        
        // Hapus user
        $user->delete();
        
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'User berhasil dihapus');
    }
}
