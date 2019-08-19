<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class PageInfo
 * @package InstagramWeb\Responses\Model\UserPosts
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
        'end_cursor' => 'string',
    ];
}