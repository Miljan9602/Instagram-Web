<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeHashtagToTopPosts
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method Edge[] getEdges()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeHashtagToTopPosts extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'edges' => 'Edge[]'
    ];
}