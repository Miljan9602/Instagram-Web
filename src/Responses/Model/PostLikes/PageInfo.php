<?php

namespace InstagramWeb\Responses\Model\PostLikes;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class PageInfo
 * @package InstagramWeb\Responses\Model\PostLikes
 *
 * @method bool isHasNextPage()
 * @method string getEndCursor()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PageInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'has_next_page' => 'bool',
        'end_cursor' => 'string'
    ];
}