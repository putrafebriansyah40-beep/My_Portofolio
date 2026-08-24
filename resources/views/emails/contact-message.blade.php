<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Portofolio</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-w-xl mx-auto; p-6; border: 1px solid #eee; border-radius: 8px;">
        <h2 style="color: #4f46e5;">Pesan Baru dari Website Portofolio</h2>
        <p>Anda menerima pesan baru melalui formulir kontak:</p>
        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        
        <p><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        
        <h3 style="margin-top: 30px;">Pesan:</h3>
        <div style="background: #f9f9f9; padding: 15px; border-left: 4px solid #4f46e5; white-space: pre-line;">
            {{ $data['message'] }}
        </div>
        
        <p style="margin-top: 30px; font-size: 12px; color: #888;">
            Pesan ini dikirimkan secara otomatis dari website portofolio Anda.
        </p>
    </div>
</body>
</html>
