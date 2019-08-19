<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class SearchUser
 * @method int getPosition()
 * @method User getUser();
 *
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchUser extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'position' => 'int',
        'user' => 'User'
    ];
}