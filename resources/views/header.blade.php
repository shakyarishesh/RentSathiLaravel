
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Header</title>
<link rel="stylesheet"
	href="${pageContext.request.contextPath}/resources/css/intro.css">
</head>
<body>
	<header>
		<a href="#" class="logo"><img
			src="Images/logo3.jpg" alt="logo"></a>
		<div class="bx bx-menu" id="menu-icon"></div>
		<ul class="navbar">
			<li><a href="/intro">Home</a></li>
			<li><a
				href="<c:url value="/search/housedetail"/>">House</a></li>
			<li><a
				href="<c:url value="/search/flatdetail"/>">Flats</a></li>
			<li><a
				href="<c:url value="/search/roomdetail"/>">Rooms</a></li>
			<li><a href="<c:url value="/registration/aboutus"/>">About Us</a></li>
		</ul>
		<div class="header-btn">
			<%-- <c:if test="${email == null}">
				<a href="${pageContext.request.contextPath}/registration/login"
					class="login">Log In</a>
				<a href="${pageContext.request.contextPath}/registration/register"
					class="signup">Sign Up</a>
			</c:if> --%>
			<%
			if (login == null) {
			%>
			<a href="<c:url value="/registration/login"/>"
				class="login">Log In</a> <a
				href="<c:url value="/registration/register"/>"
				class="signup">Sign Up</a>
			<%
			}
			%>
			<%
			/* if (login != null && login.equalsIgnoreCase("admin@gmail.com")) { */
				if (login != null ) {
			%>
			<a href="${pageContext.request.contextPath}/rent/upload"
				class="upload">Upload</a>
			<%
			}
			%>
			<%
			if (login != null && login.equalsIgnoreCase("admin@gmail.com")) {
			%>
			<a href="${pageContext.request.contextPath}/admin/index"
				class="upload">Admin Dashboard</a>
			<%
			}
			%>
			<%
			if (login != null) {
			%>
			<a href="${pageContext.request.contextPath}/registration/profile"
				class="login">Profile</a> <a
				href="${pageContext.request.contextPath}/registration/logout"
				class="signup">LogOut</a>
			<%
			}
			%>
		</div>
	</header>

</body>
</html>