<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Node
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method string getId()
 * @method string getShortcode()
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
        'display_url' => 'string',
        'owner' => 'Owner'
    ];
}