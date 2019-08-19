<?php

namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class User
 * @package InstagramWeb\Responses\Model
 *
 * @method string getByline()
 * @method int getFollowerCount()
 * @method string getFullName()
 * @method bool isHasAnonymousProfilePicture()
 * @method bool isIsPrivate()
 * @method bool isIsVerified()
 * @method int getLatestReelMedia()
 * @method int getMutualFollowersCount()
 * @method string getPk()
 * @method string getProfilePicUrl()
 * @method int getUnseenCount()
 * @method string getUsername()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class User extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'byline'  => 'string',
        'follower_count'  => 'int',
        'full_name'  => 'string',
        'has_anonymous_profile_picture' => 'bool',
        'is_private' => 'bool',
        'is_verified' => 'bool',
        'latest_reel_media' => 'int',
        'mutual_followers_count' => 'int',
        'pk' => 'string',
        'profile_pic_url' => 'string',
        'unseen_count' => 'int',
        'username' => 'string',
    ];
}