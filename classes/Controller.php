<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 18/11/2017
 * Time: 11:36
 *
 **/

class Controller {
	public function __construct() {
		$this->checkIfThereIsNewComments();
	}

	public function checkIfThereIsNewComments() {
		global $db;
		if ( ! empty( $_POST['user'] ) && ! empty( $_POST['text'] ) ) {
			$newComment = [
				'user' => $_POST['user'],
				'text' => $_POST['text']
			];
			$model      = new Model();
			$model->addNewComment( $newComment );
			echo '<p class="notification">Comment added</p>';
		}
	}

	public function display() {
		$model     = new Model();
		$commments = $model->getComments();
		$view      = new View();
		$view->render( $commments );
	}
}