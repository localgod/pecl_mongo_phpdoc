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
 * Caused by accessing a cursor incorrectly or a error receiving a reply. Note that this can be 
 * thrown by any database request that receives a reply, not just queries. Writes, commands, and 
 * any other operation that sends information to the database and waits for a response can throw a 
 * MongoCursorException. The only exception is new Mongo() (creating a new connection), which will 
 * only throw MongoConnectionExceptions. 
 * 
 * This returns a specific error message to help diagnose the problem and a numeric error code associated 
 * with the cause of the exception. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoCursorException extends MongoException {
}