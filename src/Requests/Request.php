<?php

namespace InstagramWeb\Requests;

use InstagramWeb\Exceptions\InstagramException;
use InstagramWeb\Responses\Response;
use LazyJsonMapper\Exception\LazyJsonMapperException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Request this class will contain all of the information which request needs to have.
 *
 * When we want to send request, we need to pass instance of this object.
 *
 * Request contains various options such as adding proxy, headers, changing baseUrl etc...
 *
 * @package InstagramWeb\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Request implements RequestInterface
{
    /**
     * Request which we need to send. Every custom request will extend BaseRequest class and implement its type of request.
     * @var BaseRequestInterface
     */
    private $request;

    /**
     * URL route where we need to send request, this should not contain information about host or base url, only route.
     * @var string
     */
    private $route;

    /**
     * Here we will store all of the get parameters which request have.
     * @var array
     */
    private $payload = [];

    /**
     * Here we will store all of the headers which will be sent with this request.
     * @var array
     */
    private $headers = [];

    /**
     * This will be base url where we need to send request, for instance "https://www.instagram.com" which is default base url.
     * @var string
     */
    private $baseUrl;

    /**
     *
     * Request constructor.
     * @param BaseRequestInterface $request type of request we need to send.
     * @param $route - url route where we send this request to.
     */
    public function __construct(BaseRequestInterface $request, $route)
    {
        $this->request = $request;
        $this->route = $route;
        $this->baseUrl = "https://www.instagram.com";
    }

    public function addParam($key, $value) {
        $this->payload[$key] = $value;
        return $this;
    }

    public function addHeader($key, $value) {
        $this->headers[$key] = $value;
        return $this;
    }

    public function getResponse(Response $response) {

        // get http response.
        $result = $this->request->sendRequest($this);

        // Convert http response to the response object.
        return $this->mapServerResponse($response, $result);
    }

    public function mapServerResponse(Response $response, ResponseInterface $result) {

        $rawResponse = $result->getBody()->getContents();

        // try to convert to json.
        $jsonArray = $this->api_body_decode($rawResponse, true);

        // If the server response is not an array, it means that JSON decoding
        // failed or some other bad thing happened. So analyze the HTTP status
        // code (if available) to see what really happened.
        if (!is_array($jsonArray)) {
            throw (new InstagramException('Could not parse response.'))->response($rawResponse);
        }

        // Perform mapping of all response properties.
        try {

            // Assign the new object data. Only throws if custom _init() fails.
            // NOTE: False = assign data without automatic analysis.
            $response->assignObjectData($jsonArray, false); // Throws.
            $response->httpResponse($result);

        }catch (LazyJsonMapperException $e) {

            throw (new InstagramException($e->getMessage()))
                ->response($rawResponse);
        }

        return $response;
    }

    /**
     * Decode a JSON reply from Instagram's API.
     *
     * WARNING: EXTREMELY IMPORTANT! NEVER, *EVER* USE THE BASIC "json_decode"
     * ON API REPLIES! ALWAYS USE THIS METHOD INSTEAD, TO ENSURE PROPER DECODING
     * OF BIG NUMBERS! OTHERWISE YOU'LL TRUNCATE VARIOUS INSTAGRAM API FIELDS!
     *
     * @param string $json  The body (JSON string) of the API response.
     * @param bool   $assoc When FALSE, decode to object instead of associative array.
     *
     * @return object|array|null Object if assoc false, Array if assoc true,
     *                           or NULL if unable to decode JSON.
     */
    private function api_body_decode(
        $json,
        $assoc = true)
    {
        return @json_decode($json, $assoc, 512, JSON_BIGINT_AS_STRING);
    }

    public function setBaseUrl($baseUrl){
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getFullRoute(){
        return $this->baseUrl .''. $this->route;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}