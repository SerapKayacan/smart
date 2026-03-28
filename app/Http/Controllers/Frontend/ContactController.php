<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        SEOTools::setTitle('İletişim - Smart Grup');
        SEOTools::setDescription('Smart Grup ile iletişime geçin. Güvenlik ve temizlik hizmetlerimiz hakkında bilgi almak için bizi arayın veya mesaj gönderin.');
        SEOTools::opengraph()->addProperty('type', 'website');

        return view('frontend.contact');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Mail::send('frontend.mail', [
                'name'          => $request->get('name'),
                'email'         => $request->get('email'),
                'subject'       => $request->get('subject'),
                'messageDetail' => $request->get('message'),
            ], function ($mail) use ($request) {
                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->subject(env('MAIL_SUBJECT', 'Yeni İletişim Formu Mesajı'));
                $mail->to(env('MAIL_TO_ADDRESS'));
            }
        );

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
