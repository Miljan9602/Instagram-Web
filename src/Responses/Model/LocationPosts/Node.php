<?php

namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Node
 * @package InstagramWeb\Responses\Model\LocationPosts
 *
 * @method string getId()
 * @method string getShortcode()
 * @method string getTakenAtTimestamp()
 * @method string getDisplayUrl()
 * @method Owner getOwner()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Node extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'shortcode' => 'string',
        'taken_at_timestamp' => 'string',
        'display_url' => 'string',
        'owner' => 'Owner'
    ];
}