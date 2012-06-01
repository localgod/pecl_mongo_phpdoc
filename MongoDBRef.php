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
class MongoDBRef {
	/**
	 * Creates a new database reference
	 * @param string $collection
	 * @param mixed $id
	 * @param string $database
	 * @return array
	 */
	static public function create($collection,$id,$database) {
	}
	/**
	 * Checks if an array is a database reference
	 * @param mixed $ref
	 * @return boolean
	 */
	static public function isRef($ref) {
	}
	/**
	 * Fetches the object pointed to by a reference
	 * @param MongoDB $db
	 * @param array $ref
	 * @return array
	 */
	static public function get($db,$ref) {
	}
}