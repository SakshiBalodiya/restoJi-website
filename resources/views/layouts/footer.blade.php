<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
</head>
<body>
    <footer class="footer mt-auto">
        <div class="container">
            <div class="pt-5">
                <img src="resources/images/majestic-technosoft-pvt-ltd.png" alt="Majestic Logo" height="54px">
                @if (Str::contains(request()->url(), 'restoji')) 
                <p class="pt-2">
                    <img src="{{ asset('images\logo.png') }} " alt="logo" height="54px"> <span class="title">
                        - A Product by Majestic Technosoft Pvt. Ltd.</span>
                </p>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-4 footer-left">
                    <p>
                        Majestic Technosoft is the fastest growing offshore service provider 
                        in India, offering a wide range of web development, web design, flash 
                        and web 2.0 services to organizations across the globe.
                        While working with us, you will start to view Majestic Technosoft as an 
                        important extension of your own valuable team.
                    </p>
                </div>
                <div class="col-lg-4 footer-middle">
                    <ul>
                        <li><img src="{{ asset('images\call-icon.png') }} " alt="call-icon"> <span> <a href="tel:+91 9636359448">+91 9636359448</li>
                        <li><img src="{{ asset('images\mail-icon.png') }} " alt="mail-icon"> <span> <a href="mailto:info@majestictech.co.in">info@majestictech.co.in</a> </li>
                        <li><img src="{{ asset('images\web-icon.png') }} " alt="web-icon"> <span> <a href="https://www.majestictech.co.in">https://www.majestictech.co.in/ </a></li>
                        <li><img src="{{ asset('images\web-icon.png') }} " alt="web-icon"> <span> <a href="https://host.majestictech.co.in/">https://host.majestictech.co.in/ </a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-right">
                    <img src="{{ asset('images\location-icon.png') }} " alt="location-icon">
                    <p>
                        <strong>Majestic Technosoft Pvt. Ltd. - </strong><br><span>
                        B-177 Nityanand Nagar, Queen’s Road<br>
                        Jaipur, Rajasthan - 302021
                        <span>
                    </p>
                </div>
            </div>
          
        </div>
        <div class="border_top">
            <div class="container">
                <div class="footer-bottom d-flex">
                    <div class="col-lg-6">
                        <p>Copyright © 2025 Majestic Technosoft Pvt. Ltd. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 text_align">
                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>