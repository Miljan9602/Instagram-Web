<?php

namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\SearchHashtag;
use InstagramWeb\Responses\Model\SearchPlace;
use InstagramWeb\Responses\Model\SearchUser;

/**
 * Class SearchResponse
 * @package InstagramWeb\Responses
 * @method string getStatus()
 * @method bool isHasMore()
 * @method bool isClearClientCache()
 * @method SearchUser[] getUsers()
 * @method SearchPlace[] getPlaces()
 * @method SearchHashtag[] getHashtags()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'rank_token' => 'string',
        'has_more' => 'bool',
        'clear_client_cache' => 'bool',
        'users' => 'Model\SearchUser[]',
        'places' => 'Model\SearchPlace[]',
        'hashtags' => 'Model\SearchHashtag[]'
    ];
}