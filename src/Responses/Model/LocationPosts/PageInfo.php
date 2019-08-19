<?php


namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class PageInfo
 * @package InstagramWeb\Responses\Model\LocationPosts
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