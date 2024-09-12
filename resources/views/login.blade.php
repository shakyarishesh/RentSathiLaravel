<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    @if (@isset($message))
        <div style="color:red" class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="login">
        <form action="/loginPost" method="POST">
            @csrf
            <div class="title">Log In</div>
            <div class="inputbox">
                <input type="text" name="email" id="" placeholder="Enter your email" required>
                <div class="underline"></div>
            </div>
            <div class="inputbox">
                <input type="password" name="pwd" id="" placeholder="Enter your password" required>
                <div class="underline"></div>
            </div>
            <div class="inputbox button">
                <input type="submit" value="Continue">
            </div>
        </form>
        <div class="option">Or Connect With Social Media</div>
    <div class="twitter">
        <a href="#"><li class="l fab fa-twitter"></li>Login with Twitter</a>
    </div>
    <div class="facebook">
        <a href="#"><li class="l fab fa-facebook-f"></li>Login with Facebook</a>
    </div>
    <div>
        <a href="/signup">Create your
            account</a>

    </div>
</div>
</body>
</html>