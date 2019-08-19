<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeOwnerToTimelineMedia
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method int getCount()
 * @method PageInfo getPageInfo()
 * @method Edge[] getEdges()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeOwnerToTimelineMedia extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'count' => 'int',
        'page_info' => 'PageInfo',
        'edges' => 'Edge[]'
    ];
}