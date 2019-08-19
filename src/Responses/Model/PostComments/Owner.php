<?php

namespace InstagramWeb\Responses\Model\PostComments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Owner
 * @package InstagramWeb\Responses\Model\PostComments
 *
 * @method string getId()
 * @method bool isIsVerified()
 * @method string isProfilePicUrl()
 * @method string getUsername()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Owner extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'is_verified' => 'bool',
        'profile_pic_url' => 'string',
        'username' => 'string'
    ];
}