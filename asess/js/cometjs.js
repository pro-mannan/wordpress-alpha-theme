(function($){
	$(document).ready(function(){
		$("#navigation ul li ul").addClass('submenu');
		$("#navigation ul li ul.submenu").parent('li').addClass('has-submenu');
	});
})(jQuery)