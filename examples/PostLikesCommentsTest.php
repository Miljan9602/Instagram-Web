<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');

$client = (new \InstagramWeb\Client())
    ->setProxy("http://127.0.0.1:8030")
    ->setVerifySsl(false)
    ->setRetry(429, 5)
    ->setRetry(400, 5);



$shortcode = "B1I4fV9H0YS";

//Likes
$after = null;

try {

    do{
        $result = $client->posts->getPostLikes($shortcode, $after);
        $users = $result->getData()->getShortcodeMedia()->getEdgeLikedBy()->getEdges();
        $hasMore = $result->getData()->getShortcodeMedia()->getEdgeLikedBy()->getPageInfo()->isHasNextPage();
        $after = $result->getData()->getShortcodeMedia()->getEdgeLikedBy()->getPageInfo()->getEndCursor();

        foreach ($users as $user) {
            echo "Post shortcode: ".$user->getNode()->getId().PHP_EOL;
        }

    } while($hasMore);

}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Bad reqeust: ".$e->getMessage();
}

/*
try{

    $after = null;
    do {
        $result = $client->posts->getPostComments($shortcode, $after);

        $comments = $result->getData()->getShortcodeMedia()->getEdgeMediaToParentComment()->getEdges();
        $hasMore = $result->getData()->getShortcodeMedia()->getEdgeMediaToParentComment()->getPageInfo()->isHasNextPage();
        $after = $result->getData()->getShortcodeMedia()->getEdgeMediaToParentComment()->getPageInfo()->getEndCursor();

        foreach ($comments as $comment) {
            echo $comment->getNode()->getText().' - '.$comment->getNode()->getOwner()->getId().PHP_EOL;
        }

    }while($hasMore);

}catch (\InstagramWeb\Exceptions\InstagramException $e) {
    echo "Bad reqeust: ".$e->getMessage();
}
*/