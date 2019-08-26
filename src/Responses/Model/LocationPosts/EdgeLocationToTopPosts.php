<?php

namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeLocationToTopPosts
 * @package InstagramWeb\Responses\Model\LocationPosts
 *
 * @method string getCount()
 * @method PageInfo getPageInfo()
 * @method Edge[] getEdges()
 *
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeLocationToTopPosts extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'count' => 'string',
        'page_info' => 'PageInfo',
        'edges' => 'Edge[]'
    ];
}