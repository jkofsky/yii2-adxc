<?php

/*
  PODCAST FEED PARSER
  written by Jeff Kofsky
  11OCT2018
 */
namespace common\components;

// FEED PARSER FOR MUSIC
class PodcastFeedParser {

    function __construct() { }

    static public function parse($feed_url) {

        $out = false;

        if ($feed_url != "") {

            try {

                $doc = new \DOMDocument();
                $doc->load($feed_url);

                $feeds = array();
                $limit = 10;
                $counter = 0;

                foreach ($doc->getElementsByTagName('item') as $node) {
                    if ($counter <= $limit) {
                        $item = array(
                            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                            'host' => $node->getElementsByTagName('author')->item(0)->nodeValue,
                            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                            'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                            'airdate' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                            'fileName' => $node->getElementsByTagName('enclosure')->item(0)->getAttribute('url'),
                            'fileType' => $node->getElementsByTagName('enclosure')->item(0)->getAttribute('type')
                        );

                        @array_push($feeds, $item);
                    }
                    $counter++;
                }

                $out = $feeds;
            } catch (Exception $e) { }
        }

        return $out;
    }

}

?>