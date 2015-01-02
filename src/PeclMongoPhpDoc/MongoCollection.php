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
 * Representations a database collection.
 *
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoCollection
{

    /**
     * {missing}
     * 
     * @var integer
     */
    const ASCENDING = 1;

    /**
     * {missing}
     * 
     * @var integer
     */
    const DESCENDING = - 1;

    /**
     * {missing}
     * 
     * @var MongoDB
     */
    public $db = null;

    /**
     * {missing}
     * 
     * @var integer
     */
    public $w;

    /**
     * {missing}
     * 
     * @var integer
     */
    public $wtimeout;

    /**
     * Creates a new collection
     *
     * @param MongoDB $db
     *            Parent database.
     * @param string $name
     *            Name for this collection.
     *            
     * @return void
     */
    public function __construct($db, $name)
    {}

    /**
     * String representation of this collection
     *
     * @return string
     */
    public function __toString()
    {}

    /**
     * Gets a collection
     *
     * @param string $name
     *            The next string in the collection name.
     *            
     * @return MongoCollection
     */
    public function __get($name)
    {}

    /**
     * Returns this collections name
     *
     * @return string
     */
    public function getName()
    {}

    /**
     * Drops this collection
     *
     * @return array
     */
    public function drop()
    {}

    /**
     * Validates this collection
     *
     * @param boolean $scan_data
     *            Only validate indices, not the base collection.
     *            
     * @return array
     */
    public function validate($scan_data)
    {}

    /**
     * Inserts an array into the collection
     *
     * @param array $a
     *            An array.
     * @param array $options
     *            Options for the insert.
     *            
     * @return mixed
     */
    public function insert($a, $options)
    {}

    /**
     * Inserts multiple documents into this collection
     *
     * @param array $a
     *            An array of arrays.
     * @param array $options
     *            Options for the inserts.
     *            
     * @return mixed If "safe" is set, returns an associative array with the status of the inserts ("ok")
     *         and any error that may have occured ("err"). Otherwise, returns TRUE if the batch insert
     *         was successfully sent, FALSE otherwise.
     */
    public function batchInsert($a, $options)
    {}

    /**
     * Update records based on a given criteria
     *
     * @param array $criteria
     *            Description of the objects to update.
     * @param array $newobj
     *            The object with which to update the matching records.
     * @param array $options
     *            Options for update.
     *            
     * @return boolean
     */
    public function update($criteria, $newobj, $options)
    {}

    /**
     * Remove records from this collection
     *
     * @param array $criteria
     *            Description of records to remove.
     * @param array $options
     *            Options for remove.
     *            
     * @return mixed
     */
    public function remove($criteria, $options)
    {}

    /**
     * Querys this collection
     *
     * @param array $query
     *            The fields for which to search
     * @param array $fields
     *            Fields of the results to return.
     *            The array is in the format array('fieldname' => true, 'fieldname2' => true).
     *            The _id field is always returned.
     *            
     * @return MongoCursor
     */
    public function find($query, $fields)
    {}

    /**
     * Querys this collection, returning a single element
     *
     * As opposed to MongoCollection::find(), this method will return only the first
     * result from the result set, and not a MongoCursor that can be iterated over.
     *
     * @param array $query
     *            The fields for which to search
     * @param array $fields
     *            Fields of the results to return.
     *            The array is in the format array('fieldname' => true, 'fieldname2' => true).
     *            The _id field is always returned.
     *            
     * @return array
     */
    public function findOne($query, $fields)
    {}

    /**
     * Creates an index on the given field(s), or does nothing if the index already exists
     *
     * @param array $keys
     *            An array of fields by which to sort the index on.
     *            Each element in the array has as key the field name,
     *            and as value either 1 for ascending sort, or -1 for descending sort.
     * @param array $options
     *            Options for the ensureIndex.
     *            
     * @return boolean
     */
    public function ensureIndex($keys, $options)
    {}

    /**
     * Deletes an index from this collection
     *
     * @param string|array $keys
     *            Field or fields from which to delete the index.
     *            
     * @return array
     */
    public function deleteIndex($keys)
    {}

    /**
     * Delete all indices for this collection
     *
     * @return array
     */
    public function deleteIndexes()
    {}

    /**
     * Returns an array of index names for this collection
     *
     * @return array
     */
    public function getIndexInfo()
    {}

    /**
     * Counts the number of documents in this collection
     *
     * @param array $query
     *            Associative array or object with fields to match.
     * @param integer $limit
     *            Specifies an upper limit to the number returned.
     * @param integer $skip
     *            Specifies a number of results to skip before starting the count.
     *            
     * @return integer
     */
    public function count($query, $limit, $skip)
    {}

    /**
     * Saves an object to this collection
     *
     * @param array $a
     *            Array to save.
     * @param array $options
     *            Options for the save.
     *            
     * @return mixed
     */
    public function save($a, $options)
    {}

    /**
     * Creates a database reference
     *
     * @param array $a
     *            Object to which to create a reference.
     *            
     * @return array
     */
    public function createDBRef($a)
    {}

    /**
     * Fetches the document pointed to by a database reference
     *
     * @param array $ref
     *            A database reference.
     *            
     * @return array
     */
    public function getDBRef($ref)
    {}

    /**
     * Converts keys specifying an index to its identifying string
     *
     * @param mixed $keys
     *            Field or fields to convert to the identifying string
     *            
     * @return string that describes the index.
     */
    static protected function toIndexString($keys)
    {}

    /**
     * Performs an operation similar to SQL's GROUP BY command
     *
     * @param mixed $keys
     *            Fields to group by. If an array or non-code object
     *            is passed, it will be the key used to group results.
     * @param array $initial
     *            Initial value of the aggregation counter object.
     * @param MongoCode $reduce
     *            A function that takes two arguments (the current
     *            document and the aggregation to this point) and does the aggregation.
     * @param array $options
     *            Optional parameters to the group command
     *            
     * @return array
     */
    public function group($keys, $initial, $reduce, $options)
    {}
}