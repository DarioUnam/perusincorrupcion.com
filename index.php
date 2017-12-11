<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="media/jquery.min.js"></script>
		<title></title>
		<style>
			body
			{
				font-family: Arial;
				font-size: 9pt;
				color: #EFF8FF;
				background-color: #FFFFFF;
				margin-left: -2;
				margin-right: -2;
				margin-top: -2;
				margin-botton: -2;
				border-width: 0;
				padding-top: 0;
				padding-left: 0;
				padding-right: 0;
				border-style: none;
				width: 103%;
			}
		</style>


	</head>
	<body>

		<div id="respuesta">BIENVENIDO AL MODULO LALALAL</div>

		<script>

			var template = 0;

			function get_template(pantalla)
			{
				console.log('pantalla: ' + pantalla)
				$.ajax(
					{
						url: 'votacion.php',
						type: 'GET',
						data: 'pantalla='+pantalla,
						async: false,
						success: function(msg)
						{
							$('#respuesta').html(msg);
						}
					});
				return false;
			}


			$('body').keyup(function(e)
				{

					//var keyCode = document.all ? e.which : e.keyCode;
					var keyCode = document.layers ? e.which : document.all ? e.keyCode : document.getElementById ? e.keyCode : 0;
					console.log('-> '+keyCode);

					if(template == 4)
					{
						if(e.which == 81)
						{
							get_template(5)
							template = 5;
						}

						return true;
					}


					if(template == 5)
					{
						if(e.which == 81)
						{

							//confirmar
							get_template(6)
							template = 6;

						}

						if(e.which == 87)
						{
							//ver mas
							get_template(8)
							template = 8;
						}

						return true;
					}


					if(template == 8)
					{

						if(e.which == 81)
						{
							//confirmar

							get_template(6)
							template = 6;
						}

						if(e.which == 87)
						{
							//cancelar A
							get_template(5)
							template = 5;
						}

						e.stopImmediatePropagation();
						e.preventDefault();

						return true;
					}

					if(template == 6)
					{
						if(e.which == 81 || e.which == 87 || e.which == 69 || e.which == 82 || e.which == 84)
						{

							get_template(9)
							template = 9;

							setTimeout(function ()
								{
									template = 4;
									get_template(template);
								}, 2000);
						}

						if(e.which == 89)
						{

							get_template(10)
							template = 10;
							setTimeout(function ()
								{
									template = 4;
									get_template(template);
								}, 2000);
						return true;
						}

						return true;
					}







					e.stopImmediatePropagation();
					e.preventDefault();
				});
		</script>

		<script>

			template = 4;
			get_template(template);
		</script>
	</body>
</html>

<?php

?>