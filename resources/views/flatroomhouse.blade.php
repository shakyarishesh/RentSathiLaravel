<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
    <link rel="stylesheet" href="{{ asset('css/intro.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    @include('header')
    
    <section class="services" id="service">
        <div class="services-container">
            @foreach ($rentDetails as $rent)
                <div class="box">
                    <div class="box-img">
                        <!--  -->
                        <img src="/storage/{{ $rent->image_path }}" alt="Image">

                    </div>
                    <p>{{ $rent->created_at }}</p>
                    @if ($rent->status == 'available')
                        <div style="color: green;">● {{$rent->status}}</div>
                    @endif

                    @if ($rent->status == 'pending')
                        <div style="color: yellow;">● {{$rent->status}}</div>
                    @endif

                    <h3>{{ $rent->title }}</h3>
                    <h2>
                        {{ $rent->price }}<span>/per Month</span>
                    </h2>
                    <p>Location: {{ $rent->location }}</p>
                    <a href="${pageContext.request.contextPath}/book/rentNow/${rentDetail.rent_id}" class="btn">Rent
                        Now</a>
                </div>
            @endforeach


        </div>
    </section>
    <section>
        <div class="container">
            <a href="/" style="text-decoration: none; color: inherit;"><button
                    style="font-size: 20px; background-color: #ff6600; color: white; border: none; padding: 10px 20px;">Back</button></a>
        </div>
    </section>


</body>

</html>
