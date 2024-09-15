<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction page</title>
    <link rel="stylesheet" href="{{ asset('css/intro.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<body>
    @if (isset($message))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @include('header')
    <!-- Home  -->
    <section class="home" id="home">
        <div class="slideshow">
            <img class="slide" src="/Images/Background4.png" alt="image 1">
            <img class="slide" src="/Images/apartment.jpg" alt="image 2">
            <img class="slide" src="/Images/Background1.png" alt="image 3">
            <img class="slide" src="/Images/Background4.png" alt="image 4">
        </div>
        <div class="text">
            <h1><span>Discover Comfort,</span><br>Rent with Ease.</h1>
            <p>Seamless Rentals, Tailored for You. Find your perfect space hassle-free. Secure, convenient, and
                personalized living solutions at your fingertips.</p>
        </div>
        <!-- This below will show the flats or houses and when the person tries to click on the items they want they need to log in or signup to look into that product in more detailed way -->
        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location:</span>
                    <input type="search" name="Search" id="searchplace" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Type of Space:</span>
                    <select id="dropdown" name="dropdown">
                        <option value="option1">House</option>
                        <option value="option2">Rooms</option>
                        <option value="option3">Flats</option>
                        <option value="option4">Hostel</option>
                    </select>
                </div>
                <div class="input-box">
                    <span>No of peoples: </span>
                    <input type="number" id="quantity" name="quantity" min="1" max="">
                </div>
                <input type="submit" name="submit" id="submitbtn" class="btn">
            </form>
        </div>
    </section>
    <section class="rent" id="rent">
        <div class="heading">
            <span> How Its Done</span>
            <h1>Rent With 4 Easy Steps</h1>
        </div>
        <div class="rent-container">
            <div class="box">
                <i class='bx bx-log-in'></i>
                <h2>Log In or Register your Account</h2>
                <p>The first step is to create your account. Please fill up all the required fields nicely</p>
            </div>
            <div class="box">
                <i class='bx bx-map'></i>
                <h2>Choose a Location</h2>
                <p>The next step is to choose the location that you want to stay or prefer.</p>
            </div>
            <div class="box">
                <i class='bx bxs-home-heart'></i>
                <h2>Choose your preferred space</h2>
                <p>Then choose your choice of space, like do you want to rent a Apartment, house, flat or rooms. </p>
            </div>
            <div class="box">
                <i class='bx bxs-contact'></i>
                <h2>Contact with the Owner</h2>
                <p>Lastly, you can contact with the owner and the you can prepare for visit to your new home. </p>
            </div>
        </div>
    </section>
    <section class="services" id="service">
        <div class="heading">
            <h1> <br> <span> Our Top Picks </span><br>Explore Our Top Deals <br><span> From Top Rated Dealers</span>
            </h1>
        </div>
        @foreach ($rentDetails as $rent)
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="/storage/{{$rent->image_path}}" alt="Apartment on rent">
                </div>
                
                    <p>{{$rent->created_at}}</p>
                   
                <h3>{{$rent->title}}</h3>
                <h2>{{$rent->price}}<span>/per Month</span></h2>
                {{$rent->description}}
                <p>Location: {{$rent->location}}</p>
                
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div>
        @endforeach
        
        {{-- <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="/Images/apartment.jpg" alt="Apartment on rent">
                </div>
                <div class="date">
                    <p>2024-1-15</p>
                    <p>Location: </p>
                </div>
                <h3>Fully Furnished Apartment on Rent</h3>
                <h2>Rs50,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/2BHK.jpg" alt="Apartment on rent">
                </div>
                <div class="date">
                    <p>2024-1-15</p>
                    <p>Location: </p>
                </div>
                <h3>Fully Furnished 2BHK Flat on Rent</h3>
                <h2>Rs30,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/2bhk1.jpg" alt="Apartment on rent">
                </div>
                <div class="date">
                    <p>2024-1-15</p>
                    <p>Location: </p>
                </div>
                <h3>Fully Furnished 2BHK flat on Rent</h3>
                <h2>Rs40,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/3BHK.jpg" alt="Apartment on rent">
                </div>
                <p>2024-1-20</p>
                <h3>Fully Furnished 3BHK Flat on Rent</h3>
                <h2>Rs45,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/bunglow.jpg" alt="Apartment on rent">
                </div>
                <p>2024-1-20</p>
                <h3>Beautiful Bunglow Up for Rent or Sale </h3>
                <h2>Rs 70,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/fullhouse.jpg" alt="Apartment on rent">
                </div>
                <p>2024-1-20</p>
                <h3>Newly Constructed house on rent</h3>
                <h2>Rs 55,000<span>/per Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/Images/housinside.jpg" alt="Apartment on rent">
                </div>
                <p>2024-1-20</p>
                <h3>Fully Furnished Apartment on Rent</h3>
                <h2>Rs50,000 <span>/Month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div> --}}
        <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </section>
    <script src="main.js"></script>
    <footer>
        <p>&copy; RentSathi 2024. All rights reserved.</p>
    </footer>

</body>

</html>
