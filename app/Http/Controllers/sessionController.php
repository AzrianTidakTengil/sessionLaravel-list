<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function index()
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }

    public function buatSession()
    {
        session(['hakAkses' => 'admin', 'nama' => 'Anto']);
        return "Session sudah dibuat";
    }

    public function aksesSession(Request $request, Session $session)
    {
        // Menggunakan helper function 
        echo session('hakAkses'); 
        echo session('nama');
        echo '<hr>';
        // Dari Request object 
        echo $request->session()->get('hakAkses'); 
        echo $request->session()->get('nama');
        echo '<hr>';
        // Menggunakan facade Session 
        echo $session->get('hakAkses');
        echo $session->get('nama');
    }

    public function hapusSession(Request $request, Session $session)
    {
        // Menghapus semua session menggunakan helper function 
        session()->flush();
        // Menghapus semua session menggunakan Request object 
        $request->session()->flush();
        // Menghapus semua session menggunakan facade Session 

        $session->flush();
        echo "Semua session sudah dihapus";
    }
    public function flashSession()
    {
        // Membuat 1 flash session menggunakan helper function 
        session()->flash('hakAkses', 'admin');
        echo "Flash session hakAkses sudah dibuat";
    }
}
