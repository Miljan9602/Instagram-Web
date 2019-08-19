<?php

namespace InstagramWeb\Exceptions;

/**
 * Class InstagramException
 *
 * The core exception that ALL other library exceptions derive from.
 * If you catch this exception, you KNOW it came from our Instagram-API library.
 *
 * @package InstagramWeb\Exceptions
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class InstagramException extends \RuntimeException
{
    /**
     * The full response that triggered the exception, if available.
     *
     * @var string|null
     */
    private $response = null;

    /**
     * Check whether the exception has a full server response.
     *
     * @return bool TRUE if a full response is available, otherwise FALSE.
     */
    public function hasResponse()
    {
        return $this->response !== null ? true : false;
    }

    /**
     * Get the full server response.
     *
     * @return string|null The full response if one exists, otherwise NULL.
     *
     * @see InstagramException::hasResponse()
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param $rawResponse
     * @return $this
     */
    public function response($rawResponse) {
        $this->response = $rawResponse;
        return $this;
    }
}