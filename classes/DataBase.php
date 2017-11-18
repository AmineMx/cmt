<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 17/11/2017
 * Time: 15:07
 *
 **/

class DataBase {
	private $user;
	private $password;
	private $databaseName;
	private $dbRef;

	public function __construct( $user, $password, $dbName ) {
		$this->user         = $user;
		$this->password     = $password;
		$this->databaseName = $dbName;
	}

	public function connect() {
		$this->dbRef = mysqli_connect( 'localhost', $this->user, $this->password, $this->databaseName );
	}

	/**
	 * get data from db with sql query
	 *
	 * @param $sql
	 */
	public function getData( $sql ) {
		$query = mysqli_query( $this->dbRef, $sql );

		return mysqli_fetch_all( $query, MYSQLI_ASSOC );
	}

	/**
	 * @param $data
	 * @param $tabel
	 */
	public function setData( $data, $tabel ) {
		$sql    = "INSERT INTO `%s` (%s) VALUES (%s)";
		$fields = array_keys( $data );
		$values = array_values( $data );

		$s = sprintf( $sql, $tabel, implode( ',', $fields ), '\'' . implode( '\',\'', $values ) . '\'' );

		mysqli_query( $this->dbRef, $s );
	}

	public function query( $sql ) {
		return mysqli_query( $this->dbRef, $sql );
	}
}