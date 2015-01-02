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
 * A cursor is used to iterate through the results of a database query.
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoCursor
{

    /**
     * If the query should have the "slaveOkay" flag set, which allows reads on the slave
     * (slaves are, by default, just for backup and unreadable).
     *
     * Can be overridden with MongoCursor::slaveOkay().
     * 
     * @var boolean
     */
    public static $slaveOkay = FALSE;

    /**
     * Set timeout in milliseconds for all database responses.
     * To wait forever, use -1.
     * Can be overridden with MongoCursor::timeout(). This does not cause the MongoDB
     * server to cancel the operation, it just causes the driver to stop waiting for a
     * response and throw a MongoCursorTimeoutException.
     * 
     * @var integer
     */
    public static $timeout = 20000;

    /**
     * Create a new cursor
     *
     * @param Mongo $connection
     *            Database connection.
     * @param string $ns
     *            Full name of database and collection.
     * @param array $query
     *            Database query.
     * @param array $fields
     *            Fields to return.
     *            
     * @return void
     */
    public function __construct($connection, $ns, $query, $fields)
    {}

    /**
     * Checks if there are any more elements in this cursor
     *
     * @return boolean
     */
    public function hasNext()
    {}

    /**
     * Return the next object to which this cursor points, and advance the cursor
     *
     * @return array
     */
    public function getNext()
    {}

    /**
     * Limits the number of results returned
     *
     * @param integer $num
     *            The number of results to return.
     *            
     * @return MongoCursor
     */
    public function limit($num)
    {}

    /**
     * Skips a number of results
     *
     * @param integer $num
     *            The number of results to skip.
     *            
     * @return MongoCursor
     */
    public function skip($num)
    {}

    /**
     * Sets the fields for a query
     *
     * @param array $f
     *            Fields to return (or not return).
     *            
     * @return MongoCursor
     */
    public function fields(array $f)
    {}

    /**
     * Sets whether this query can be done on a slave
     *
     * @param boolean $okay
     *            If it is okay to query the slave.
     *            
     * @return MongoCursor
     */
    public function slaveOkay($okay)
    {}

    /**
     * Sets whether this cursor will be left open after fetching the last results
     *
     * @param boolean $tail
     *            If the cursor should be tailable.
     *            
     * @return MongoCursor
     * @throws MongoCursorException if this cursor has started iterating.
     */
    public function tailable($tail)
    {}

    /**
     * Sets whether this cursor will timeout
     *
     * @param boolean $liveForever
     *            If the cursor should be immortal.
     *            
     * @return MongoCursor
     * @throws MongoCursorException if this cursor has started iterating.
     */
    public function immortal($liveForever)
    {}

    /**
     * Sets a client-side timeout for this query
     *
     * @param integer $ms
     *            The number of milliseconds for the cursor to wait for a response. By default, the cursor will wait forever.
     *            
     * @return MongoCursor
     */
    public function timeout($ms)
    {}

    /**
     * Checks if there are documents that have not been sent yet from the database for this cursor
     *
     * @return boolean
     */
    public function dead()
    {}

    /**
     * Use snapshot mode for the query
     *
     * @return MongoCursor
     */
    public function snapshot()
    {}

    /**
     * Sorts the results by given fields
     *
     * @param array $fields
     *            An array of fields by which to sort.
     *            
     * @return MongoCursor
     * @throws MongoCursorException if this cursor has started iterating.
     */
    public function sort($fields)
    {}

    /**
     * Gives the database a hint about the query
     *
     * @param array $key_pattern
     *            Indexes to use for the query.
     *            
     * @return MongoCursor
     * @throws MongoCursorException if this cursor has started iterating.
     */
    public function hint($key_pattern)
    {}

    /**
     * Adds a top-level key/value pair to a query
     *
     * @param string $key
     *            Fieldname to add.
     * @param mixed $value
     *            Value to add.
     *            
     * @return MongoCursor
     */
    public function addOption($key, $value)
    {}

    /**
     * Execute the query.
     *
     * @return void
     */
    protected function doQuery()
    {}

    /**
     * Returns the current element
     *
     * @return array
     */
    public function current()
    {}

    /**
     * Returns the current results _id
     *
     * @return string
     */
    public function key()
    {}

    /**
     * Advances the cursor to the next result
     *
     * @return void
     */
    public function next()
    {}

    /**
     * Returns the cursor to the beginning of the result set
     *
     * @return void
     */
    public function rewind()
    {}

    /**
     * Checks if the cursor is reading a valid result.
     *
     * @return boolean
     */
    public function valid()
    {}

    /**
     * Clears the cursor
     *
     * @return void
     */
    public function reset()
    {}

    /**
     * Return an explanation of the query, often useful for optimization and debugging
     *
     * @return array
     */
    public function explain()
    {}

    /**
     * Counts the number of results for this query
     *
     * This method does not affect the state of the cursor: if you haven't queried yet, you can still apply limits, skips, etc.
     * If you have started iterating through results, it will not move the current position of the cursor.
     * If you have exhasted the cursor, it will not reset it.
     *
     * @param boolean $foundOnly
     *            Send cursor limit and skip information to the count function, if applicable.
     *            
     * @return integer
     */
    public function count($foundOnly)
    {}

    /**
     * Gets the query, fields, limit, and skip for this cursor
     *
     * @return mixed the namespace, limit, skip, query, and fields for this cursor.
     */
    public function info()
    {}
}