<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f4f6;
        }
        
        .card {
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80vw; /* 90% of viewport width */
            height: 80vh; /* 90% of viewport height */
            display: flex; /* Flex container for background and form */
        }
        .bg {
        background-image: url("resources/images/BG.svg"); 
        background-size: cover;
        background-position: center;
        flex: 0.8; 
        border-radius: 15px; 
        }
        /* .bg {
            background-image: url("resources/images/Frame.svg");
            background-size: cover;
            background-position: center;
            display: flex; 
            justify-content: center; 
            align-items: flex-start; 
            flex: 0.8;
            border-radius: 15px;
            position: relative; 
            padding-top: 10%;
        } */
        /* .logo {
            max-width: 100%; 
            height: auto; 
        } */
        
        .form {
            flex: 1; 
            padding: 0 20px; 
            display: flex; 
            flex-direction: column; 
            justify-content: center;
            align-items: center;
        }
        
        form {
            width: 100%; 
            max-width: 400px; 
            text-align: center; 
        }
        .block{
            width: 100%; 
            max-width: 400px;
            padding: 10px 0px 10px 35px;
            text-align: left;
            color: #89868D;
        }
        .loginBtn {
            width: 330px;
            border: 1px solid #C72C3C;
            background-color: #C72C3C;
            height:46px;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .forgetBtn{
            margin-top: -35px;
            margin-right: 37px;
            margin-bottom: 5px;
            width: 100%;
            max-width: 400px;
            padding: 7px 0px 10px 0px;
            text-align: right;
            color: #c72c3c;
            text-decoration: none;
        }
        .input{
            width: 330px;
            background-color: #F4F5F9;
            border: 1px solid #DBDCDE;
            height:46px;
            border-radius: 8px;
            padding-left: 14px;
            transition: border-color 0.3s;
        }
        .input::placeholder {
            /* padding-left: 10px;  */
            color: #999; 
        }
        .input:focus {
            border: 2px solid #c72c3c;
            outline: none;
        }
        .input:focus::placeholder {
        color: #c72c3c; 
        }

        .input.error {
            border: 2px solid #c72c3c;
        }

        .error-message {
            display: none;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                flex-direction: column; 
                height: auto; 
            }
            .bg, .form {
                flex: auto; 
                border-radius: 8px; 
                margin: 10px 0; 
            }
        }
        h2{
            color: #3A3541;
            font-size: 26px;
        }



        /* Hide the default checkbox */
.custom-checkbox {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

/* Create a custom checkbox */
.custom-checkbox-container {
    position: relative;
    display: inline-flex;
    align-items: center;
    cursor: pointer;
}

/* Style the custom checkbox */
.custom-checkbox-label {
    display: inline-block;
    width: 15px;
    height: 15px;
    border: 1px solid gray;
    border-radius: 3px;
    background-color: white;
    position: relative;
    transition: background-color 0.2s, border-color 0.2s;
}

/* Change background color and border when checked */
.custom-checkbox:checked + .custom-checkbox-label {
    background-color: #C72C3C;
    border-color: #C72C3C;
}

/* Add a checkmark when checked */
.custom-checkbox:checked + .custom-checkbox-label::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: translate(-50%, -50%) rotate(45deg);
}
.custom-checkbox-label + span {
    margin-left: 5px; 
}
.heading {
    margin-top: 15px;
}
    </style>
</head>
<body>
    <div class="card">
        <div class="bg">
        <!-- <img src="{{asset('images/restoji_logo.svg')}}" alt="logo" class="logo"> -->
        </div>
        <div class="form">
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h2 class="heading">Sign In</h2> <br>
        <p style="color: #89868D; max-width: 270px; text-align: center;">Login with your account credentials to access panel. </p><br>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="email">
                {{-- <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> --}}
                <input id="email" placeholder="Email Address " class="input" type="email" name="email" :value="old('email')" required="required"/>
                <span class="error-message" id="email-error">This field is required.</span>
            </div>
            <br>
            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> --}}
            <div class="password">
                <!-- <x-label for="password" :value="__('Password')" /> -->
                <input id="password" class="input" type="password" name="password" placeholder="Password" required/>
            </div>


            <!-- Remember Me -->
            <div class="block mt-4 flex justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="forgetBtn mt-4">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900 forgetBtn border_bottom" style="border-bottom: 1px solid #C72C3C; padding-bottom: 1px;" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>

                @endif
            </div>
                {{-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> --}}
                <div class="form-footer">

                    <button class="loginBtn">
                        Sign In
                    </button>
                </div>
            
        </form>
    </div>  
</div>
</body>
<script>

</script>
</html>

