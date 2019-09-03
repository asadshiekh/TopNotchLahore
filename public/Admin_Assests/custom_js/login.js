function dologin(){

	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var email = $("#admin_email").val();
	var password = $("#admin_password").val();
	
	if (email == "") {

		alert("email is empty");
	}

}

 var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 0;
        }
        
    });