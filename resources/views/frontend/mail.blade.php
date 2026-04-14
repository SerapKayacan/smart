<!DOCTYPE html>
<html>
<head><title>Yeni İletişim Formu Mesajı</title></head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2 style="color: #0b2154; border-bottom: 2px solid #0b2154; padding-bottom: 10px;">Yeni İletişim Formu Mesajı</h2>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold; width: 150px;">Ad Soyad:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold;">E-Posta:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $email }}</td>
            </tr>
            @if(!empty($subject))
            <tr>
                <td style="padding: 10px; border: 1px solid #eee; background-color: #f9f9f9; font-weight: bold;">Konu:</td>
                <td style="padding: 10px; border: 1px solid #eee;">{{ $subject }}</td>
            </tr>
            @endif
        </table>

        <div style="margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-left: 4px solid #0b2154;">
            <h4 style="margin-top: 0; color: #555;">Mesaj:</h4>
            <p style="white-space: pre-wrap;">{{ $messageDetail }}</p>
        </div>

        <hr style="border: none; border-top: 1px solid #ddd; margin: 30px 0;">
        <p style="font-size: 12px; color: #888; text-align: center;">Bu e-posta sistem tarafından otomatik olarak gönderilmiştir.</p>
    </div>
</body>
</html>
