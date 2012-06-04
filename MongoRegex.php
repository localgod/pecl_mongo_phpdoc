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
 * This class can be used to create regular expressions. Typically, these expressions 
 * will be used to query the database and find matching strings. More unusually, 
 * they can be saved to the database and retrieved. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoRegex {
	/**
	 * Expresion
	 * @var string
	 */
	public $regex;
	
	/**
	 * Flags
	 * @var string
	 */
	public $flags;
	
	/**
	 * Creates a new regular expression
	 * 
	 * @param string $regex Regular expression string of the form /expr/flags.
	 * 
	 * @return void
	 */
	public function __construct($regex) {
	}
	/**
	 * A string representation of this regular expression
	 * 
	 * @return string regular expression in the form "/expr/flags". 
	 */
	public function __toString() {
	}
}