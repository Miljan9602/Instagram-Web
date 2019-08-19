<?php

namespace InstagramWeb\Requests;

use InstagramWeb\Exceptions\InstagramException;

/**
 * Class SearchRequest
 * @package InstagramWeb\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchRequest extends BaseRequest
{
    /**
     * Returns single user by username if exists. Username has to be exact match as user username.
     * @param $username string|null full username of the user.
     * @return \InstagramWeb\Responses\Model\User|null
     * @throws InstagramException
     */
    public function getUser($username)
    {
        $users = $this->searchUsers($username);

        foreach ($users as $searchUser) {

            $user = $searchUser->getUser();

            if (strcmp($username, $user->getUsername()) === 0) {
                return $user;
            }
        }

        return null;
    }

    /**
     * SearchRequest for a list of users.
     *
     * @param $query string|null part of the username or full username of the user.
     * @return \InstagramWeb\Responses\Model\SearchUser[]
     * @throws InstagramException
     */
    public function searchUsers($query)
    {

        $result = $this->search($query);

        return $result->getUsers();
    }

    /**
     * Returns search response by pattern or exact match. This search contains hastags,useres and places for this pattern.
     * @param $query string|null string for which user want to get search results.
     * @return \InstagramWeb\Responses\SearchResponse
     * @throws InstagramException
     */
    public function search($query)
    {

        $request = $this->request("/web/search/topsearch/")
            ->addParam('context', 'blended')
            ->addParam('query', $query);

        return $request->getResponse(new \InstagramWeb\Responses\SearchResponse());
    }

    /**
     * Returns single place object by placeName. Place name needs to be exact match as location name.
     * @param $placeName string|null Location name.
     * @return \InstagramWeb\Responses\Model\Place|null
     * @throws InstagramException
     */
    public function getPlace($placeName)
    {

        $places = $this->searchPlaces($placeName);

        foreach ($places as $searchPlace) {

            $place = $searchPlace->getPlace();

            if ($location = $place->getLocation()) {

                if (strcmp($location->getName(), $placeName) === 0) {
                    return $place;
                }

            }
        }

        return null;

    }

    /**
     * SearchRequest fopr a list of places.
     *
     * @param $query string|null part of the place name or full place name
     * @return \InstagramWeb\Responses\Model\SearchPlace[]
     * @throws InstagramException
     */
    public function searchPlaces($query)
    {
        $result = $this->search($query);

        return $result->getPlaces();
    }

    /**
     * Returns single hashtag object by hashtagName. Hashtag name needs to be exact match as hashtag name.
     * @param $hashtagName string|null Hashtag name.
     * @return \InstagramWeb\Responses\Model\Hashtag|null
     * @throws InstagramException
     */
    public function getHashtag($hashtagName)
    {

        $hashtags = $this->searchHashtags($hashtagName);

        foreach ($hashtags as $searchHashtag) {

            $hashtag = $searchHashtag->getHashtag();

            if (strcmp($hashtagName, $hashtag->getName()) === 0) {
                return $hashtag;
            }
        }
        return null;
    }

    /**
     * SearchRequest for a list of hashtags.
     *
     * @param $query string|null part of the hashtag or full hashtag name.
     * @return \InstagramWeb\Responses\Model\SearchHashtag[]
     * @throws InstagramException
     */
    public function searchHashtags($query)
    {
        $result = $this->search($query);

        return $result->getHashtags();
    }
}