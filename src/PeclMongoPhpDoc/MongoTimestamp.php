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
 * MongoTimestamp is used by sharding.
 * If you're not looking to write sharding tools, what you probably want is MongoDate.
 *
 * MongoTimestamp is 4 bytes of timestamp (seconds since the epoch) and 4 bytes of increment.
 *
 * This class is not for measuring time, creating a timestamp on a document or automatically adding or updating a timestamp on a document.
 * Unless you are writing something that interacts with the sharding internals, stop, go directly to MongoDate, do not pass go,
 * do not collect 200 dollars. This is not the class you are looking for.
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoTimestamp
{

    /**
     * Creates a new timestamp.
     *
     * Creates a new timestamp. If no parameters are given, the current time is used
     * and the increment is automatically provided.
     * The increment is set to 0 when the module is loaded and is incremented every time
     * this constructor is called (without the $inc parameter passed in).
     *
     * @param long $sec
     *            Number of seconds since January 1st, 1970.
     * @param long $inc
     *            Increment.
     *            
     * @return void
     */
    public function __construct($sec, $inc)
    {}

    /**
     * Returns a string representation of this timestamp
     *
     * @return string the "sec" field of this timestamp.
     */
    public function __toString()
    {}
}