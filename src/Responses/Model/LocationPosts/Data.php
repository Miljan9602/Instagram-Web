<?php

namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Data
 * @package InstagramWeb\Responses\Model\LocationPosts
 *
 * @method Location getLocation
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Data extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'location' => 'Location',
    ];
}