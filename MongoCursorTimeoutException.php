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
 * Caused by a query timing out. You can set the length of time to wait before this exception 
 * is thrown by calling MongoCursor::timeout() on the cursor or setting MongoCursor::$timeout. 
 * The static variable is useful for queries such as database commands and MongoCollection::findOne(), 
 * both of which implicitly use cursors. 
 *
 * @category Stub
 * @package  Mongo
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoCursorTimeoutException extends MongoCursorException {
}