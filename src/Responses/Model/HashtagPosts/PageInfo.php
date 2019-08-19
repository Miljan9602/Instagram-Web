<?php

namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class PageInfo
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method string getEndCursor()
 * @method bool isHasNextPage()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PageInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'end_cursor' => 'string',
        'has_next_page' => 'bool',
    ];
}