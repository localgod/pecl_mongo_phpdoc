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
class MongoGridFS extends MongoCollection {
	/**
	 * Creates new file collections
	 * @param MongoDB $db
	 * @param string $prefix
	 */
	public function __construct($db,$prefix) {
	}
	/**
	 * Drops the files and chunks collections
	 * @return array
	 */
	public function drop() {
	}
	/**
	 * Queries for files
	 * @param array $query
	 * @param array $fields
	 * @return MongoGridFSCursor
	 */
	public function find($query,$fields) {
	}
	/**
	 * Stores a file in the database
	 * @param string $filename
	 * @param array $extra
	 * @param array $options
	 * @return mixed
	 */
	public function storeFile($filename,$extra,$options) {
	}
	/**
	 * Chunkifies and stores bytes in the database
	 * @param string $bytes
	 * @param array $extra
	 * @param array $options
	 * @return mixed
	 */
	public function storeBytes($bytes,$extra,$options) {
	}
	/**
	 * Returns a single file matching the criteria
	 * @param mixed $query
	 * @return MongoGridFSFile
	 */
	public function findOne($query) {
	}
	/**
	 * Removes files from the collections
	 * @param array $criteria
	 * @param array $options
	 * @return boolean
	 */
	public function remove($criteria,$options) {
	}
	/**
	 * Saves an uploaded file to the database
	 * @param string $name
	 * @param string $filename
	 * @return mixed
	 */
	public function storeUpload($name,$filename) {
	}
}