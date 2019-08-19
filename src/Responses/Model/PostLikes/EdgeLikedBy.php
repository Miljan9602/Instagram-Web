<?php

namespace InstagramWeb\Responses\Model\PostLikes;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeLikedBy
 * @package InstagramWeb\Responses\Model\PostLikes
 *
 * @method int getCount()
 * @method PageInfo getPageInfo()
 * @method Edge[] getEdges()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeLikedBy extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'count' => 'int',
        'page_info' => 'PageInfo',
        'edges' => 'Edge[]'
    ];
}