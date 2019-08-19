<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeHashtagToMedia
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method int getCount()
 * @method PageInfo getPageInfo()
 * @method Edge[] getEdges()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeHashtagToMedia extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'count' => 'int',
        'page_info' => 'PageInfo',
        'edges' => 'Edge[]'
    ];
}