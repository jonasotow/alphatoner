$.fn.editable.defaults.mode = 'inline';
$.fn.editable.defaults.ajaxOptions = {type: "PUT"};

$(document).ready(function(){
	$(".set-guide-number").editable();

	$(".select-status").editable({
		source: [
			{value:"creado", text: "Creado"},
			{value:"enviado", text: "Enviado"},
			{value:"recibido", text: "Recibido"}
		]
	});

	$(".add-to-cart").on("submit", function(ev){
		ev.preventDefault();

		var $form = $(this);

		var $button = $form.find("[type='submit']");

		// Peticion AJAX

		$.ajax({
			url: $form.attr("action"),
			method: $form.attr("method"),
			data: $form.serialize(),
			dataType: "JSON",
			beforeSend: function(){
				$button.val("Cargando...");
			},
			success: function(data){
				$button.css("background-color","#00c853").val("Agregado");

				$(".circle-shopping-cart").attr('data-badge',data.products_count);

				setTimeout(function(){
					restartButton($button)
				},3000);
			},
			error: function(err){
				console.log(err);
				$button.css("background-color","#d50000").val("Ocurrio un error.");

				setTimeout(function(){
					restartButton($button)
				},3000);

			},
		});

		return false;
	});

	function restartButton($button){
		$button.val("Agegar al carrito").attr("style","");
	}

});