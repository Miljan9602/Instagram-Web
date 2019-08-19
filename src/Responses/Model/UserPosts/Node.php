<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Node
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method string getId()
 * @method string getShortcode()
 * @method string getDisplayUrl()
 * @method Owner getOwner()
 * @method string getThumbnailSrc()
 * @method int getTakenAtTimestamp()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Node extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'shortcode' => 'string',
        'display_url' => 'string',
        'owner' => 'Owner',
        'thumbnail_src' => 'string',
        'taken_at_timestamp' => 'int'
    ];
}