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
 * Utilities for storing and retrieving files from the database.
 *
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoGridFS extends MongoCollection
{

    /**
     * {missing}
     * 
     * @var MongoCollection
     */
    public $chunks = null;

    /**
     * {missing}
     * 
     * @var string
     */
    protected $filesName = null;

    /**
     * {missing}
     * 
     * @var string
     */
    protected $chunksName = null;

    /**
     * Creates new file collections
     *
     * Files as stored across two collections, the first containing
     * file meta information, the second containing chunks of the actual
     * file. By default, fs.files and fs.chunks are the collection names used.
     *
     * @param MongoDB $db
     *            Database.
     * @param string $prefix
     *            Optional collection name prefix.
     *            
     * @return void
     */
    public function __construct($db, $prefix)
    {}

    /**
     * Drops the files and chunks collections
     *
     * @return array
     */
    public function drop()
    {}

    /**
     * Queries for files
     *
     * @param array $query
     *            The query.
     * @param array $fields
     *            Fields to return.
     *            
     * @return MongoGridFSCursor
     */
    public function find($query, $fields)
    {}

    /**
     * Retrieve a file from the database
     *
     * @param mixed $id
     *            _id of the file to find.
     *            
     * @return MongoGridFSFile|null
     */
    public function get($id)
    {}

    /**
     * Stores a file in the database
     *
     * @param string $filename
     *            The name of the file.
     * @param array $extra
     *            Other metadata to add to the file saved.
     *            
     * @return mixed
     */
    public function put($filename, array $extra = array())
    {}

    /**
     * Stores a file in the database
     *
     * @param string $filename
     *            The name of the file.
     * @param array $extra
     *            Other metadata to add to the file saved.
     * @param array $options
     *            Options for the store. "safe". Check that this store succeeded.
     *            
     * @return mixed
     */
    public function storeFile($filename, $extra, $options)
    {}

    /**
     * Chunkifies and stores bytes in the database
     *
     * @param string $bytes
     *            A string of bytes to store.
     * @param array $extra
     *            Other metadata to add to the file saved.
     * @param array $options
     *            Options for the store. "safe". Check that this store succeeded.
     *            
     * @return mixed
     */
    public function storeBytes($bytes, $extra, $options)
    {}

    /**
     * Returns a single file matching the criteria
     *
     * @param mixed $query
     *            The filename or criteria for which to search.
     *            
     * @return MongoGridFSFile
     */
    public function findOne($query)
    {}

    /**
     * Removes files from the collections
     *
     * @param array $criteria
     *            The filename or criteria for which to search.
     * @param array $options
     *            Options for the remove. Valid options are: "safe". Check that the remove succeeded.
     *            
     * @return boolean
     */
    public function remove($criteria, $options)
    {}

    /**
     * Saves an uploaded file to the database
     *
     * @param string $name
     *            The name field of the uploaded file.
     * @param string $filename
     *            An array of extra fields for the uploaded file.
     *            
     * @return mixed
     */
    public function storeUpload($name, $filename)
    {}
}