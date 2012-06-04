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
 * A database file object. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoGridFSFile {
	
	/**
	 * 
	 * @var array
	 */
	public $file = null;
	/**
	 * 
	 * @var MongoGridFS
	 */
	protected $gridfs = null;
	
	/**
	 * Create a new GridFS file
	 * 
	 * @param MongoGridFS $gridfs The parent MongoGridFS instance. 
	 * @param array       $file   A file from the database. 
	 * 
	 * @return void 
	 */
	public function __construct($gridfs,$file) {
	}
	/**
	 * Get a resource that can be used to read the stored file
	 * 
	 * This method returns a stream resource that can be used with all file functions in PHP. 
	 * The contents of the file are pulled out of MongoDB on the fly, so that the whole file 
	 * does not have to be loaded into memory first. 
	 * 
	 * At most two GridFSFile chunks will be loaded in memory. 
	 * 
	 * @return stream
	 */
	public function getResource() {
		
	}
	/**
	 * Returns this files filename
	 * 
	 * @return string
	 */
	public function getFilename() {
	}
	/**
	 * Returns this files size
	 * 
	 * @return integer
	 */
	public function getSize() {
	}
	/**
	 * Writes this file to the filesystem
	 * 
	 * @param string $filename The location to which to write the file. If none is given, the stored filename will be used. 
	 * 
	 * @return integer the number of bytes written. 
	 */
	public function write($filename) {
	}
	/**
	 * Returns this files contents as a string of bytes
	 * 
	 * @return string
	 */
	public function getBytes() {
	}
}