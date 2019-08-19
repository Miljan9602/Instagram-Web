<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Owner
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method string getId()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Owner extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
    ];
}