<?php

namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Edge
 * @package InstagramWeb\Responses\Model\LocationPosts
 *
 * @method Node getNode()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Edge extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'node' => 'Node'
    ];
}