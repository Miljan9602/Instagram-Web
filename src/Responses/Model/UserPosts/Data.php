<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Data
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method User getUser()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Data extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'user' => 'User'
    ];
}