<?php


namespace InstagramWeb\Requests;


use InstagramWeb\Responses\UserFollowersResponse;
use InstagramWeb\Responses\UserFollowingsResponse;

class ProfileRequest extends BaseRequest
{
    /**
     * Pull out list of people who follow user.
     *
     * @param $pk - unique user id.
     * @param null $after
     * @param int $first
     * @param string $queryHash
     * @return \InstagramWeb\Responses\UserFollowersResponse
     */
    public function getFollowers($pk, $after = null, $first = 22, $queryHash = "c76146de99bb02f6415203be841dd25a") {

        $variables = [
            'id' => $pk,
            'include_reel' => true,
            'fetch_mutual' => false,
            'first' => $first
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new UserFollowersResponse());
    }

    /**
     * Pull out list of people that are followed by this user.
     *
     * @param $pk - unique user id
     * @param null $after
     * @param int $first
     * @param string $queryHash
     * @return \InstagramWeb\Responses\UserFollowingsResponse
     */
    public function getFollowings($pk, $after = null, $first = 22, $queryHash = "d04b0a864b4b54837c0d870b0e77e076") {

        $variables = [
            'id' => $pk,
            'include_reel' => true,
            'fetch_mutual' => false,
            'first' => $first
        ];

        if ($after) {
            $variables['after'] = $after;
        }

        return $this->request("/graphql/query/")
            ->addParam('query_hash', $queryHash)
            ->addParam('variables', json_encode($variables))
            ->getResponse(new UserFollowingsResponse());
    }

}