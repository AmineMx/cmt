<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 18/11/2017
 * Time: 10:00
 *
 **/
require_once( 'init.php' );
if ( ! empty( $_POST['user'] ) && ! empty( $_POST['text'] ) ) {
	$newComment = [
		'user' => $_POST['user'],
		'text' => $_POST['text']
	];
	$db->setData( $newComment, 'commets' );
	echo '<div class="comment">
                <span class="user">' . $newComment['user'] . '</span><br>
                <p>
					' . $newComment['text'] . ' 
                </p>
            </div>';
}
