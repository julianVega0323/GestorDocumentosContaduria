function soloLetras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";

	tecla_especial = false
	for (var i in especiales) {
		if (key == especiales[i]) {
			tecla_especial = true;
			break;
		}
	}

	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
		return false;
	}
}
function soloNumeros(e) {
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}

function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if ($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({ scrollTop: scroll_to }, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if (direction == 'right') {
		new_value = now_value + (100 / number_of_steps);
	}
	else if (direction == 'left') {
		new_value = now_value - (100 / number_of_steps);
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function () {

    /*
        Fullscreen background
    */
	$.backstretch("assets/img/backgrounds/bg_index.jpg");

	$('#top-navbar-1').on('shown.bs.collapse', function () {
		$.backstretch("resize");
	});
	$('#top-navbar-1').on('hidden.bs.collapse', function () {
		$.backstretch("resize");
	});

    /*
        Form
    */
	$('.f1 fieldset:first').fadeIn('slow');

	$('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea, input[type="email"], input[type="date"], input[type="number"]').on('focus', function () {
		$(this).removeClass('input-error');
	});

	// next step
	$('.f1 .btn-next').on('click', function () {
		var parent_fieldset = $(this).parents('fieldset');
		var next_step = true;
		// navigation steps / progress steps
		var current_active_step = $(this).parents('.f1').find('.f1-step.active');
		var progress_line = $(this).parents('.f1').find('.f1-progress-line');

		// fields validation

		parent_fieldset.find('input[type="text"], input[type="password"], input[type="email"], textarea,input[type="date"],select, input[type="number"]').each(function () {
			if ($(this).val() == "") {
				$(this).addClass('input-error');
				next_step = false;
			}
			else {
				$(this).removeClass('input-error');
			}
		});
		// fields validation

		if (next_step) {
			parent_fieldset.fadeOut(400, function () {
				// change icons
				current_active_step.removeClass('active').addClass('activated').next().addClass('active');
				// progress bar
				bar_progress(progress_line, 'right');
				// show next step
				$(this).next().fadeIn();
				// scroll window to beginning of the form
				scroll_to_class($('.f1'), 20);
			});
		}

	});

	// previous step
	$('.f1 .btn-previous').on('click', function () {
		// navigation steps / progress steps
		var current_active_step = $(this).parents('.f1').find('.f1-step.active');
		var progress_line = $(this).parents('.f1').find('.f1-progress-line');

		$(this).parents('fieldset').fadeOut(400, function () {
			// change icons
			current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
			// progress bar
			bar_progress(progress_line, 'left');
			// show previous step
			$(this).prev().fadeIn();
			// scroll window to beginning of the form
			scroll_to_class($('.f1'), 20);
		});
	});

	// submit
	$('.f1').on('submit', function (e) {
		// fields validation
		$(this).find('input[type="text"], input[type="password"], textarea, input[type="email"], input[type="date"], input[type="number"]').each(function () {
			if ($(this).val() == "") {
				e.preventDefault();
				$(this).addClass('input-error');
			}
			else {
				$(this).removeClass('input-error');
			}
		});
		// fields validation
	});
});

// Formulario 2 Validate

jQuery(document).ready(function () {

	$("#instruccion-convenio").removeClass("hidden");
	$("#instruccion-arl").addClass("hidden");

    /*
        Form
    */
	$('.f2 fieldset:first').fadeIn('slow');

	$('.f2 input[type="text"], .f2 input[type="password"], .f2 textarea,.f2 input[type="date"],.f2 input[type="email"], input[type="number"], input[type="date"]').on('focus', function () {
		$(this).removeClass('input-error');
	});

	// next step
	$('.f2 .btn-next').on('click', function () {
		var parent_fieldset = $(this).parents('fieldset');
		var next_step = true;
		// navigation steps / progress steps
		var current_active_step = $(this).parents('.f2').find('.f2-step.active');
		var progress_line = $(this).parents('.f2').find('.f2-progress-line');

		// fields validation
		parent_fieldset.find('input[type="text"], input[type="password"], textarea,input[type="date"], input[type="email"],select, input[type="number"]').each(function () {
			if ($(this).val() == "") {
				$(this).addClass('input-error');
				next_step = false;
			}
			else {
				$(this).removeClass('input-error');
			}
		});
		// fields validation

		if (next_step) {
			parent_fieldset.fadeOut(400, function () {
				// change icons
				current_active_step.removeClass('active').addClass('activated').next().addClass('active');
				// progress bar
				bar_progress(progress_line, 'right');
				// show next step
				$(this).next().fadeIn();
				// scroll window to beginning of the form
				scroll_to_class($('.f2'), 20);
			});
		}

	});

	// previous step
	$('.f2 .btn-previous').on('click', function () {
		// navigation steps / progress steps
		var current_active_step = $(this).parents('.f2').find('.f2-step.active');
		var progress_line = $(this).parents('.f2').find('.f2-progress-line');

		$(this).parents('fieldset').fadeOut(400, function () {
			// change icons
			current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
			// progress bar
			bar_progress(progress_line, 'left');
			// show previous step
			$(this).prev().fadeIn();
			// scroll window to beginning of the form
			scroll_to_class($('.f2'), 20);
		});
	});

	// submit
	$('.f2').on('submit', function (e) {

		// fields validation
		$(this).find('input[type="text"], input[type="password"], textarea, input[type="email"], input[type="date"], input[type="number"]').each(function () {
			if ($(this).val() == "") {
				e.preventDefault();
				$(this).addClass('input-error');
			}
			else {
				$(this).removeClass('input-error');
			}
		});
		// fields validation
	});
});


// CODIGO TRASH

$("#trabajoGrado").click(function () {
	$("#frameGrado").removeClass("hidden");
	$("#framePracticas").addClass("hidden");
	$(".opcional").val('null@null.com');
});

$("#practicas").click(function () {
	$("#framePracticas").removeClass("hidden");
	$("#frameGrado").addClass("hidden");
	$(".opcional").val('');
});

$("#trabajoGrado2").click(function () {
	$("#frameGrado2").removeClass("hidden");
	$("#framePracticas2").addClass("hidden");
	$(".opcional2").val('null@gmail.com');
});


$("#practicas2").click(function () {
	$("#framePracticas2").removeClass("hidden");
	$("#frameGrado2").addClass("hidden");
	$(".opcional2").val('');
});

$("#arl").click(function () {
	$("#instruccion-arl").removeClass("hidden");
	$("#instruccion-convenio").addClass("hidden");
});

$("#convenio").click(function () {
	$("#instruccion-convenio").removeClass("hidden");
	$("#instruccion-arl").addClass("hidden");
});

$("#btn-crearConvenio").click(function (event) {
	$("#form-convenio").removeClass("hidden");
	$("#form-arl").addClass("hidden");
	$("#instrucciones").addClass("hidden");
});

$("#btn-crearAfiliacion").click(function (event) {
	$("#form-arl").removeClass("hidden");
	$("#form-convenio").addClass("hidden");
	$("#instrucciones").addClass("hidden");
});
