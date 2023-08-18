<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Envio de E-mail com ReCaptcha</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://www.google.com/recaptcha/api.js?render=6LcSbLgnAAAAAOWS83CxIWhDP0PHjY_XZU1F00dq"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<form action="email.php" method="POST">
					<div class="mb-3">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="mb-3">
						<label>De:</label>
						<input type="email" name="sender" class="form-control">
					</div>
					<div class="mb-3">
						<label>Para:</label>
						<input type="email" name="receiver" class="form-control">
					</div>
					<div class="mb-3">
						<label>Assunto</label>
						<input type="text" name="assunto" class="form-control">
					</div>
					<div class="mb-3">
						<label>Mensagem</label>
						<textarea rows="3" name="mensagem" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<button class="btn btn-success" type="submit">Enviar</button>
					</div>
				</form>
				
				<button class="g-recaptcha" 
				data-sitekey="reCAPTCHA_site_key" 
				data-callback='onSubmit' 
				data-action='submit'>Enviar ReCaptcha
				</button>
				
				<script>
					function onSubmit(token) {
					document.getElementById("demo-form").submit();
					}

					function onClick(e) {
					e.preventDefault();
					grecaptcha.ready(function() {
					grecaptcha.execute('6LcSbLgnAAAAAOWS83CxIWhDP0PHjY_XZU1F00dq', {action: 'submit'}).
					then(function(token) {
						console.log(token);
					});
					});
				}
				</script>

			</div>
		</div>	
	</div>
</body>
</html>