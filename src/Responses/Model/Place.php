<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Place
 * @method string getSlug()
 * @method string getSubtitle()
 * @method string getTitle()
 * @method Location getLocation()
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Place extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'slug'  => 'string',
        'subtitle'  => 'string',
        'title'  => 'string',
        'location' => 'Location'
    ];
}