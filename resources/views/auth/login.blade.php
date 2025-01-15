<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Use CDN to link Bootstrap and Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>User Login Form</title>
</head>
<body>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-8">

            <!-- Success Alert -->
            @if(session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session("success") }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  

            <!-- Error Alert -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col justify-content-center mb-4">
                <img src="https://static-00.iconduck.com/assets.00/laravel-icon-995x1024-dk77ahh4.png" alt="" class="img-fluid" style="width: 100px;">
            </div>

            <h1 class="pb-2 mb-4 text-primary-emphasis border-bottom border-danger" style="font-weight: 700;">Sign In</h1>
                <form action="{{route('login.submit')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <label for="password">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3 mb-3" name="submit">Log In</button>
             
                    <div class="col mt-3">
                        <p class="text-secondary" style="font-size: 20px;">Don't have an account? <a href="register" style="text-decoration: none; color: red;">Sign Up</a></p>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</body>
</html>   