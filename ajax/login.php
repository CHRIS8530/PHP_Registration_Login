<?php 

	// Allow config
	define('__CONFIG__', true);

	// config required
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		$user_found = User::Find($email, true);

		if($user_found) {
			// User exists, try sign them in
			$user_id = (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User signed in
				$return['redirect'] = '/dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "Invalid user email/password combo";
			}

		} else {
			// User needs account
			$return['error'] = "You do not have an account. <a href='/register.php'>Create one now?</a>";
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Kill the script. Redirect user. Do something regardless.
		exit('Invalid URL');
	}
?>
