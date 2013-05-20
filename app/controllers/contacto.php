<?php
class Contacto extends Controller {

	private $_username  = 'gladOS@73dev.com';
	private $_password  = 'passw0rd';
	private $_from      = array('gladOS@73dev.com' => '73Dev Robot');
	protected $logfile    = '../sentMails.log';
	private $message;
	private $mailer;
	private $failures;


	public function __construct() {
		$this->loadPlugin('swiftmailer');
		if (!file_exists($this->logfile)) {
			if (!touch($this->logfile)) throw new \InvalidArgumentException('Log file ' . $this->logfile . ' cannot be created');
		}
		if (!is_writable($this->logfile)) throw new \InvalidArgumentException('Log file ' . $this->logfile . ' is not writeable');
		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
		->setUsername($this->_username)
		->setPassword($this->_password)
		;
		$this->mailer = Swift_Mailer::newInstance($transport);
	}

	function index()
	{
		// Maybe check if there is a session or something similar
		// to see what lenguage we last visited.

		$template = $this->loadView('contacto');
		$template->set('inverted', true);
		$template->render();
	}

	function send() {
		if (!isset($_POST['sent'])) {
			$this->redirect('contacto');
		}
		$this->name = $_POST['nombre'];
		$this->email = $_POST["email"];
		$this->comment = $_POST['comentario'];

		$this->message = Swift_Message::newInstance()
		->setSubject('Formulario de contacto')
		->setFrom(array('gladOS@73dev.com' => 'GladOS'))
		->setTo(array('semrah@gmail.com')) // diana@fornerarquitectos.es
		->addPart('<html>
			<head>
			<title>Formulario de contacto</title>
			<style type="text/css">
			</style>
			</head>
				<body>
					<table  width="100%" border="1" cellspacing="2" cellpadding="2">
						<tr bgcolor="#eeffee">
							<td>Nombre</td>
							<td>' . $this->name . ' </td>
						</tr>
						<tr bgcolor="#eeeeff">
							<td>Email</td>
							<td>' . $this->email . ' </td>
						</tr>
						<tr bgcolor="#eeffee">
							<td>Contenido</td>
							<td>' . nl2br($this->comment) . ' </td>
						</tr>
					</table>
				</body>
			</html>', 'text/html');

		
		if ( $this->name != "" && $this->email != "" && $this->comment != "") {
			try {
				$this->message->setReplyTo($this->email);
			} catch (Swift_RfcComplianceException $e) {
				$status = FALSE;
				$status_message = 'ERROR: Dirección de correo inválida.';
			}
			if(!isset($status) || $status != FALSE) {
				try {
					if ($this->mailer->send($this->message, $this->failures)) {
						$status = TRUE;
						$status_message = 'Mensaje enviado, nos pondremos en contacto con la mayor brevedad posible.';
						$this->log('Correo enviado satisfactoriamente desde ' . $this->email . ' a FornerArquitectos.');

					} else {
						$status = FALSE;
						$status_message = $this->failures;
					}

				} catch (Exception $e) {
					$status = FALSE;
					$status_message = 'ERROR:' . $e->getMessage();
				}
			}

		} else {
			$status = FALSE;
			$status_message = "ERROR: Los campos 'Nombre', 'Email', y 'Mensaje', son obligatorios";
		}

		if(isset($_POST['is_ajax'])) {
			$json = array(
			'response' => $status,
			'status_message' => $status_message
			);
			header('Content-type: application/json');
			return json_encode($json);
		} else {
			return $status_message;
		}
	}
	private function log($message) {
		$logline = '[' . date('Y-m-d h:m:i') . '] ' . $message . "\n";
		file_put_contents($this->logfile, $logline, FILE_APPEND);
	}
}

?>
