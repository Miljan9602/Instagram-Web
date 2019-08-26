<?php


namespace InstagramWeb\Responses;

use InstagramWeb\Responses\Model\PostInformation\Data;

/**
 * Class PostInformationResponse
 * @package InstagramWeb\Responses
 *
 * @method Data getData();
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostInformationResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Model\PostInformation\Data',
    ];
}