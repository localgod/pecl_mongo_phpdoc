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
class MongoDate {
	/**
	 * Number of seconds since January 1st, 1970. 
	 * @var integer
	 */
	public $sec;
	/**
	 * Microseconds. 
	 * @var integer
	 */
	public $usec;

	/**
	 * Creates a new date.
	 * 
	 * @param integer $sec  Number of seconds since January 1st, 1970. 
	 * @param integer $usec Microseconds.
	 * 
	 *  @return void
	 */
	public function __construct($sec,$usec) {
	}
	/**
	 * Returns a string representation of this date
	 * 
	 * @return string
	 */
	public function __toString() {
	}
}