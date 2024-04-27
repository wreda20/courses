<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('assets/Site/css/styles.css')}}" />
</head>
<body>
<section class="auth">
    <div class="container">
        <div class="auth-btns">
            <a href="{{ route('login') }}" class="login-btn">Login</a>

            <a href="{{ route('register') }}" class="login-btn active">Sign Up</a>
        </div>

        <div class="auth-layout">
            <div class="auth-form">
                <h1 class="auth-title">Sign Up</h1>

                <form class="login" action="{{ route('create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="email" />
                    </div>

                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control" name="password" />
                    </div>

                    <div class="form-group">
                        <a href="#" type="submit" role="button" onclick="event.preventDefault();this.closest('form').submit();"> Sign Up </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
