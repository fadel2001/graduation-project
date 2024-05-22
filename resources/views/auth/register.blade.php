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
            background-color: #A9E0B7;
        }

        .custom-input {
            border-radius: 50px;
            /* Half-circle borders */
            padding-left: 20px;
        }

        .custom-form {
            background-color: #56C271;
            border-radius: 50px;
            /* Half-circle borders */
            padding-left: 20px;
        }

        .custom-register {
            border-radius: 50px;
        }
    </style>


</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Left Column for Text -->
            <div class="col-lg-5 d-flex align-items-center">
                <p class="fst-italic" style="font-size: 3rem;">
                    It's your world. <br> We will help you explore it!
                </p>
            </div>
            <!-- Right Column for Form -->
            <div class="col-lg-7">
                <div class="card my-5 custom-form" style="background-color: #e0ffe0;">
                    <div class="card-body p-4">
                        <h2 class="card-title text-center">{{ __('Register') }}</h2>
                        <form action="{{ route('auth.register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <x-input-label for="name" :value="__('Name')" class="form-label" />
                                <x-text-input id="name" class="form-control custom-input" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name"
                                    placeholder="Your Name.." />
                                <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
                            </div>
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" class="form-label" />
                                <x-text-input id="email" class="form-control custom-input" type="email"
                                    name="email" :value="old('email')" required autocomplete="username"
                                    placeholder="Your Email.." />
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                            </div>
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Password')" class="form-label" />
                                <x-text-input id="password" class="form-control custom-input" type="password"
                                    name="password" required autocomplete="new-password"
                                    placeholder="Your Password.." />
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                            </div>
                            <div class="mb-3">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                                <x-text-input id="password_confirmation" class="form-control custom-input"
                                    type="password" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Your Password.." />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
                            </div>
                            <div class="d-grid text-center">
                                <x-primary-button class="btn btn-primary custom-register">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                            <div class="text-center mt-3">
                                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
