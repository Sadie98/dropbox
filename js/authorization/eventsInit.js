dropbox.authorizationEventsInit = function(){
	$('a.btn.sign-in', dropbox.$authorization).click(function(){
		var email = $('#email').val();
		var password = $('#password').val();

		$.post('../modules/login.php', { email:email, password:password})
			.done(function(user_id){
				$('.modal').modal('close');
				$.ajax({url: '../modules/files.php', data:{ path:user_id }});
			});
	});

	$('a.btn.sign-up', dropbox.$authorization).click(function(){
		var email = $('#email').val();
		var password = $('#password').val();

		$.post("../modules/reg.php", { email:email, password:password })
			.done(function(data){
				$('.modal').modal('close');
			});
	});
};