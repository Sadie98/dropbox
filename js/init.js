$(function(){
	$('.modal').modal({ dismissible:false });

	$('#authorization a.btn.sign-in').click(function(){
		var email = $('#email').val();
		var password = $('#password').val();

		console.log(email);
		$.post("../modules/login.php", { email:email, password:password })
			.done(function(data){
				$('.modal').modal('close');
			});
	});

	$('#authorization a.btn.sign-up').click(function(){
		var email = $('#email').val();
		var password = $('#password').val();

		console.log(email);
		$.post("../modules/reg.php", { email:email, password:password })
			.done(function(data){
				$('.modal').modal('close');
			});
	});
});