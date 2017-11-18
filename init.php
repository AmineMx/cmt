<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 17/11/2017
 * Time: 15:14
 *
 **/
require_once( 'classes/DataBase.php' );

require_once( 'classes/View.php' );
require_once( 'classes/Controller.php' );
require_once( 'classes/Model.php' );
$db = new DataBase( 'root', 'root', 'c' );
$db->connect();

$controller = new Controller();

/**
 *
 */
