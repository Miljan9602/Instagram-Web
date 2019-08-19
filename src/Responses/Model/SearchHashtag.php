<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class SearchHashtag
 *
 * @method int getPosition()
 * @method Hashtag getHashtag()
 *
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchHashtag extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'position' => 'int',
        'hashtag' => 'Hashtag'
    ];
}