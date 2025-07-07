<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
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
        .btn {
            display: inline-block;
            padding: 14px 24px;
            background-color: #4F46E5;
            color: #FFFFFF;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 20px;
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
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">Reset Your Password</h1>
            <p style="margin: 10px 0 0; color: #6B7280; font-size: 15px;">
                You requested to reset your password. Click the button below to continue.
            </p>
        </div>

        <div class="content">
            <p style="font-size: 16px; margin-bottom: 20px;">
                Click the button below to set a new password for your account:
            </p>
            
            <div style="text-align:center; margin: 30px 0;">
                <a href="<?= htmlspecialchars($url) ?>" 
                   style="display: inline-block; padding: 12px 24px; background-color: #4F46E5; color: #fff; text-decoration: none; border-radius: 8px; font-size: 16px; font-weight: 600;">
                    Reset Password
                </a>
            </div>
        
            <p style="font-size: 15px; color: #6B7280; margin-top: 30px;">
                If the button doesn't work, copy and paste this link into your browser:<br>
                <a href="<?= htmlspecialchars($url) ?>" style="color: #4F46E5; word-break: break-all;">
                    <?= htmlspecialchars($url) ?>
                </a>
            </p>
        
            <p style="font-size: 15px; color: #6B7280; margin-top: 30px;">
                If you didn’t request a password reset, you can safely ignore this email.
            </p>
        </div>
        

        <div class="footer">
            <p style="margin: 0;">&copy; <?= date('Y') ?> <a href="https://veltophp.com" style="color:#4F46E5;">veltophp.com</a></p>
        </div>
    </div>
</body>
</html>
