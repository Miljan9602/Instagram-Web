<?php

namespace InstagramWeb\Responses\Model\LocationPosts;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Location
 * @package InstagramWeb\Responses\Model\LocationPosts
 *
 * @method string getId()
 * @method string getMethod()
 * @method bool isHasPublicPage()
 * @method float getLat()
 * @method float getLng()
 * @method string getSlug()
 * @method string getBlurb()
 * @method string getWebsite()
 * @method string getAddressJson()
 * @method string getProfilePicUrl()
 * @method EdgeLocationToMedia getEdgeLocationToMedia()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Location extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'has_public_page' => 'bool',
        'lat' => 'float',
        'lng' => 'float',
        'slug' => 'string',
        'blurb' => 'string',
        'website' => 'string',
        'address_json' => 'string',
        'profile_pic_url' => 'string',
        'edge_location_to_media' => 'EdgeLocationToMedia',
    ];
}