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
 * Instances of this class are used to interact with a database.
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoDB {
	/**
	 * Profiling is off. 
	 * @var integer
	 */
	const PROFILING_OFF = 0;
	/**
	 * Profiling is on for slow operations (>100 ms). 
	 * @var integer
	 */
	const PROFILING_SLOW = 1;
	/**
	 * Profiling is on for all operations. 
	 * @var integer
	 */
	const PROFILING_ON = 2;
	/**
	 * The number of servers to replicate a change to before returning success.
	 * @var integer
	 */
	public $w = 1;
	/**
	 * The number of milliseconds to wait for MongoDB::$w replications to take place
	 * @var integer
	 */
	public $wtimeout = 10000;
	
	/**
	 * Creates a new database
	 * 
	 * @param Mongo  $conn Database connection. 
	 * @param string $name Database name. 
	 * 
	 * @return void
	 */
	public function __construct($conn,$name) {
	}
	/**
	 * The name of this database
	 * 
	 * @return string
	 */
	public function __toString() {
	}
	/**
	 * Gets a collection
	 * 
	 * @param string $name The name of the collection. 
	 * 
	 * @return MongoCollection
	 */
	public function __get($name) {
	}
	/**
	 * Fetches toolkit for dealing with files stored in this database
	 * 
	 * @param string $prefix The prefix for the files and chunks collections. 
	 * 
	 * @return MongoGridFS
	 */
	public function getGridFS($prefix) {
	}
	/**
	 * Gets this databases profiling level
	 * 
	 * @return integer
	 */
	public function getProfilingLevel() {
	}
	/**
	 * Sets this databases profiling level
	 * 
	 * @param integer $level Profiling level. 
	 * 
	 * @return integer
	 */
	public function setProfilingLevel($level) {
	}
	/**
	 * Drops this database
	 * 
	 * @return array
	 */
	public function drop() {
	}
	/**
	 * Repairs and compacts this database
	 * 
	 * @param boolean $preserve_cloned_files If cloned files should be kept if the repair fails. 
	 * @param boolean $backup_original_files If original files should be backed up. 
	 * 
	 * @return array
	 */
	public function repair($preserve_cloned_files,$backup_original_files) {
	}
	/**
	 * Gets a collection
	 * 
	 * @param string $name The name of the collection. 
	 * 
	 * @return MongoCollection
	 */
	public function selectCollection($name) {
	}
	/**
	 * Creates a collection
	 * 
	 * @param string  $name   The name of the collection. 
	 * @param boolean $capped If the collection should be a fixed size. 
	 * @param integer $size   If the collection is fixed size, its size in bytes. 
	 * @param integer $max    If the collection is fixed size, the maximum number of elements to store in the collection. 
	 * 
	 * @return MongoCollection
	 */
	public function createCollection($name,$capped,$size,$max) {
	}
	/**
	 * Drops a collection
	 * 
	 * @param mixed $coll MongoCollection or name of collection to drop. 
	 * 
	 * @return array
	 * @deprecated Use MongoCollection::drop() instead. 
	 */
	public function dropCollection($coll) {
	}
	/**
	 * Get a list of collections in this database
	 * 
	 * @return array
	 */
	public function listCollections() {
	}
	/**
	 * Creates a database reference
	 * 
	 * @param string $collection The collection to which the database reference will point. 
	 * @param mixed  $a          Object or _id to which to create a reference. If an object or 
	 *                           associative array is given, this will create a reference using the _id field. 
	 *  
	 * @return array
	 */
	public function createDBRef($collection,$a) {
	}
	/**
	 * Fetches the document pointed to by a database reference
	 * 
	 * @param array $ref A database reference. 
	 * 
	 * @return array
	 */
	public function getDBRef($ref) {
	}
	/**
	 * Runs JavaScript code on the database server.
	 * 
	 * @param mixed $code MongoCode or string to execute. 
	 * @param array $args Arguments to be passed to code. 
	 * 
	 * @return array
	 */
	public function execute($code,$args) {
	}
	/**
	 * Execute a database command
	 * 
	 * @param array $data    The query to send. 
	 * @param array $options This parameter is an associative array.
	 * 
	 * @return array
	 */
	public function command($data, array $options = array()) {
	}
	/**
	 * Check if there was an error on the most recent db operation performed
	 * 
	 * @return array
	 */
	public function lastError() {
	}
	/**
	 * Checks for the last error thrown during a database operation
	 * 
	 * @return array
	 */
	public function prevError() {
	}
	/**
	 * Clears any flagged errors on the database
	 * 
	 * @return array
	 */
	public function resetError() {
	}
	/**
	 * Creates a database error
	 * 
	 * @return boolean
	 */
	public function forceError() {
	}
	/**
	 * Log in to this database
	 * 
	 * @param string $username The username. 
	 * @param string $password The password (in plaintext). 
	 * 
	 * @return array
	 */
	public function authenticate($username,$password) {
	}
}