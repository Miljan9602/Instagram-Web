<?php

namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\LocationPosts\Data;

/**
 * Class LocationPostsResponse
 * @package InstagramWeb\Responses
 *
 * @method Data getData()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class LocationPostsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\LocationPosts\Data',
    ];
}