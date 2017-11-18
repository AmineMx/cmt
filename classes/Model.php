<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 18/11/2017
 * Time: 11:36
 *
 **/

class Model {
	public function getComments() {
		global $db;

		return $db->getData( 'SELECT * FROM commets ORDER BY id DESC ' );

	}

	public function addNewComment( $newComment ) {
		global $db;

		return $db->setData( $newComment, 'commets' );
	}

	public function deleteComment( $id ) {
		global $db;
		$id  = (int) $id;
		$sql = "DELETE FROM commets WHERE id='$id'";

		return $db->query( $sql );
	}
}