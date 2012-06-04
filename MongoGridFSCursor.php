<?php
/**
 * Pecl mongo stub
 *
 * PHP version 5
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 * @since    2012-06-01
 */
/**
 * Cursor for database file results. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoGridFSCursor extends MongoCursor {
	
	/**
	 * {missing}
	 * @var MongoGridFS
	 */
	protected $gridfs = null;
	
	/**
	 * Create a new cursor
	 * 
	 * @param MongoGridFS $gridfs     Related GridFS collection. 
	 * @param resource    $connection Database connection. 
	 * @param string      $ns         Full name of database and collection. 
	 * @param array       $query      Database query. 
	 * @param array       $fields     Fields to return. 
	 * 
	 * @return void
	 */
	public function __construct($gridfs,$connection,$ns,$query,$fields) {
	}
	/**
	 * Return the next file to which this cursor points, and advance the cursor
	 * 
	 * @return MongoGridFSFile
	 */
	public function getNext() {
	}
	/**
	 * Returns the current file
	 * 
	 * @return MongoGridFSFile
	 */
	public function current() {
	}
	/**
	 * Returns the current results filename
	 * 
	 * @return string
	 */
	public function key() {
	}
}