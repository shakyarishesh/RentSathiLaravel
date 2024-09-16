<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile</title>
<link rel="stylesheet"
	href="css/profilestyle.css">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
	rel="stylesheet">
</head>
<body
	style="background-image: url(Images/Background1.png)">
	<main>
			<section class="profile-container">
               
                <div class="profile-info">
					<div class="profile-picture-container">
						<img id="profile-picture"
							src="Images/Background.png"
							alt="Profile picture"> <label for="profile-upload"
							class="upload-button">Your Profile</label> <input
							type="file" id="profile-upload" accept="image/*"
							style="display: none;">
					</div>
					<p>
						Name:<span id="name">{{$userDetails->fullname}}</span>
					<p>
					<p>
						Username: <span id="username">{{$userDetails->email}}</span>
					</p>
					<p>
						Email: <span id="email">{{$userDetails->email}}</span>
					</p>
					<p>
						Phone: <span id="phone">{{$userDetails->phone}}</span>
					</p>
				</div>
				<div class="profile-info">
					<h3>Other Information</h3>
					<p>
						Occupation: <span id="occupation">{{$userDetails->occupation}}</span>
					</p>
					<p>
						Gender: <span id="gender">{{$userDetails->gender}}</span>
					</p>
					<p>
						Address Type: <span id="address-type">{{$userDetails->addressType}}</span>
					</p>
					<p>
						City: <span id="city">{{$userDetails->city}}</span>
					</p>
					<p>
						Province: <span id="province">{{$userDetails->province}}</span>
					</p>
					<p>
						District: <span id="district">{{$userDetails->district}}</span>
					</p>
				</div>

				<!-- <div class="profile-settings">
					<h3>Account Settings</h3>
					<ul>
						<li><a href="#">Edit Profile</a></li>
						<li><a href="/changepass.html">Change password</a></li>
						<li><a href="#">Delete Account</a></li>
					</ul>
				</div> -->
				<div class="profile-info">
					<a href="${pageContext.request.contextPath}/book/bookingDetails"
						style="text-decoration: none;">
						<button type="button">Your Bookings</button>
					</a>
				</div>
				<div class="container">
					<a href="/"
						style="text-decoration: none; color: inherit;"><button
							style="font-size: 20px; background-color: #ff6600; color: white; border: none; padding: 10px 20px;">Back</button></a>
				</div>
               
				

			</section>
		
	</main>
	<script
		src="js/profscript.js"></script>
</body>
</html>