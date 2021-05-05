<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\General;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        if ($request->ajax()) {
            $isi = $request->isi;
            $details = [
                'name' => $isi['name'],
                'email' => $isi['email'],
                'phone' => $isi['phone'],
                'subject' => $isi['subject'],
                'message' => $isi['message'],
            ];

            $general = General::findOrFail(1);
            Mail::to($general->email)->send(new \App\Mail\MyTestMail($details));
            return response()->json([
                'isi' => 'BISA',
            ]);
        }
    }
}
