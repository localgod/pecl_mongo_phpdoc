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
 * An object that can be used to store or retrieve binary data from the database. 
 * 
 * The maximum size of a single object that can be inserted into the database is 4Mb. 
 * For data that is larger than this (movies, music, Henry Kissinger's autobiography), 
 * use MongoGridFS. For data that is smaller than 4Mb, it's probably be easier to just 
 * embed it into the document using MongoBinData. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoBinData {
	
	/**
	 * Function
	 * @var integer
	 */
	const FUNC = 1;
	
	/**
	 * Array of bytes. 
	 * @var integer
	 */
	const BYTE_ARRAY = 2;
	
	/**
	 * Universally unique identifier. 
	 * @var integer
	 */
	const UUID = 3;
	
	/**
	 * MD5. 
	 * @var integer
	 */
	const MD5 = 5;
	
	/**
	 * User-defined type. 
	 * @var integer
	 */
	const CUSTOM = 128;
	
	/**
	 * {missing}
	 * @var string
	 */
	public $bin;
	
	/**
	 * {missing}
	 * @var integer
	 */
	public $type = 2;
	
	/**
	 * Creates a new binary data object.
	 * 
	 * There are five types of binary data currently recognized by the BSON spec: 
	 * function (0x01), byte array (0x02), UUID (0x03), MD5 (0x05), and user defined (0x80). 
	 * 
	 * The default type is byte array (0x02). There is no particular difference in how the driver 
	 * or server interpret different types, so by and large they are irrelevant for now. Any number 
	 * (between 0 and 255) could be used for type, if the user is willing to assume the risk that the 
	 * database might eventually do something with binary data based on type. 
	 * 
	 * @param string  $data Binary data. 
	 * @param integer $type Data type.
	 * 
	 * @return void
	 */
	public function __construct($data,$type) {
	}
	/**
	 * The string representation of this binary data object.
	 * 
	 * @return string "<Mongo Binary Data>". To access the contents of a MongoBinData, use the bin field. 
	 */
	public function __toString() {
		
	}
}