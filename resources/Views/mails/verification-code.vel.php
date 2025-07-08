<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Verification Code</title>
    <style type="text/css">
        body {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #374151;
            background-color: #F9FAFB;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            border: 1px solid #E5E7EB;
            border-radius: 12px;
            background-color: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .header {
            background-color: #FFFFFF;
            color: #111827;
            padding: 28px 20px;
            text-align: center;
            border-bottom: 1px solid #E5E7EB;
        }
        .content {
            padding: 30px;
        }
        .code-box {
            background-color: #F3F4F6;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 6px;
            color: #4F46E5;
            margin: 30px 0;
        }
        .footer {
            text-align: center;
            padding: 24px;
            color: #6B7280;
            font-size: 14px;
            background-color: #F9FAFB;
            border-top: 1px solid #E5E7EB;
        }
        .logo {
            max-width: 160px;
            height: auto;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png" alt="Velto Logo" class="logo">
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">Email Verification</h1>
            <p style="margin: 10px 0 0; color: #6B7280; font-size: 15px;">
                Use the code below to verify your email address.
            </p>
        </div>

        <div class="content">
            <p style="font-size: 16px; margin-bottom: 10px;">Your 5-digit verification code is:</p>
            <div class="code-box">
                <?= htmlspecialchars($code) ?>
            </div>
            <p style="font-size: 15px; color: #6B7280;">
                If you did not request this code, you can safely ignore this email.
            </p>
        </div>

        <div class="footer">
            <p style="margin: 0;">&copy; <?= date('Y') ?> <a href="https://veltophp.com" style="color:#4F46E5;">veltophp.com</a></p>
        </div>
    </div>
</body>
</html>
