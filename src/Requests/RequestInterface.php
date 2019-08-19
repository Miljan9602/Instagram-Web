<?php


namespace InstagramWeb\Requests;

use InstagramWeb\Exceptions\InstagramException;
use InstagramWeb\Responses\Response;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface RequestInterface
 * @package InstagramWeb\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
interface RequestInterface
{

    /**
     * Adds get parameter which will be sent as query parameter.
     * @param $key - of the get parameter
     * @param $value - of the get parameter.
     * @return $this return instance of the object.
     */
    public function addParam($key, $value);

    /**
     * Adds new header to the request.
     * @param $key - key name of the header
     * @param $value - value of the header
     * @return $this return instance of the object.
     */
    public function addHeader($key, $value);

    /**
     * @param Response $response An instance of a class object whose properties to fill with the response.
     * @return Response Perform the request and map its response data to the provided object.
     * @throws InstagramException
     */
    public function getResponse(Response $response);

    /**
     * Maps a server response onto a specific kind of result object.
     * The result is placed directly inside `$response`.
     *
     * @param Response $response An instance of a class object whose properties to fill with the response.
     * @param ResponseInterface $result HTTP response object.
     * @return Response
     * @throws InstagramException In case of invalid or failed API response.
     */
    public function mapServerResponse(Response $response, ResponseInterface $result);

    /**
     * If base url is different than https://www.instagram.com, we can set it here.
     * @param $baseUrl - new base url
     * @return $this return instance of the object.
     */
    public function setBaseUrl($baseUrl);

    /**
     * Return full route with base url but without query parameters.
     * @return string
     */
    public function getFullRoute();

    /**
     * Here we will store all of the get parameters which request have.
     * @var array
     */
    public function getPayload();

    /**
     * Here we will store all of the headers which will be sent with this request.
     * @var array
     */
    public function getHeaders();
}