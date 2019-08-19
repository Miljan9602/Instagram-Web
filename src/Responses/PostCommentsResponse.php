<?php

namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\PostComments\Data;

/**
 * Class PostCommentsResponse
 * @package InstagramWeb\Responses
 *
 * @method Data getData();
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostCommentsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\PostComments\Data',
    ];
}