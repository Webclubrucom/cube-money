<?php if($_GET['step'] == 4 and $_GET['delete'] == 1) { 

$message = "
   <div id='deleteAdm' class='alert alert-info mb-0' role='alert'>
		Директория INSTALL успешно удалена!
	</div>
	<script>setTimeout(() => {  document.getElementById('deleteAdm').classList.add('hidden'); }, 3000); </script>
   ";

?>
	<script>
		var audio = new Audio(); 
		audio.src = 'sound/delete.mp3'; 
		audio.autoplay = true; 
	</script>
<?php } ?>

<?
ini_set("display_errors",0);
error_reporting(E_ALL);

if(isset($_GET['step']))$step = $_GET['step']; else $step = 1;

$phpversion = phpversion();

if(isset($_POST['nameSERVER']))$nameSERVER = $_POST['nameSERVER'];
if(!isset($_POST['nameSERVER']))$nameSERVER = 'localhost';
if(isset($_POST['nameCharset']))$nameCharset = $_POST['nameCharset'];
if(!isset($_POST['nameCharset']))$nameCharset = 'utf8';
if(isset($_POST['nameDB']))$nameDB = $_POST['nameDB'];
if(isset($_POST['nameUSER']))$nameUSER = $_POST['nameUSER'];
if(isset($_POST['passUSER']))$passUSER = $_POST['passUSER'];

if(isset($_POST['nameSERVER']) and isset($_POST['nameCharset']) and isset($_POST['nameDB']) and isset($_POST['nameUSER']) and isset($_POST['passUSER']))
{

	$dbh = mysqli_connect($nameSERVER, $nameUSER, $passUSER, $nameDB);

	if($dbh == true) {
	   
		   $message = "
		   <div id='successDB' class='alert alert-success mb-0' role='alert'>
				<strong>Отлично!</strong> Успешное подключение к базе данных! Таблицы созданы.
			</div>
			<script>setTimeout(() => {  document.getElementById('successDB').classList.add('hidden'); }, 3000); </script>
		   ";
		   
		   $connection = 1;
		   
		   $sound = 'success-db';
		   
	$dbNEW = "
	APP_NAME=Laravel
	APP_ENV=production
	APP_KEY=base64:cL4x+bY4l512cfXz5DQQCkvnfNS5+nwNWfyihR+COQs=
	APP_DEBUG=false
	APP_LOG_LEVEL=debug
	APP_URL=

	DB_CONNECTION=mysql
	DB_HOST=".$nameSERVER."
	DB_PORT=3306
	DB_DATABASE=".$nameDB."
	DB_USERNAME=".$nameUSER."
	DB_PASSWORD=".$passUSER."
	";
	
	$url_path = __DIR__ . "../../core/.env";

	if(!file_exists($url_path)) {
		
		file_put_contents($url_path, $dbNEW);

	}
	
		$filename = 'money.sql';
		
		mysqli_select_db($dbh,$nameDB);
		$templine = '';
		$lines = file($filename);
		foreach ($lines as $line){
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
				$templine .= $line;
			if (substr(trim($line), -1, 1) == ';'){
				mysqli_query($dbh,$templine);
				$templine = '';
			}
		}
		
	$dbNEW = "<?php
	
	\$host = '".$nameSERVER."';
	\$db = '".$nameDB."';
	\$user = '".$nameUSER."';
	\$pass = '".$passUSER."';
	\$charset = 'utf8';

	?>";
		
	$url_path = __DIR__ . "../config.php";
		
	if(!file_exists($url_path)) {
		
		file_put_contents($url_path, $dbNEW);

	}
	
		$filename = 'money.sql';
		
		mysqli_select_db($dbh,$nameDB);
		$templine = '';
		$lines = file($filename);
		foreach ($lines as $line){
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
				$templine .= $line;
			if (substr(trim($line), -1, 1) == ';'){
				mysqli_query($dbh,$templine);
				$templine = '';
			}
		}

	} else {
		$message = "
		   <div id='errorDB' class='alert alert-danger mb-0' role='alert'>
				<strong>Что-то пошло не по плану?</strong> Проверьте данные для подключения к базе данных!
			</div>
			<script>setTimeout(() => {  document.getElementById('errorDB').classList.add('hidden'); }, 3000); </script>
		   ";
		
		$sound = 'error-db';
	}
}

if(isset($_POST['seotitle']))$seotitle = $_POST['seotitle'];

if(isset($_POST['email']))$email = $_POST['email'];

if(isset($_POST['password']))$passwordAdmin = $_POST['password'];

if(isset($seotitle) and isset($email) and isset($passwordAdmin))
{
	define('DS', DIRECTORY_SEPARATOR);
	
	
	include_once __DIR__ . DS . "db.php";
	
	$company = htmlspecialchars($seotitle);
	
	$sth = $pdo->prepare("UPDATE `users` SET `email` = :email WHERE `userid` = :userid");
	$sth->execute(array('email' => $email, 'userid' => 1));
	
	$sth = $pdo->prepare("UPDATE `settings` SET `company` = :company WHERE `settingsid` = :settingsid");
	$sth->execute(array('company' => $company, 'settingsid' => 1));

	if(isset($_POST['password']))$passwordAdmin = $_POST['password'];
	
	$connection = 2;
	$sound = 'success-adm';
}


	if($_GET['step'] == 4){
		
		
		
		define('DS', DIRECTORY_SEPARATOR);
	
	
		include_once __DIR__ . DS . "db.php";
	
		$userid = 1;
		$sth = $pdo->prepare("SELECT `email` FROM `users` WHERE `userid` = '$userid' LIMIT 1");
		$sth->execute();
		$email = $sth->fetchAll(PDO::FETCH_ASSOC);

		$passwordAdmin = $_GET['password'];

		

	}
	
	if($_GET['delete'] == 1){

		
		
		$path_install_dir = __DIR__;

		function recursiveRemoveDir($dir) {

			$includes = glob($dir.'/*');

			foreach ($includes as $include) {

				if(is_dir($include)) {

					recursiveRemoveDir($include);
				}

				else {

					unlink($include);
				}
			}

			rmdir($dir);
		}
		
		recursiveRemoveDir($path_install_dir);
	}
	
?>