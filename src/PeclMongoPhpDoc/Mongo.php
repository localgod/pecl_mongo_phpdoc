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
 * This class is used to create and manage connections.
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class Mongo
{

    /**
     * PHP driver version.
     * May be suffixed with "+" or "-" if it is in-between versions.
     *
     * @var string
     */
    const VERSION = '1.2.10';

    /**
     * Host to connect to if no host is given.
     *
     * @var string
     */
    const DEFAULT_HOST = "localhost";

    /**
     * Port to connect to if no port is given.
     *
     * @var integer
     */
    const DEFAULT_PORT = 27017;

    /**
     * {missing}
     *
     * @var boolean
     */
    public $connected = false;

    /**
     * If this is a persistent connection, if the connection was created for this object or is being reused.
     *
     * If this is not a persistent connection, this field should be NULL.
     *
     * @var mixed
     */
    public $status = null;

    /**
     * {missing}
     *
     * @var string
     */
    protected $server = null;

    /**
     * {missing}
     *
     * @var boolean
     */
    protected $persistent = null;

    /**
     * Updates status for all hosts associated with this
     *
     * @return array
     */
    public function getHosts()
    {}

    /**
     * Get pool size for connection pools
     *
     * @return integer
     * @deprecated Use MongoPool::getSize() instead.
     */
    public static function getPoolSize()
    {}

    /**
     * Get the address being used by this for slaveOkay reads
     *
     * @return mixed|null
     */
    public function getSlave()
    {}

    /**
     * Get slaveOkay setting for this connection
     *
     * @return mixed
     */
    public function getSlaveOkay()
    {}

    /**
     * Get information about all connection pools.
     *
     * @return array
     * @deprecated Use MongoPool::info() instead.
     */
    public function poolDebug()
    {}

    /**
     * Set the size for future connection pools.
     *
     * @param integer $size
     *            The max number of connections future pools will be able to create.
     *            Negative numbers mean that the pool will spawn an infinite number of connections.
     *            
     * @return integer
     * @deprecated Use MongoPool::setSize() instead.
     */
    public function setPoolSize($size)
    {}

    /**
     * Change slaveOkay setting for this connection
     *
     * @param boolean $ok
     *            If reads should be sent to secondary members of a replica set
     *            for all possible queries using this Mongo instance.
     *            
     * @return boolean the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = true)
    {}

    /**
     * Choose a new slave for slaveOkay reads
     *
     * This choses a random slave for a connection to read from. It is called automatically by the driver and should not need to be used.
     * It calls Mongo::getHosts() (to refresh the status of hosts) and Mongo::getSlave() (to get the return value).
     *
     * @return mixed
     * @throws MongoException (error code 15) if it is called on a non-replica-set connection.
     * @throws MongoExceptions (error code 16) if it cannot find anyone (primary or secondary) to read from.
     */
    public function switchSlave()
    {}

    /**
     * Creates a new database connection object
     *
     * @param string $server
     *            The server name.
     * @param array $options
     *            An array of options for the connection.
     *            
     * @return void
     */
    public function __construct($server = "mongodb://localhost:27017", array $options = array("connect" => true))
    {}

    /**
     * Connects to a database server
     *
     * @return boolean
     */
    public function connect()
    {}

    /**
     * Connects to paired database server
     *
     * @return boolean
     * @deprecated
     *
     */
    public function pairConnect()
    {}

    /**
     * Creates a persistent connection with a database server
     *
     * @param string $username
     *            Username
     * @param string $password
     *            Password
     *            
     * @return boolean
     * @deprecated
     *
     */
    public function persistConnect($username, $password)
    {}

    /**
     * Creates a persistent connection with paired database servers
     *
     * @param string $username
     *            Username
     * @param string $password
     *            Password
     *            
     * @return boolean
     * @deprecated
     *
     */
    public function pairPersistConnect($username, $password)
    {}

    /**
     * Connects with a database server
     *
     * @return boolean
     * @throws MongoConnectionException if it fails to connect to the databases.
     */
    protected function connectUtil()
    {}

    /**
     * String representation of this connection
     *
     * @return string
     */
    public function __toString()
    {}

    /**
     * Gets a database
     *
     * This is the cleanest way of getting a database.
     * If the database name has any special characters, Mongo::selectDB() will need to be used.
     * However, in most cases, this should be sufficient.
     *
     * @param string $dbname
     *            The database name.
     *            
     * @return MongoDB
     */
    public function __get($dbname)
    {}

    /**
     * Gets a database
     *
     * @param string $name
     *            The database name.
     *            
     * @return MongoDB
     * @throws InvalidArgumentException if the database name is invalid.
     */
    public function selectDB($name)
    {}

    /**
     * Gets a database collection
     *
     * @param string $db
     *            The database name.
     * @param string $collection
     *            The collection name.
     *            
     * @return MongoCollection
     * @throws InvalidArgumentException if the database or collection name is invalid.
     */
    public function selectCollection($db, $collection)
    {}

    /**
     * Drops a database
     *
     * @param mixed $db
     *            The database to drop. Can be a MongoDB object or the name of the database.
     *            
     * @return array
     * @deprecated Use MongoDB::drop() instead.
     */
    public function dropDB($db)
    {}

    /**
     * Check if there was an error on the most recent db operation performed
     *
     * @return array
     * @deprecated
     *
     */
    public function lastError()
    {}

    /**
     * Checks for the last error thrown during a database operation
     *
     * @return array
     * @deprecated
     *
     */
    public function prevError()
    {}

    /**
     * Clears any flagged errors on the connection
     *
     * @return array
     * @deprecated
     *
     */
    public function resetError()
    {}

    /**
     * Creates a database error on the database
     *
     * @return boolean
     * @deprecated
     *
     */
    public function forceError()
    {}

    /**
     * Lists all of the databases available.
     *
     * @return array
     */
    public function listDBs()
    {}

    /**
     * Closes this database connection
     *
     * The Mongo::close() method forcefully closes a connection to the database, even if persistent connections are being used.
     * You do under normal circumstance never have to do this.
     *
     * If you are connected to a replica set, close() will only close the connection to the primary.
     *
     * @return boolean
     */
    public function close()
    {}
}