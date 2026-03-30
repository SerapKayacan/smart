<!DOCTYPE html>
<html>
<head>
    <title>Yeni Kariyer Başvurusu</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2 style="color: #0b2154; border-bottom: 2px solid #0b2154; padding-bottom: 10px;">Yeni Kariyer / İnsan Kaynakları Başvurusu</h2>
        
        <p>Web sitenizden yeni bir kariyer başvurusu aldınız. Başvuru detayları aşağıdadır:</p>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold; width: 150px;">Ad Soyad:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $applicationData['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold;">E-Posta:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $applicationData['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold;">Telefon:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $applicationData['phone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold;">Başvurulan Pozisyon:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $applicationData['position'] }}</td>
            </tr>
        </table>
        
        @if(!empty($applicationData['message']))
        <div style="margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-left: 4px solid #0b2154;">
            <h4 style="margin-top: 0; color: #555;">Ön Yazı / Mesaj:</h4>
            <p style="white-space: pre-wrap;">{{ $applicationData['message'] }}</p>
        </div>
        @endif

        <p style="margin-top: 20px; font-weight: bold;">⚠️ Başvurunuza ait CV belgesi bu maile eklenti olarak eklenmiştir.</p>
        
        <hr style="border: none; border-top: 1px solid #ddd; margin: 30px 0;">
        <p style="font-size: 12px; color: #888; text-align: center;">Bu e-posta sistem tarafından otomatik olarak gönderilmiştir.</p>
    </div>
</body>
</html>
