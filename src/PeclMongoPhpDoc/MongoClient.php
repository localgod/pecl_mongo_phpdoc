<?php

/**
 * Pecl mongo stub
 *
 * PHP version 5
 *
 * @category Stub
 * @package  Mongo
 * @author   Roger Thomas <rogere84@gmail.com>
 * @since    2013-08-20
 */
/**
 * This class is used to create and manage connections.
 *
 * @category Stub
 * @package Mongo
 * @author Roger Thomas <rogere84@gmail.com>
 */
class MongoClient
{

    /**
     * PHP driver version.
     * May be suffixed with "dev", "+" or "-" if it is in-between versions.
     *
     * @var string
     */
    const VERSION = '1.3.0';

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
     * Read preference for the primary replica set member.
     *
     * @var string
     */
    const RP_PRIMARY = "primary";

    /**
     * Read preference for preferring the primary replica set member
     *
     * @var string
     */
    const RP_PRIMARY_PREFERRED = "primaryPreferred";

    /**
     * Read preference for a secondary replica set member.
     *
     * @var string
     */
    const RP_SECONDARY = "secondary";

    /**
     * Read preference for preferring the secondary replica set member
     *
     * @var string
     */
    const RP_SECONDARY_PREFERRED = "secondaryPreferred";

    /**
     * Read preference for the nearest replica set member.
     *
     * @var string
     */
    const RP_NEAREST = "nearest";

    /**
     * This property will be set to TRUE if we have a open connection the database based on the ReadPreference and
     * tagsets (for ReplicaSet connections), FALSE otherwise.
     * This property does not take authentication into
     * account.
     *
     * @var boolean
     */
    public $connected = false;

    /**
     * This property is no longer used and will be set to NULL In driver versions 1.1.x and earlier,
     * this may be set to a string value (e.g.
     * "recycled", "new") when persistent connections are used.
     *
     * @var mixed
     */
    public $status = null;

    /**
     * Closes this database connection
     *
     * The MongoClient::close() method forcefully closes a connection to the database, even if
     * persistent connections are being used. You should never have to do this under normal circumstances.
     *
     * If you are connected to a replica set, close() will only close the connection to the primary.
     *
     * @param boolean|string $connection
     *            (optional) If connection is not given, or FALSE then connection that would be
     *            selected for writes would be closed. In a single-node configuration,
     *            that is then the whole connection, but if you are connected to a
     *            replica set, close() will only close the connection to the primary
     *            server.
     *            If connection is TRUE then all connections as known by the connection
     *            manager will be closed. This can include connections that are not
     *            referenced in the connection string used to create the object that
     *            you are calling close on.
     *            If connection is a string argument, then it will only close the
     *            connection identified by this hash. Hashes are identifiers for a
     *            connection and can be obtained by calling MongoClient::getConnections().
     * @return boolean if the connection was successfully closed.
     */
    public function close($connection)
    {}

    /**
     * Connects to a database server
     *
     * @return boolean (if the connection was successful.)
     * @throws MongoConnectionException
     */
    public function connect()
    {}

    /**
     * Creates a new database connection object
     *
     * @param string $server
     *            The server name.
     * @param array $options
     *            An array of options for the connection.
     *            
     * @return Returns a new database connection object.
     * @throws MongoConnectionException
     */
    public function __construct($server = "mongodb://localhost:27017", array $options = array("connect" => true))
    {}

    /**
     * Drops a database
     *
     * @deprecated
     *
     * @param mixed $db
     *            The database to drop. Can be a MongoDB object or the name of the database.
     * @return string
     */
    public function dropDB($db)
    {}

    /**
     * Gets a database
     *
     * This is the cleanest way of getting a database. If the database name has any special characters,
     * MongoClient::selectDB() will need to be used; however, this should be sufficient for most cases.
     *
     * @param string $dbname
     *            The database name.
     *            
     * @return MongoDB
     */
    public function __get($dbname)
    {}

    /**
     * Return info about all open connections
     *
     * @return array of open connections.
     */
    public function getConnections()
    {}

    /**
     * Updates status for all associated hosts
     *
     * @return array
     */
    public function getHosts()
    {}

    /**
     * Get the read preference for this connection.
     * This function returns an array describing the read preference. The array contains the values type for
     * the string read preference mode (corresponding to the MongoClient constants), and tagsets containing a list
     * of all tag set criteria. If no tag sets were specified, tagsets will not be present in the array.
     *
     * @return array
     */
    public function getReadPreference()
    {}

    /**
     * Kills a specific cursor on the server.
     * In certain situations it might be needed to kill a cursor on the server. Usually cursors time out after
     * 10 minutes of inactivity, but it is possible to create an immortal cursor with MongoCursor::immortal() that
     * never times out. In order to be able to kill such an immortal cursor, you can call this method with the
     * information supplied by MongoCursor::info().
     * This method displays a warning if the supplied server_hash does not match up with an existing connection.
     * No attempt to kill a cursor is attempted in that case either.
     * Returns TRUE if the method attempted to kill a cursor, and FALSE if there was something wrong with the
     * arguments (such as a wrong server_hash). The return status does not reflect where the cursor was actually
     * killed as the server does not provide that information.
     *
     * @param string $serverHash
     *            The server hash that has the cursor. This can be obtained through MongoCursor::info().
     * @param int|\MongoInt64 $id
     *            The ID of the cursor to kill. You can either supply an int containing the 64 bit
     *            cursor ID, or an object of the MongoInt64 class. The latter is necessary on 32 bit
     *            platforms (and Windows).
     * @return boolean
     */
    public function killCursor($serverHash, $id)
    {}

    /**
     * Lists all of the databases available.
     *
     * @return array
     */
    public function listDBs()
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
     * @throws Exception if the database or collection name is invalid.
     */
    public function selectCollection($db, $collection)
    {}

    /**
     * Gets a database
     *
     * @param string $name
     *            The database name.
     *            
     * @return MongoDB
     * @throws Exception if the database name is invalid.
     */
    public function selectDB($name)
    {}

    /**
     * Gets a database collection
     * Emits E_WARNING if either parameter is invalid, or if one or more tag sets are provided with the MongoClient::RP_PRIMARY read preference mode.
     *
     * @param string $read_preference
     *            The read preference mode: MongoClient::RP_PRIMARY, MongoClient::RP_PRIMARY_PREFERRED,
     *            MongoClient::RP_SECONDARY, MongoClient::RP_SECONDARY_PREFERRED, or MongoClient::RP_NEAREST
     * @param string $tags
     *            (optional) An array of zero or more tag sets, where each tag set is itself an array of criteria
     *            used to match tags on replica set members.
     *            
     * @return boolean true on success, false otherwise
     * @throws Exception if the database or collection name is invalid.
     */
    public function setReadPreference($read_preference, $tags)
    {}

    /**
     * String representation of this connection
     * Returns hostname and port for this connection.
     *
     * @return string
     */
    public function __toString()
    {}
}
