<?php


namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Hashtag
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method string getId()
 * @method string getName()
 * @method bool isAllowFollowing()
 * @method bool isIsFollowing()
 * @method bool isIsTopMediaOnly()
 * @method string getProfilePicUrl()
 * @method EdgeHashtagToMedia getEdgeHashtagToMedia()
 *
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Hashtag extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'allow_following' => 'bool',
        'is_following' => 'bool',
        'is_top_media_only' => 'bool',
        'profile_pic_url' => 'string',
        'edge_hashtag_to_media' => 'EdgeHashtagToMedia',
    ];
}