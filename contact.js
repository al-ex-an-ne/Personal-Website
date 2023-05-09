function submitContactMsg(){
	var name = document.getElementById("name").value;
	var email= document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var msg = document.getElementById("msg").value;
	var content = name + "|" + email + "|" + phone + "|" + msg;

	var file = new File([content], "adminContact.txt", {type:"text/plain"});
	
	if (name.trim().length !== 0 && email.trim().length !== 0 && phone.trim().length !== 0 && msg.trim().length != 0){
		var link = document.createElement("a");
		link.href = window.URL.createObjectURL(file);
		link.download = "adminContact.txt";
		link.click();
	}
}