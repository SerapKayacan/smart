<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HumanResourcesMail;

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

        try {
            Mail::send('frontend.mail', [
                    'name'          => $request->get('name'),
                    'email'         => $request->get('email'),
                    'subject'       => $request->get('subject'),
                    'messageDetail' => $request->get('message'),
                ], function ($mail) use ($request) {
                    $fromAddress = config('mail.from.address') ?: 'noreply@smartgrup.com.tr';
                    $fromName    = config('mail.from.name') ?: 'Smart Grup';
                    $toAddress   = env('MAIL_TO_ADDRESS') ?: 'bilgi@smartozelguvenlik.com';
                    $subject     = env('MAIL_SUBJECT') ?: 'Yeni İletişim Formu Mesajı';

                    $mail->from($fromAddress, $fromName);
                    $mail->subject($subject);
                    $mail->to($toAddress);
                }
            );
            \Log::info('Mail sent successfully to: ' . env('MAIL_TO_ADDRESS'));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Mail gönderilemedi: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }

    public function submitCv(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:50',
            'position' => 'required|string|max:255',
            'message'  => 'nullable|string|max:2000',
            'cv_file'  => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ]);

        $file = $request->file('cv_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        
        // Store temporarily in local storage
        $filePath = $file->storeAs('cv', $fileName, 'local'); 
        $absolutePath = storage_path('app/cv/' . $fileName);

        $applicationData = [
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'position' => $request->position,
            'message'  => $request->message,
        ];

        $hrEmail = env('HR_MAIL_ADDRESS', env('MAIL_TO_ADDRESS'));

        Mail::to($hrEmail)->send(new HumanResourcesMail($applicationData, $absolutePath, $file->getClientOriginalName()));

        return redirect()->back()->with('success', 'Kariyer başvurunuz başarıyla alındı ve İnsan Kaynakları departmanına iletildi!');
    }
}
