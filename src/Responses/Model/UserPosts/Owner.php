<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Owner
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method string getId()
 * @method string getUsername()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Owner extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'username' => 'string',
    ];
}