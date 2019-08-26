<?php


namespace InstagramWeb\Requests;

use InstagramWeb\Responses\HashtagPostsResponse;
use InstagramWeb\Responses\LocationPostsResponse;
use InstagramWeb\Responses\PostCommentsResponse;
use InstagramWeb\Responses\PostInformationResponse;
use InstagramWeb\Responses\PostLikesResponse;
use InstagramWeb\Responses\UserPostsResponse;

/**
 * Class PostsRequest
 * @package InstagramWeb\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostsRequest extends BaseRequest
{
    /**
     * @param $hashtagName
     * @param null $after
     * @param string $queryHash
     * @return \InstagramWeb\Responses\HashtagPostsResponse
     */
    public function getPostsByHashtag($hashtagName, $after = null, $queryHash = "f12c9ec5e46a3173b2969c712ad84744") {

        $variables = [
            'tag_name' => $hashtagName,
            'first' => 5,
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new HashtagPostsResponse());
    }

    /**
     * @param $id
     * @param null $after
     * @param string $queryHash
     * @return \InstagramWeb\Responses\UserPostsResponse
     */
    public function getPostsByUser($id, $after = null, $queryHash = "f2405b236d85e8296cf30347c9f08c2a") {

        $variables = [
            'id' => $id,
            'first' => 12,
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new UserPostsResponse());

    }

    /**
     * @param $id
     * @param null $after
     * @param string $queryHash
     * @return \InstagramWeb\Responses\LocationPostsResponse
     */
    public function getPostsByLocation($id, $after = null, $queryHash = "1b84447a4d8b6d6d0426fefb34514485"){

        $variables = [
            'id' => $id,
            'first' => 12,
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new LocationPostsResponse());
    }

    /**
     * @param $shortcode
     * @param null $after
     * @param string $queryHash
     * @return \InstagramWeb\Responses\PostLikesResponse
     */
    public function getPostLikes($shortcode, $after = null, $queryHash = "d5d763b1e2acf209d62d22d184488e57") {

        $variables = [
            'shortcode' => $shortcode,
            'first' => 24,
            'include_reel' => true
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new PostLikesResponse());
    }

    /**
     * @param $shortcode
     * @param null $after
     * @param string $queryHash
     * @return \InstagramWeb\Responses\PostCommentsResponse
     */
    public function getPostComments($shortcode, $after = null, $queryHash = "97b41c52301f77ce508f55e66d17620e") {

        $variables = [
            'shortcode' => $shortcode,
            'first' => 13,
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new PostCommentsResponse());
    }

    /**
     * Returns basic information about post.
     *
     * @param string $shortcode from post. It is used to identify post.
     * @param string $queryHash
     * @return \InstagramWeb\Responses\PostInformationResponse
     */
    public function getPostInformation($shortcode, $queryHash = "477b65a610463740ccdb83135b2014db") {

        $variables = [
            'shortcode' => $shortcode,
            'child_comment_count' => 3,
            'fetch_comment_count' => 40,
            'parent_comment_count' => 24,
            'has_threaded_comments' => true
        ];

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new PostInformationResponse());
    }
}