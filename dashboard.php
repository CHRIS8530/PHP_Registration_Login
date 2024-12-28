<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

	Page::ForceLogin();

  $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Project Name</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<h2>Dashboard</h2>
      <p>Welcome <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
      <p><a href="/logout.php">Logout</a></p>
      <!--<p>Potential system extension:</p>
      <ul>
        <li>Feeds(new + friends)</li>
        <li>Change(email + password)</li>
        <li>Edit or Delete Account</li>
        <li>invite Modal</li>
        <li>Adding Firstname &or Lastname</li>
        <li>Email Confirmation</li>
      </ul>-->
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
