<?php

namespace InstagramWeb\Responses\Model\PostComments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class ShortcodeMedia
 * @package InstagramWeb\Responses\Model\PostComments
 *
 * @method EdgeMediaToParentComment getEdgeMediaToParentComment()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ShortcodeMedia extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'edge_media_to_parent_comment' => 'EdgeMediaToParentComment',
    ];
}