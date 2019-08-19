<?php

namespace InstagramWeb\Exceptions;

/**
 * Class EmptyResponseException
 *
 * If we got no response from instagram, this exception will be thrown.
 * This can happen if we lose connection.
 *
 * @package InstagramWeb\Exceptions
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EmptyResponseException extends InstagramException
{

}