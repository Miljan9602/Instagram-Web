<?php

namespace InstagramWeb\Responses\Model\PostComments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Node
 * @package InstagramWeb\Responses\Model\PostComments
 *
 * @method string getId()
 * @method string getText()
 * @method string getCreatedAt()
 * @method Owner getOwner()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Node extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'text' => 'string',
        'created_at' => 'string',
        'owner' => 'Owner'
    ];
}