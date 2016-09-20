function showModal ($modal) {

	closeModal();
	if ($modal.length) {

		$(".modal-bg").fadeIn("fast");
		$(".modal-cont").fadeIn("fast");

		$modal.fadeIn("fast");

	}

}

function closeModal () {

	$(".modal-bg").fadeOut("fast");
	$(".modal-cont").fadeOut("fast");
	$(".modal").fadeOut("fast");

}

$(document).on("ready", function () {

	if(userStats['status'] == "ERROR_EMAIL_OR_PASS") {
		$("#first-time-user").find(".form-line.form-error").show();
		showModal($("#first-time-user, #super-user-register"));
	}

	$("#user-cmd")
		.find(".user-menu.user-login").on("click", function (e) {

			e.preventDefault();
			showModal($("#first-time-user, #super-user-register"));
			
		});

	$("#user-cmd")
		.find(".user-menu.user-logged").on("click", function (e) {

			e.preventDefault();
			e.stopPropagation();

			$(".user-cmd-dropdown:visible").fadeOut();
			$(".user-cmd-dropdown.user-info").fadeIn();

		});

	$(".modal .action-close, .mensaje-modal .action-close").on("click", function (e) {

		e.preventDefault();
		closeModal();

	});

	// $(".access-menu:contains(Precios | Pedidos)").on("click", function (e) {

	// 	if (!userStats['user']) {

	// 		e.preventDefault();
	// 		e.stopPropagation();

	// 		// showModal($("#acceso-restringido"));
	// 		$(".user-cmd-dropdown:visible").fadeOut();
	// 		$(".user-cmd-dropdown.user-not-logged-message").fadeIn();

	// 	}
		
	// });


})
.on("click", function () {

	$(".user-cmd-dropdown").fadeOut();

});


