<?php

namespace InstagramWeb\Responses\Model\HashtagPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Data
 * @package InstagramWeb\Responses\Model\HashtagPosts
 *
 * @method Hashtag getHashtag()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Data extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'hashtag' => 'Hashtag'
    ];
}