<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'email' => $request->email,
            'nama' => $request->nama,
            'pesan' => $request->pesan
        ];

        Mail::to("info@maurindo.co.id")->send(new SendMail($details));
        return response()->json($details);
    }
}
