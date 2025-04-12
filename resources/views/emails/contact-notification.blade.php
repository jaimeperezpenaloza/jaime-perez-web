<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="margin: 0; padding: 0; font-family: sans-serif; background-color: #ffffff;">
    
    <div style="background-color: #ffffff; text-align: center; padding: 40px 20px 10px;">
        <img src="https://i.imgur.com/MHUfUCQ.png" alt="Logo" style="max-width: 450px; margin-bottom: 10px;">
    </div>

    <div style="background-color: #FF5E0E; padding: 40px 20px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; padding: 30px; text-align: left;">
            <h2 style="margin-top: 0; color: #111827;">New Contact Form Submission</h2>
            <p style="margin-bottom: 30px; color: #4B5563;">
                You’ve received a new message through your website’s contact form. Here are the details:
            </p>

            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">

            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Submitted At:</strong> {{ $dateTime }}</p>
            <p><strong>IP Address:</strong> {{ $ip }}</p>

            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">

            <h3 style="margin-bottom: 10px; color: #111827;">Message:</h3>
            {!! nl2br(e($data['message'])) !!}
        </div>
    </div>

</body>
</html>
