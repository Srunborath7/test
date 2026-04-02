<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>

        <form action = "{{ url('/login') }}"  method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Email address
                </label>
                <input 
                    type="email"
                    name="email" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    placeholder="Enter your email"
                >
                <div id="emailHelp" class="form-text">
                    We'll never share your email with anyone else.
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input 
                    type="password" 
                    name = "password"
                    class="form-control" 
                    id="exampleInputPassword1" 
                    placeholder="Enter your password"
                >
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input 
                        type="checkbox" 
                        class="form-check-input" 
                        id="exampleCheck1"
                        
                    >
                    <label class="form-check-label" for="exampleCheck1">
                        Remember me
                    </label>
                </div>
                <a href="#" class="text-decoration-none small">
                    Forgot password?
                </a>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Login
            </button>
        </form>
    </div>
</div>
</body>
</html>