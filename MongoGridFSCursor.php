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
 * {MISSING}
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoGridFSCursor extends MongoCursor {
	/**
	 * Create a new cursor
	 * @param MongoGridFS $gridfs
	 * @param resource $connection
	 * @param string $ns
	 * @param array $query
	 * @param array $fields
	 */
	public function __construct($gridfs,$connection,$ns,$query,$fields) {
	}
	/**
	 * Return the next file to which this cursor points, and advance the cursor
	 * @return MongoGridFSFile
	 */
	public function getNext() {
	}
	/**
	 * Returns the current file
	 * @return MongoGridFSFile
	 */
	public function current() {
	}
	/**
	 * Returns the current results filename
	 * @return string
	 */
	public function key() {
	}
}