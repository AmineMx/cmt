<?php
@session_start();//first we init the session
//1st step check if there is input
if ( isset( $_POST['firstname'] ) ) {
	/**
	 * we wrote in session
	 */
	$_SESSION['user_name'] = $_POST['firstname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="index.php">
    <label>
        Your name please:<input name="firstname">
    </label>
    <button type="submit">
        Let me in
    </button>
</form>
<?php
if ( isset( $_SESSION['user_name'] ) ) {
	echo '<h1>Your name is :' . $_SESSION['user_name'] . '</h1> ';
}
?>

</body>
</html>