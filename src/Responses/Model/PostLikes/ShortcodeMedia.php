<?php


namespace InstagramWeb\Responses\Model\PostLikes;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class ShortcodeMedia
 * @package InstagramWeb\Responses\Model\PostLikes
 *
 * @method string getId()
 * @method string getShortcode()
 * @method EdgeLikedBy getEdgeLikedBy()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ShortcodeMedia extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'shortcode' => 'string',
        'edge_liked_by' => 'EdgeLikedBy'
    ];
}