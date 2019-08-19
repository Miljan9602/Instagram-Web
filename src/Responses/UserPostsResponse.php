<?php

namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\UserPosts\Data;

/**
 * Class UserPostsResponse
 * @package InstagramWeb\Responses
 *
 * @method Data getData()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class UserPostsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\UserPosts\Data',
    ];
}