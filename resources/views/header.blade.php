<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" href="css/intro.css">
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="Images/logo.png" alt="logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/search/housedetail">House</a></li>
            <li><a href="/search/flatdetail">Flats</a></li>
            <li><a href="/search/roomdetail">Rooms</a></li>
            <li><a href="">About Us</a></li>
        </ul>
        <div class="header-btn">
            @if (session()->has('login')==null)
                <a href="/login" class="login">Log In</a>
                <a href="/signup" class="signup">Sign Up</a>
            @endif



            

            @if (session()->has('login')!= null && session()->get('login')=='admin@test.com')
                <a href="/admin/index" class="upload">Admin Dashboard</a>
            @endif

            @if (session()->has('login') != null)
            <a href="/upload" class="upload">Upload</a>
                <a href="/registration/profile" class="login">Profile</a> <a href="/registration/logout"
                    class="signup">LogOut</a>
            @endif

        </div>
    </header>

</body>

</html>
