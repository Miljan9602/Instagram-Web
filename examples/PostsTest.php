<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');

$client = (new \InstagramWeb\Client())
    ->setProxy("http://127.0.0.1:8030")
    ->setVerifySsl(false)
    ->setRetry(429, 5)
    ->setRetry(400, 5);


/* Hashtags.
try{

    $after = null;

    do{
        $result = $client->posts->getPostsByHashtag("newyork", $after);
        $hashtags = $result->getData()->getHashtag()->getEdgeHashtagToMedia();
        $hasMore = $hashtags->getPageInfo()->isHasNextPage(); // check if we have more.
        $after = $hashtags->getPageInfo()->getEndCursor(); // get next query.

        $topPosts = $result->getData()->getHashtag()->getEdgeHashtagToTopPosts()->getEdges();

        foreach ($topPosts as $topPost) {
            echo "Owner: ".$topPost->getNode()->getOwner()->getId().PHP_EOL;
        }

        $posts =  $hashtags->getEdges();

        foreach ($posts as $post) {
            echo "Owner: ".$post->getNode()->getOwner()->getId().PHP_EOL;
        }

    }while($hasMore);

}catch (\InstagramWeb\Exceptions\BadRequestException $e) {

    echo "Sending bad request: ".$e->getMessage();

}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Bad reqeust: ".$e->getMessage();
}
*/

/* Users


try {
    $after = null;
    do {
        $result = $client->posts->getPostsByUser("2128436070", $after);
        $posts = $result->getData()->getUser()->getEdgeOwnerToTimelineMedia();
        $hasMore = $posts->getPageInfo()->isHasNextPage(); // check if we have more
        $after = $posts->getPageInfo()->getEndCursor();

        $posts = $posts->getEdges();

        foreach ($posts as $post) {
            echo "Post shortcode: ".$post->getNode()->getShortcode().PHP_EOL;
        }

    }while($hasMore);
}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Bad reqeust: ".$e->getMessage();
}
*/

// Locations

$after = null;
try {

    do{
        $result = $client->posts->getPostsByLocation("20188833", $after);
        $posts = $result->getData()->getLocation()->getEdgeLocationToMedia();
        $hasMore = $posts->getPageInfo()->isHasNextPage();
        $after = $posts->getPageInfo()->getEndCursor();

        $topPosts = $result->getData()->getLocation()->getEdgeLocationToTopPosts()->getEdges();

        foreach ($topPosts as $topPost) {
            echo "Post shortcode: ".$topPost->getNode()->getShortcode().PHP_EOL;
        }

        $posts = $posts->getEdges();

        foreach ($posts as $post) {
            echo "Post shortcode: ".$post->getNode()->getShortcode().PHP_EOL;
        }

    } while($hasMore);

}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Bad reqeust: ".$e->getMessage();
}