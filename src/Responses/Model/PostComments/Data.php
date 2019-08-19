<?php

namespace InstagramWeb\Responses\Model\PostComments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Data
 * @package InstagramWeb\Responses\Model\PostComments
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