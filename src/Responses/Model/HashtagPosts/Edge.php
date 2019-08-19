<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Edge
 * @package InstagramWeb\Responses\Model\HashtagPosts
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