<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        // Kirim email
        Mail::send('emails.kontak', [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ], function ($message) use ($request) {
            $message->to('velvorfa@gmail.com')
                ->subject('Pesan dari ' . $request->nama);
        });

        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
