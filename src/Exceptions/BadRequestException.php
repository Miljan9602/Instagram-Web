<?php

namespace InstagramWeb\Exceptions;

/**
 * Class BadRequestException
 *
 * This will be thrown when instagram return exception with status code 400.
 * If we created bad request or instagram could not understand it.
 *
 * @package InstagramWeb\Exceptions
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class BadRequestException extends InstagramException
{

}