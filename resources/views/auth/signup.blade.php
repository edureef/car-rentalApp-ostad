<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up - Car Rental</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
        <div class="card w-25">
            <div class="card-body">
                <div class="card-title my-4">
                    <h5 class="text-center">Car Rental Sign Up</h5>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="inputName"
                            aria-describedby="nameHelp">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="inputEmail"
                            aria-describedby="emailHelp">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="inputPassword">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-sm"
                            id="inputConfirmPassword">
                        @error('confirm_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary w-100">Sign Up</button>
                </form>
                <p class="mt-4">Already have an account?<a href="/login" class="ms-2">Login</a></p>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
