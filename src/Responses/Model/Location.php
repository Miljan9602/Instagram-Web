<?php


namespace InstagramWeb\Responses\Model;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Location
 * @method string getAddress()
 * @method string getCity()
 * @method string getExternalSource()
 * @method string getFacebookPlacesId()
 * @method float getLat()
 * @method float getLng()
 * @method string getName()
 * @method string getPk()
 * @method string getShortName()
 * @package InstagramWeb\Responses\Model
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Location extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'address'  => 'string',
        'city'  => 'string',
        'external_source'  => 'string',
        'facebook_places_id' => 'string',
        'lat' => 'float',
        'lng' => 'float',
        'name' => 'string',
        'pk' => 'string',
        'short_name' => 'string'
    ];
}