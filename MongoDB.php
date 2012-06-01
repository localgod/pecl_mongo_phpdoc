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
class MongoDB {
	/**
	 * Creates a new database
	 * @param Mongo $conn
	 * @param string $name
	 */
	public function __construct($conn,$name) {
	}
	/**
	 * The name of this database
	 * @return string
	 */
	public function __toString() {
	}
	/**
	 * Gets a collection
	 * @param string $name
	 * @return MongoCollection
	 */
	public function __get($name) {
	}
	/**
	 * Fetches toolkit for dealing with files stored in this database
	 * @param string $prefix
	 * @return MongoGridFS
	 */
	public function getGridFS($prefix) {
	}
	/**
	 * Gets this databases profiling level
	 * @return int
	 */
	public function getProfilingLevel() {
	}
	/**
	 * Sets this databases profiling level
	 * @param int $level
	 * @return int
	 */
	public function setProfilingLevel($level) {
	}
	/**
	 * Drops this database
	 * @return array
	 */
	public function drop() {
	}
	/**
	 * Repairs and compacts this database
	 * @param bool $preserve_cloned_files
	 * @param bool $backup_original_files
	 * @return array
	 */
	public function repair($preserve_cloned_files,$backup_original_files) {
	}
	/**
	 * Gets a collection
	 * @param string $name
	 * @return MongoCollection
	 */
	public function selectCollection($name) {
	}
	/**
	 * Creates a collection
	 * @param string $name
	 * @param bool $capped
	 * @param int $size
	 * @param int $max
	 * @return MongoCollection
	 */
	public function createCollection($name,$capped,$size,$max) {
	}
	/**
	 * Drops a collection [deprecated]
	 * @param mixed $coll
	 * @return array
	 */
	public function dropCollection($coll) {
	}
	/**
	 * Get a list of collections in this database
	 * @return array
	 */
	public function listCollections() {
	}
	/**
	 * Creates a database reference
	 * @param string $collection
	 * @param mixed $a
	 * @return array
	 */
	public function createDBRef($collection,$a) {
	}
	/**
	 * Fetches the document pointed to by a database reference
	 * @param array $ref
	 * @return array
	 */
	public function getDBRef($ref) {
	}
	/**
	 * Runs JavaScript code on the database server.
	 * @param mixed $code
	 * @param array $args
	 * @return array
	 */
	public function execute($code,$args) {
	}
	/**
	 * Execute a database command
	 * @param array $data
	 * @return array
	 */
	public function command($data) {
	}
	/**
	 * Check if there was an error on the most recent db operation performed
	 * @return array
	 */
	public function lastError() {
	}
	/**
	 * Checks for the last error thrown during a database operation
	 * @return array
	 */
	public function prevError() {
	}
	/**
	 * Clears any flagged errors on the database
	 * @return array
	 */
	public function resetError() {
	}
	/**
	 * Creates a database error
	 * @return bool
	 */
	public function forceError() {
	}
	/**
	 * Log in to this database
	 * @param string $username
	 * @param string $password
	 * @return array
	 */
	public function authenticate($username,$password) {
	}
}