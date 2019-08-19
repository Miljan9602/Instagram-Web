<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Edge
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method Node getNode()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Edge extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'node' => 'Node',
    ];
}