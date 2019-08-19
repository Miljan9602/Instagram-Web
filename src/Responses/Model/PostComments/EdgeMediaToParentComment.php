<?php

namespace InstagramWeb\Responses\Model\PostComments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class EdgeMediaToParentComment
 * @package InstagramWeb\Responses\Model\PostComments
 *
 * @method int getCount()
 * @method PageInfo getPageInfo()
 * @method Edge[] getEdges()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class EdgeMediaToParentComment extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'count' => 'int',
        'page_info' => 'PageInfo',
        'edges' => 'Edge[]'
    ];
}