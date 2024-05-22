<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Register</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Linericon CSS -->
        <link rel="stylesheet" href="vendors/linericon/style.css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

        <!-- Bootstrap DateTimePicker CSS -->
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">

        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
       
        <style>
            body {
                background-color:#A9E0B7;
            }
            .custom-input {
                border-radius: 50px; /* Half-circle borders */
                padding-left: 20px;
            }
            .custom-form {
                background-color:#56C271;
                border-radius: 50px; /* Half-circle borders */
                padding-left: 20px;
            }
            .custom-login {
                border-radius: 50px;
            }
        </style>
        
        
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card my-5 custom-form" style="background-color: #e0ffe0;">
                    <div class="card-body p-4">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form action="{{ route('auth.login.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" class="form-label"/>
                                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                                    autofocus autocomplete="username" class="form-control custom-input"/>
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                            </div>
                            
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" class="form-label"/>
                    
                                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                                    autocomplete="current-password" class="form-control custom-input"/>
                    
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="d-grid text-center">
                                <x-primary-button class="btn btn-primary custom-login">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('register') }}">
                                    {{ __('Register instead ') }}
                                </a>
                            </div>
                            

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





{{-- <x-guest-layout>
     Session Status
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form action="{{ route('auth.login.store') }}" method="POST">
        @csrf

       
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

      
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

       
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>


        <div>
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('Register instead ') }}
            </a>
        </div>
    </form>
</x-guest-layout> --}}
