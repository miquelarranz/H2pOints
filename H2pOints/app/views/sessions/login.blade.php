<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/main.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Sign In!</h1>
                    {{ Form::open(['route' => 'login_path']) }}
                        <!-- Email Form Input -->
                        <div class = "form-group">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!-- Password Form Input -->
                        <div class = "form-group">
                            {{ Form::label('password', 'Password:') }}
                            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required'] ) }}
                        </div>

                        <div class = "form-group">
                            {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>


