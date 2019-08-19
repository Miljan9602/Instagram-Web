<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Hashtag
 * @method string getId()
 * @method int getMediaCount()
 * @method string getName()
 * @method string getSearchResultSubtitle()
 *
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Hashtag extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'  => 'string',
        'media_count'  => 'int',
        'name'  => 'string',
        'search_result_subtitle'  => 'string',
    ];
}