<?php
//print_r($_POST);


// cogemos variables del form.
$name = $_POST['nombre'];
$email = $_POST["Email"];
$comentario = $_POST['comentario'];

// email info 
$to = "semrah@gmail.com";
$subject = '"Formulario de Contacto de ' . $name . '"';
$headers = 'From: " ' . $email . '"' . "\r\n" .
		'Reply-To: ' . $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion() . "\r\n" .
		'Content-type: text/html; charset=UTF-8';


$body = '
<html>

	<head>
		<title>Formulario de contacto</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<table  width="100%" border="1" cellspacing="2" cellpadding="2">
			<tr bgcolor="#eeffee">
				<td>Nombre</td>
				<td>' . $name . ' </td>
			</tr>
			<tr bgcolor="#eeeeff">
				<td>Email</td>
				<td>' . $email . ' </td>
			</tr>
			<tr bgcolor="#eeeeff">
				<td>Contenido</td>
				<td>' . nl2br($comentario) . ' </td>
			</tr>
		</table>
	</body>
</html>
';
foreach ($_POST as $campo) {
	if ($campo == '') {
		$error = 'el campo' . $campo . 'no puede estar vacío';
		$status = FALSE;
	}
}
$success = mail($to, $subject, $body, $headers);

if ($success) {
	$status = TRUE;
	$message = 'Mensaje enviado.';
} else {
	//echo "blarg!";
	$status = FALSE;
	$message = 'Something went terribly wrong.';
}

$json = array(
	'status' => $status,
	'message' => $message,
);
echo json_encode($json);
// esto no debería de aparecer siquiera... 
//echo 'Page was submitted...';
//echo $message;
?>