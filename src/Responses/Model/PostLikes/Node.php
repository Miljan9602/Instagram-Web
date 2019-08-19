<?php

namespace InstagramWeb\Responses\Model\PostLikes;

use http\Message\Body;
use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Node
 * @package InstagramWeb\Responses\Model\PostLikes
 *
 * @method string getId()
 * @method string getUsername()
 * @method string getFullName()
 * @method string getProfilePicUrl()
 * @method bool isIsPrivate()
 * @method bool isIsVerified()
 * @method bool isFollowedByViewer()
 * @method bool isRequestedByViewer()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Node extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'username' => 'string',
        'full_name' => 'string',
        'profile_pic_url' => 'string',
        'is_private' => 'bool',
        'is_verified' => 'bool',
        'followed_by_viewer' => 'bool',
        'requested_by_viewer' => 'bool',
    ];
}