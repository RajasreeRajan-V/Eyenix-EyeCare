<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>Hello {{ $data['name'] }},</h2>

    <p>
        Thank you for getting in touch with <strong>Eyenix Eye Care</strong>.
        We have received your message and our team will contact you shortly.
    </p>

    <p><strong>Your Message:</strong></p>
    <p>{{ $data['message'] ?? '—' }}</p>

    <br>

    <p>
        Regards,<br>
        <strong>Eyenix Eye Care Team</strong><br>
        📞 +91 99616 67111
    </p>
</body>
</html>
