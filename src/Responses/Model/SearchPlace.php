<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class SearchPlace
 *
 * @method int getPosition()
 * @method Place getPlace()
 *
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchPlace extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'position' => 'int',
        'place' => 'Place'
    ];
}