<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Peserta;
use App\Models\Tim;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = User::get();
            $level = auth()->user()->level;

            switch ($level) {
                case 'admin':
                    $myData = Admin::all()->where('id_user', '=', auth()->user()->id)->first();
                    $countPeserta = Peserta::count();
                    $countTim = Tim::count();
                    $datas = [
                        'myData' => $myData,
                        'countPeserta' => $countPeserta,
                        'countTim' => $countTim,
                    ];
                    break;
                case 'peserta':
                case 'peserta':
                    $myData = Peserta::all()->where('id_user', auth()->user()->id)->first();
                    $datas = [
                        'myData' => $myData,
                    ];
                    break;
            }
        }
        return view('pages/dashboard', $datas);
    }
}
