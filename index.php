<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1st APPlication</title>
    <style>
        .container {
            margin: 0 auto;
            width: 400px;
        }

        .image-container img {
            width: 400px;
        }

        .comments {

        }

        .comments .user {
            text-decoration: underline;
        }

        .comments .comment {
            border-bottom: 1px solid darkblue;
        }

        form input {
            width: 100%;
        }

        form textarea {
            width: 100%;
        }

        .notification {
            color: green;
        }

        [name="user"] {
            background-color: darkblue;
            color: white;
        }
    </style>

</head>
<body>
<?php

require_once( 'init.php' );


?>
<div class="container">
    <h1>this is image</h1>
    <div class="image-container">
        <img src="assets/images/image.jpg">
    </div>
    <div class="comments">
		<?php
		$controller->display();
		?>

    </div>
    <form method="post" action="index.php">
        <label>User:<input name="user" id="user"></label><br>
        <label>text</label>
        <textarea name="text" rows="9" id="text"></textarea><br>
        <button type="submit" id="sendCmt">Write comment</button>
    </form>
</div>
<script src="assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
</body>
</html>