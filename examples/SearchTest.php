<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');

$client = (new \InstagramWeb\Client())
    ->setProxy("http://127.0.0.1:8030")
    ->setVerifySsl(false)
    ->setRetry(429, 5)
    ->setRetry(503, 5)
    ->setRetry(500, 5)
    ->setRetry(502, 5)
    ->setRetry(500, 5)
    ->setRetry(400, 5);

try{
    $result = $client->search->search("newyork");
}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Exception ".$e->getMessage();
    die();
}

/*
$users = $result->getUsers();

foreach ($users as $searchUser) {

    $user = $searchUser->getUser();
    print_r([
       'byline' => $user->getByline(),
       'follower_count' => $user->getFollowerCount(),
       'full_name' => $user->getFullName(),
       'has_anonymous_profile_picture' => $user->isHasAnonymousProfilePicture(),
       'is_private' => $user->isIsPrivate(),
       'is_verified' => $user->isIsVerified(),
       'latest_reel_media' => $user->getLatestReelMedia(),
       'mutual_followers_count' => $user->getMutualFollowersCount(),
       'pk' => $user->getPk(),
       'profile_pic_url' => $user->getProfilePicUrl(),
       'unseen_count' => $user->getUnseenCount(),
       'username' => $user->getUsername()
    ]);
    echo 'Position: '.$searchUser->getPosition().PHP_EOL;
}

$places = $result->getPlaces();

foreach ($places as $searchPlace) {
    $place = $searchPlace->getPlace();
    $location = $place->getLocation();

    print_r([
        'slug' => $place->getSlug(),
        'subtitle' => $place->getSubtitle(),
        'title' => $place->getTitle(),
        'location' => [
            'address' => $location->getAddress(),
            'city' => $location->getCity(),
            'external_source' => $location->getExternalSource(),
            'facebook_places_id' => $location->getFacebookPlacesId(),
            'lat' => $location->getLat(),
            'lng' => $location->getLng(),
            'name' => $location->getName(),
            'pk' => $location->getPk(),
            'short_name' => $location->getShortName()
        ]
    ]);

    echo 'Position: '.$searchPlace->getPosition().PHP_EOL;
}

$hashtags = $result->getHashtags();

foreach ($hashtags as $searchHashtag) {

    $hashtag = $searchHashtag->getHashtag();

    print_r([
        'id' => $hashtag->getId(),
        'media_count' => $hashtag->getMediaCount(),
        'name' => $hashtag->getName(),
        'search_result_subtitle' => $hashtag->getSearchResultSubtitle()
    ]);

    echo 'Position: '.$searchHashtag->getPosition().PHP_EOL;
}

$client->search->searchUsers('miljan');
$client->search->searchHashtags('lover');
$client->search->searchPlaces('San Francisco');
$client->search->getUser('miljan_rakita');
$client->search->getPlace('San Francisco State University');
$client->search->getHashtag('sanfranciscofood');
*/