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
 * A unique identifier created for database objects. If an object is inserted into the database without an _id field, 
 * an _id field will be added to it with a MongoId instance as its value. If the data has a naturally occuring unique 
 * field (say, a username or timestamp) it is fine to use this as the _id field instead, and it will not be 
 * replaced with a MongoId. 
 * 
 * Instances of the MongoId class fulfill the role that autoincrementing does in a relational database: to provide a 
 * unique key if the data does not natually have one. Autoincrementing does not work well with a sharded database, as 
 * it is impossible to find what the next number should be quickly. This class fulfills the constraints of quickly 
 * generating a value that is unique across shards. 
 * 
 * Each MongoId is 12 bytes (making its string form 24 hexidecimal characters). The first four bytes are a timestamp, 
 * the next three are a hash of the client machine's hostname, the next two are the two least significant bytes of the 
 * process id running the script, and the last three bytes are an incrementing value. 
 * 
 * MongoIds are serializable/unserializable.
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoId {
	
	/**
	 * Id
	 * @var string
	 */
	public $id = null;
	
	/**
	 * Creates a new id
	 * 
	 * @param string $id A string to use as the id. Must be 24 hexidecimal characters. 
	 *                   If an invalid string is passed to this constructor, the constructor 
	 *                   will ignore it and create a new id value. 
	 *                   
	 * @return void
	 */
	public function __construct($id) {
	}
	
	/**
	 * Gets the hostname being used for this machine's ids
	 * 
	 * @return string the hostname.
	 */
	public static function getHostname() {
		
	}
	/**
	 * Gets the incremented value to create this id
	 * 
	 * @return integer the incremented value used to create this MongoId. 
	 */
	public function getInc() {
		
	}
	/**
	 * Gets the process id used to create this
	 * 
	 * @return integer the PID used to create this MongoId. 
	 */
	public function getPID() {
		
	}
	/**
	 * Returns a hexidecimal representation of this id
	 * 
	 * @return string
	 */
	public function __toString() {
	}
	
	/**
	 * Gets the number of seconds since the epoch that this id was created
	 * 
	 * @return integer the number of seconds since the epoch that this id was created. 
	 *                 There are only four bytes of timestamp stored, so MongoDate is a 
	 *                 better choice for storing exact or wide-ranging times. 
	 */
	public function getTimestamp() {
	}
}