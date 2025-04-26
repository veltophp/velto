<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style type="text/css">
        body {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #374151; /* Dark gray text */
            background-color: #F9FAFB; /* Light gray background */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 0;
            border: 1px solid #E5E7EB; /* Subtle border */
            border-radius: 12px;
            overflow: hidden;
            background-color: #FFFFFF; /* White container */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .header {
            background-color: #FFFFFF; /* White header */
            color: #111827;
            padding: 28px 20px;
            text-align: center;
            border-bottom: 1px solid #E5E7EB;
        }
        .content {
            padding: 30px;
            background-color: #FFFFFF;
        }
        .footer {
            text-align: center;
            padding: 24px;
            color: #6B7280; /* Medium gray text */
            font-size: 14px;
            background-color: #F9FAFB;
            border-top: 1px solid #E5E7EB;
        }
        .divider {
            border-top: 1px solid #E5E7EB;
            margin: 24px 0;
        }
        .button {
            display: inline-block;
            background-color: #4F46E5; /* Indigo accent */
            color: white !important;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 15px;
            transition: background-color 0.2s;
        }
        .button:hover {
            background-color: #4338CA; /* Darker indigo on hover */
        }
        .logo {
            max-width: 160px;
            height: auto;
            margin-bottom: 16px;
        }
        .message-box {
            background-color: #F9FAFB;
            padding: 18px;
            border-radius: 8px;
            border-left: 4px solid #4F46E5;
        }
        .accent {
            color: #4F46E5; /* Indigo accent color */
        }
        a {
            color: #4F46E5;
            text-decoration: none;
            transition: color 0.2s;
        }
        a:hover {
            color: #6366F1;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header with Logo -->
        <div class="header">
            <img src="https://res.cloudinary.com/dmnble1qr/image/upload/v1744859332/velto_zfond5.png" alt="Velto Logo" class="logo">
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">New Contact Form Submission</h1>
            <p style="margin: 10px 0 0; color: #6B7280; font-size: 15px;">You've received a new message from your website</p>
        </div>
        
        <!-- Content -->
        <div class="content">
            <div style="margin-bottom: 28px;">
                <h2 style="margin: 0 0 16px 0; font-size: 20px; color: #4F46E5; font-weight: 600;">Contact Details</h2>
                <table cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tr>
                        <td style="width: 100px; font-weight: 500; padding: 10px 0; color: #6B7280;">Name:</td>
                        <td style="padding: 10px 0; font-weight: 500;"><?php echo htmlspecialchars($name); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 100px; font-weight: 500; padding: 10px 0; color: #6B7280;">Email:</td>
                        <td style="padding: 10px 0;">
                            <a href="mailto:<?php echo htmlspecialchars($email); ?>">
                                <?php echo htmlspecialchars($email); ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100px; font-weight: 500; padding: 10px 0; vertical-align: top; color: #6B7280;">Date:</td>
                        <td style="padding: 10px 0;"><?php echo date('F j, Y, g:i a'); ?></td>
                    </tr>
                </table>
            </div>
            
            <div class="divider"></div>
            
            <div style="margin-bottom: 24px;">
                <h2 style="margin: 0 0 16px 0; font-size: 20px; color: #4F46E5; font-weight: 600;">Message</h2>
                <div class="message-box">
                    <?php echo nl2br(htmlspecialchars($message)); ?>
                </div>
            </div>
            
            <div class="divider"></div>
            
            <div style="text-align: center;">
                <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="button">Reply to Sender</a>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p style="margin: 0;">This email was sent from your website's contact form.</p>
            <p style="margin: 12px 0 0;">
                &copy; <?php echo date('Y'); ?> <a href="https://veltophp.com">veltophp.com</a>
            </p>
            <p style="margin: 8px 0 0;">
                Follow us on <a href="https://instagram.com/veltophp">Instagram</a>
            </p>
        </div>
    </div>
</body>
</html>