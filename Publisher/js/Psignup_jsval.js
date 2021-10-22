var hasError=false;
	function get(id) {
	return document.getElementById(id);
	}

		function validate(){
			refresh();
			//start fastname
			if(get("fname").value == ""){
				hasError = true;
				get("err_fname").innerHTML = "*First-name required";
			}
			else if(get("fname").value.length <3){
				hasError = true;
				get("err_fname").innerHTML = "*First-name must be 3 characters";
			}
			//start lastname
			if(get("lname").value == ""){
				hasError = true;
				get("err_lname").innerHTML = "*Last-name required";
			}
			else if(get("lname").value.length <3){
				hasError = true;
				get("err_lname").innerHTML = "*Last-name must be 3 characters";
			}
			//start username
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*User-name required";
			}
			else if(get("uname").value.length < 3){
				hasError = true;
				get("err_uname").innerHTML = "*User-name must be 3 characters";
			}
			//start password
			if(get("pass").value == ""){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word required";
			}
			else if(get("pass").value.length < 5){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word must be 5 characters";
			}
			
			if (get("role").selectedIndex == 0) {
			hasError = true;
			get("err_role").innerHTML = "*Role required";
			}
			
			
		return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_fname").innerHTML ="";
			get("err_lname").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			get("err_role").innerHTML = "";
			
}