<?php



// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'class/pagination.php';

function checkAuth()
{
	$cheker = false;
	$status = $_SESSION['login_status'] ?? '';
	if ($status == 'access_granted')
		$cheker = true;

	return $cheker;
}

require_once 'core/route.php';

Route::start(); // запускаем маршрутизатор
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

</body>

</html>