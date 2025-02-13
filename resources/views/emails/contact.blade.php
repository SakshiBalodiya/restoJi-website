<!-- resources/views/emails/contact.blade.php -->
{{-- <h1>New Contact Message</h1>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #ffff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header img {
            width: 100px;
            margin-bottom: 10px;
        }
        .sub-header h1 {
            font-size: 26px;
            margin: 0;
            color: #1DA1EC;
            font-weight: bold;
        }
        .sub-header {
            background-color: #F9F9F9;
            text-align: center;
            height: 100px;
            display: flex;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
        }
        .content {
            padding: 20px;
        }
        .sub-header h2 {
            font-size: 20px;
            color: #333;
            margin: 0px
        }
        .content p {
            margin: 5px 0;
            color: #555;
            border-bottom: 1px solid #e3e3e3;
            padding-bottom: 6px;
            padding-top: 6px;
        }
        .content .info {

            margin-top: 10px;
            padding-top: 10px;
        }
        .info p {
            font-size: 14px;
        }
        .footer {
            background-color: #f9f9f9;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        .social-links {
            margin: 10px 0;
        }
        .social-links a {
            margin: 0 5px;
            display: inline-block;
            text-decoration: none;
        }
        .social-links img {
            width: 24px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="https://www.google.com/u/0/ac/images/logo.gif?uid=103563472128745450479&service=google_gsuite" alt="logo">
           
        </div>
        <div class="sub-header">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="height: 100%;">
                <tr>
                    <td align="center" valign="middle">
                        <div class="sub-header-content">
                            <h1>Congratulations</h1>
                            <h2>You have a new inquiry from your website</h2>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="content">
            <div class="info">
                <p><strong>Name</strong>
                    <br>
                    {{ $data['name'] }}</p>
                <p><strong>Email</strong> 
                    <br>{{ $data['email'] }}</p>
                <p><strong>Contact</strong> 
                    <br>{{ $data['phone'] }}</p>
                <p><strong>Message</strong><br> {{ $data['message'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>