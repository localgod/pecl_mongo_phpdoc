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
class MongoCursor {
	/**
	 * Create a new cursor
	 * @param resource $connection
	 * @param string $ns
	 * @param array $query
	 * @param array $fields
	 */
	public function __construct($connection,$ns,$query,$fields) {
	}
	/**
	 * Checks if there are any more elements in this cursor
	 * @return boolean
	 */
	public function hasNext() {
	}
	/**
	 * Return the next object to which this cursor points, and advance the cursor
	 * @return array
	 */
	public function getNext() {
	}
	/**
	 * Limits the number of results returned
	 * @param int $num
	 * @return MongoCursor
	 */
	public function limit($num) {
	}
	/**
	 * Skips a number of results
	 * @param int $num
	 * @return MongoCursor
	 */
	public function skip($num) {
	}
	/**
	 * Sets the fields for a query
	 * @param array $f
	 * @return MongoCursor
	 */
	public function fields($f) {
	}
	/**
	 * Sets whether this query can be done on a slave
	 * @param boolean $okay
	 * @return MongoCursor
	 */
	public function slaveOkay($okay) {
	}
	/**
	 * Sets whether this cursor will be left open after fetching the last results
	 * @param boolean $tail
	 * @return MongoCursor
	 */
	public function tailable($tail) {
	}
	/**
	 * Sets whether this cursor will timeout
	 * @param boolean $liveForever
	 * @return MongoCursor
	 */
	public function immortal($liveForever) {
	}
	/**
	 * Sets a client-side timeout for this query
	 * @param int $ms
	 * @return MongoCursor
	 */
	public function timeout($ms) {
	}
	/**
	 * Checks if there are documents that have not been sent yet from the database for this cursor
	 * @return boolean
	 */
	public function dead() {
	}
	/**
	 * Use snapshot mode for the query
	 * @return MongoCursor
	 */
	public function snapshot() {
	}
	/**
	 * Sorts the results by given fields
	 * @param array $fields
	 * @return MongoCursor
	 */
	public function sort($fields) {
	}
	/**
	 * Gives the database a hint about the query
	 * @param array $key_pattern
	 * @return MongoCursor
	 */
	public function hint($key_pattern) {
	}
	/**
	 * Adds a top-level key/value pair to a query
	 * @param string $key
	 * @param mixed $value
	 * @return MongoCursor
	 */
	public function addOption($key,$value) {
	}
	/**
	 * Execute the query.
	 * @return void
	 */
	protected function doQuery() {
	}
	/**
	 * Returns the current element
	 * @return array
	 */
	public function current() {
	}
	/**
	 * Returns the current results _id
	 * @return string
	 */
	public function key() {
	}
	/**
	 * Advances the cursor to the next result
	 * @return void
	 */
	public function next() {
	}
	/**
	 * Returns the cursor to the beginning of the result set
	 * @return void
	 */
	public function rewind() {
	}
	/**
	 * Checks if the cursor is reading a valid result.
	 * @return boolean
	 */
	public function valid() {
	}
	/**
	 * Clears the cursor
	 * @return void
	 */
	public function reset() {
	}
	/**
	 * Return an explanation of the query, often useful for optimization and debugging
	 * @return array
	 */
	public function explain() {
	}
	/**
	 * Counts the number of results for this query
	 * @param boolean $foundOnly
	 * @return int
	 */
	public function count($foundOnly) {
	}
	public function info() {
	}
}