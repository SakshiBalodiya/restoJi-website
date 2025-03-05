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
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: 0.3s;
        }
        .header {
            background-color: #ffff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header img {
            margin-bottom: 10px;
        }
        .sub-header h1 {
            font-size: 26px;
            margin: 0;
            color: #C72C3C;
            font-weight: bold;
        }
        .sub-header {
            background-color: #fef9f9e0;
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
        .h2 {
            font-size: 15px;
            color: #484646;
            margin: 0px;
            font-weight: 500;
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
        .card{
           
        }
    </style>
</head>
<body>
    <div class="card email-container">
        <div class="header">
            <img src="https://restoji.com//resources/images/logo.png" alt="logo">
           
        </div>
        <div class="sub-header">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="height: 100%;">
                <tr>
                    <td align="center" valign="middle">
                        <div class="sub-header-content">
                            <h1>Contact Request</h1>
                            <h2>You have received a contact request from the website. Here are the details:</h2>
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