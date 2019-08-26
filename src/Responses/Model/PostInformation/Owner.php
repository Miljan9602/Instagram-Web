<?php


namespace InstagramWeb\Responses\Model\PostInformation;

use http\Message\Body;
use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Owner
 * @package InstagramWeb\Responses\Model\PostInformation
 *
 * @method string getId()
 * @method bool isIsVerified()
 * @method string isProfilePicUrl()
 * @method string getUsername()
 * @method string getFullName()
 * @method bool isIsPrivate()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Owner extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'is_verified' => 'bool',
        'profile_pic_url' => 'string',
        'username' => 'string',
        'full_name' => 'string',
        'is_private' => 'bool',
    ];
}