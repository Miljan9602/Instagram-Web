<?php

namespace InstagramWeb\Requests;

use InstagramWeb\Exceptions\InstagramException;

/**
 * Interface BaseRequestInterface
 * @package InstagramWeb\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
interface BaseRequestInterface
{
    /**
     * @param RequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     * @throws InstagramException
     */
    public function sendRequest(RequestInterface $request);

    /**
     * @param $route
     * @return RequestInterface
     */
    public function request($route);
}