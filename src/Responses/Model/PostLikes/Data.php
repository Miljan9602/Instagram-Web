<?php

namespace InstagramWeb\Responses\Model\PostLikes;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Data
 * @package InstagramWeb\Responses\Model\PostLikes
 *
 * @method ShortcodeMedia getShortcodeMedia()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Data extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'shortcode_media' => 'ShortcodeMedia',
    ];
}