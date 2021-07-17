const username = document.querySelector("#username");
const password = document.querySelector("#password");
const submit = document.querySelector("#submit-btn");

submit.addEventListener("click", function(event) {
	if (username.value == "" && password.value == "") {
		alert("Username / Password tidak boleh kosong");
	}else if(username.value == "admin" && password.value == "123456"){
		event.preventDefault();
		window.location.replace("index.html");
	}else{
		alert("Username / Password salah");
		
	}
})