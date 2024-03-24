<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Login Page</title>

    <style>
        body {
            background-color: #f2f2f2;
        }

        h2 {
            color: #4CAF50;
            text-align: center;
        }

        form {
            border: 3px solid #f1f1f1;
            width: 50%;
            margin: auto;
            padding: 10px;
            background-color: white;
        }

        label {
            font-size: 20px;
            font-weight: bold;
        }

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=checkbox] {
            margin-top: 16px;
            margin-bottom: 16px;
        }

        label[for=remember] {
            font-size: 16px;
        }

        div {
            margin-bottom: 16px;
        }

    </style>

</head>
<body>
<h2>Pharmacy Login Page</h2>
@if(session('error'))
    <?php
    echo " error is occurred";
    ?>
    <div class="alert alert-danger">
        <strong>{{ session('error') }}</strong>
    </div>
@endif
<form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div>
        <label for="email">Email or phone:</label>
        <input type="email" id="email" name="email" required autofocus>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
    <div>
        do not have account<a href="{{route('register')}}" style="color: blue; text-decoration:none;font-size: 20px"> register</a>
    </div>
</form>
</body>
</html>
