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
class MongoCollection {
	/**
	 * Creates a new collection
	 * @param MongoDB $db
	 * @param string $name
	 */
	public function __construct($db,$name) {
	}
	/**
	 * String representation of this collection
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
	 * Returns this collections name
	 * @return string
	 */
	public function getName() {
	}
	/**
	 * Drops this collection
	 * @return array
	 */
	public function drop() {
	}
	/**
	 * Validates this collection
	 * @param bool $scan_data
	 * @return array
	 */
	public function validate($scan_data) {
	}
	/**
	 * Inserts an array into the collection
	 * @param array $a
	 * @param array $options
	 * @return mixed
	 */
	public function insert($a,$options) {
	}
	/**
	 * Inserts multiple documents into this collection
	 * @param array $a
	 * @param array $options
	 * @return mixed
	 */
	public function batchInsert($a,$options) {
	}
	/**
	 * Update records based on a given criteria
	 * @param array $criteria
	 * @param array $newobj
	 * @param array $options
	 * @return boolean
	 */
	public function update($criteria,$newobj,$options) {
	}
	/**
	 * Remove records from this collection
	 * @param array $criteria
	 * @param array $options
	 * @return mixed
	 */
	public function remove($criteria,$options) {
	}
	/**
	 * Querys this collection
	 * @param array $query
	 * @param array $fields
	 * @return MongoCursor
	 */
	public function find($query,$fields) {
	}
	/**
	 * Querys this collection, returning a single element
	 * @param array $query
	 * @param array $fields
	 * @return array
	 */
	public function findOne($query,$fields) {
	}
	/**
	 *
	 Creates an index on the given field(s), or does nothing if the index
	 already exists

	 * @param array $keys
	 * @param array $options
	 * @return boolean
	 */
	public function ensureIndex($keys,$options) {
	}
	/**
	 * Deletes an index from this collection
	 * @param string|array $keys
	 * @return array
	 */
	public function deleteIndex($keys) {
	}
	/**
	 * Delete all indices for this collection
	 * @return array
	 */
	public function deleteIndexes() {
	}
	/**
	 * Returns an array of index names for this collection
	 * @return array
	 */
	public function getIndexInfo() {
	}
	/**
	 * Counts the number of documents in this collection
	 * @param array $query
	 * @param int $limit
	 * @param int $skip
	 * @return int
	 */
	public function count($query,$limit,$skip) {
	}
	/**
	 * Saves an object to this collection
	 * @param array $a
	 * @param array $options
	 * @return mixed
	 */
	public function save($a,$options) {
	}
	/**
	 * Creates a database reference
	 * @param array $a
	 * @return array
	 */
	public function createDBRef($a) {
	}
	/**
	 * Fetches the document pointed to by a database reference
	 * @param array $ref
	 * @return array
	 */
	public function getDBRef($ref) {
	}
	static protected function toIndexString() {
	}
	/**
	 * Performs an operation similar to SQL's GROUP BY command
	 * @param mixed $keys
	 * @param array $initial
	 * @param MongoCode $reduce
	 * @param array $options
	 * @return array
	 */
	public function group($keys,$initial,$reduce,$options) {
	}
}