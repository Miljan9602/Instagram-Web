<?php

namespace InstagramWeb;

use InstagramWeb\Requests\PostsRequest;
use InstagramWeb\Requests\ProfileRequest;
use InstagramWeb\Requests\SearchRequest;

/**
 * Class Client
 *
 * All request will be sent by this client. This class will have all of the options we can set that will be
 * sent with every request from this client.
 *
 * @package InstagramWeb
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Client
{
    /**
     * All search request will be performed from this class.
     * @var SearchRequest
     */
    public $search;

    /**
     * All posts related requests will be performed from this class
     * @var PostsRequest
     */
    public $posts;

    /**
     * All requests that are related to the profile.
     * @var ProfileRequest
     */
    public $profile;

    /**
     * Sets proxy which will be send with every request with this client.
     * @var string
     */
    private $proxy;

    /**
     * This should be set to false when we send request with the proxy.
     * @var bool
     */
    private $verifySSL;

    /**
     * @var array
     */
    private $retry;

    /**
     * Client constructor. Creates new client instance and init default options.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Load deafult options which we need so this class would work.
     */
    private function init() {
        $this->search = new SearchRequest($this);
        $this->posts = new PostsRequest($this);
        $this->profile = new ProfileRequest($this);
        $this->verifySSL = true;
        $this->proxy = null;
        $this->retry = [];
    }

    /**
     * Sets proxy which will be binded to this client.
     * @param $proxy - proxy which will be used with every request with this client.
     * @return $this instance of this object.
     */
    public function setProxy($proxy) {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * Tell client if we should verify ssl when sending request. This should be set to false, when using proxy.
     * @param $state true or false.
     * @return $this instance of this object.
     */
    public function setVerifySsl($state = true){
        $this->verifySSL = $state;
        return $this;
    }

    /**
     * Return proxy which is binded to this client.
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * Return what is set in verifySsl.
     * @return bool
     */
    public function getVerifySSL()
    {
        return $this->verifySSL;
    }

    /**
     * @param $statusCode
     * @param $numberOfRetries
     * @return $this
     */
    public function setRetry($statusCode, $numberOfRetries) {
        $this->retry[$statusCode] = $numberOfRetries;
        return $this;
    }

    /**
     * @return array
     */
    public function getRetry()
    {
        return $this->retry;
    }
}