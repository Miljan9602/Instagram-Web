<?php

namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\PostLikes\Data;

/**
 * Class PostLikesResponse
 * @package InstagramWeb\Responses
 *
 * @method Data getData()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostLikesResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\PostLikes\Data',
    ];
}