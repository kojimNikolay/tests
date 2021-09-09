<?php

class Controller_Login extends Controller
{

	function action_index()
	{

		// Этот пример иллюстрирует особый случай "HTTP/".
		// Лучшие альтернативы в типичных случаях использования включают:
		// 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
		//    (чтобы переопределить сообщения о состоянии http для клиентов, которые все еще используют HTTP/1.0)
		// 2. http_response_code(404); (для использования сообщения по умолчанию)


		if (isset($_POST['login']) && isset($_POST['password'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];

			if ($login == "admin" && $password == "123") {
				$data["login_status"] = "access_granted";
				echo "<p class='text-center'>Успешно авторизовано</p>";
			} else {
				$data["login_status"] = "access_denied";
			}

			$_SESSION['login_status'] = $data["login_status"];
			if ($data["login_status"] == "access_granted") {
				echo '<script>location.replace("/todo");</script>';
				exit;
			}
		}

		$this->view->generate('login_view.php', 'template_view.php');
	}

	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		echo '<script>location.replace("/todo");</script>';
		exit;
	}
}
