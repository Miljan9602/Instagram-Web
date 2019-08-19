<?php


namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\HashtagPosts\Data;

/**
 * Class HashtagPostsResponse
 *
 * @method Data getData()
 *
 * @package InstagramWeb\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class HashtagPostsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\HashtagPosts\Data',
    ];

}