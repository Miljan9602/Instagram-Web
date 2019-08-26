<?php


namespace InstagramWeb\Responses\Model\PostInformation;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class ShortcodeMedia
 * @package InstagramWeb\Responses\Model\PostInformation
 *
 * @method Owner getOwner()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ShortcodeMedia extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'owner' => 'Owner',
    ];
}