<?php

namespace InstagramWeb\Exceptions;

/**
 * Class NotFoundException
 *
 * Used for endpoint calls that fail with HTTP code "404 Not Found", but only
 * if no other more serious exception was found in the server response.
 *
 * @package InstagramWeb\Exceptions
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class NotFoundException extends InstagramException
{

}