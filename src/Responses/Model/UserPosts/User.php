<?php

namespace InstagramWeb\Responses\Model\UserPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class User
 * @package InstagramWeb\Responses\Model\UserPosts
 *
 * @method EdgeOwnerToTimelineMedia getEdgeOwnerToTimelineMedia()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class User extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'edge_owner_to_timeline_media' => 'EdgeOwnerToTimelineMedia'
    ];
}