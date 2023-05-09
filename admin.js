function processLogin(){
	var userBox = document.getElementById("username");
	var passwordBox = document.getElementById("password");
	var username = userBox.value;
	var password = passwordBox.value;
	var validUser = "JohnDoe123";
	var validPassword = "AdminPassword";
	if (username === validUser && password === validPassword){
		window.open("adminWebsite/adminIndex.html","_top");
		sessionStorage.setItem("username", username);
		sessionStorage.setItem("password", password);
		sessionstorage.setItem("loginTime", Date.now());
		sessionStorage.setItem("userAgent", navigator.userAgent);
	}
	else {
		if (!(username === validUser)){
			userBox.style.borderColor = "red";
			userBox.style.borderWidths = "10px";
			userBox.style.borderRadius = "5px";
		}
		if (!(password === validPassword)){
			passwordBox.style.borderColor = "red";
			passwordBox.style.borderWidths = "10px";
			passwordBox.style.borderRadius = "5px";
		}
	}
}