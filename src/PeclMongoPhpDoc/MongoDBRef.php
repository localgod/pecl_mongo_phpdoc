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
 * This class can be used to create lightweight links between objects in different collections.
 *
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoDBRef
{

    /**
     * Creates a new database reference
     *
     * @param string $collection
     *            Collection name (without the database name).
     * @param mixed $id
     *            The _id field of the object to which to link.
     * @param string $database
     *            Database name.
     *            
     * @return array
     */
    static public function create($collection, $id, $database)
    {}

    /**
     * Checks if an array is a database reference
     *
     * @param mixed $ref
     *            Array or object to check.
     *            
     * @return boolean
     */
    static public function isRef($ref)
    {}

    /**
     * Fetches the object pointed to by a reference
     *
     * @param MongoDB $db
     *            Database to use.
     * @param array $ref
     *            Reference to fetch.
     *            
     * @return array
     */
    static public function get($db, $ref)
    {}
}