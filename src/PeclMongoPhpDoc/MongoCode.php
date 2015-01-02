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
 * Represents JavaScript code for the database.
 *
 *
 * MongoCode objects are composed of two parts: a string of code and an optional scope.
 * The string of code must be valid JavaScript. The scope is a associative array of variable name/value pairs.
 *
 * @category Stub
 * @package Mongo
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class MongoCode
{

    /**
     * Creates a new code object
     *
     * @param string $code
     *            A string of code.
     * @param array $scope
     *            The scope to use for the code.
     *            
     * @return void
     */
    public function __construct($code, $scope)
    {}

    /**
     * Returns this code as a string
     *
     * @return string This code, the scope is not returned.
     */
    public function __toString()
    {}
}