<?php


namespace InstagramWeb\Exceptions;

/**
 * Class ThrottleException
 *
 * This will be thrown when instagram return exception with status code 429.
 * This means we sent too many requests in a short period.
 *
 * @package InstagramWeb\Exceptions
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ThrottleException extends InstagramException
{

}