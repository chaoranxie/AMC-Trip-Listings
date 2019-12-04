<?php

$kGroupData = array(
    'boston' => array(
        'title' => 'AMC Boston',
        'showHikeRatingKey' => 1,
        'homePageUrl' => 'http://amcboston.org',
        'listingsUrl' => 'https://activities.outdoors.org/search/index.cfm/action/details/id/',
        'rssUrl' => 'https://hb.amcboston.org/listings/?c=boston&output=rss',
        'icsUrl' => 'https://hb.amcboston.org/listings/?c=boston&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/2',
        ),
    'bostonym' => array(
        'title' => 'AMC Boston Young Members',
        'showHikeRatingKey' => 0,
        'homePageUrl' => 'https://ym.amcboston.org/',
        'listingsUrl' => 'https://activities.outdoors.org/search/index.cfm/action/details/id/',
        'rssUrl' => 'https://hb.amcboston.org/listings/?c=bostonym&output=rss',
        'icsUrl' => 'https://hb.amcboston.org/listings/?c=bostonym&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/2/committee/48',
        ),
    'bostonhb' => array(
        'title' => 'AMC Boston H/B',
        'showHikeRatingKey' => 0,
        'showAllEventsByDate' => 0,
        'homePageUrl' => 'https://hb.amcboston.org/',
        'listingsUrl' => 'https://activities.outdoors.org/search/index.cfm/action/details/id/',
        'rssUrl' => 'https://hb.amcboston.org/listings/?c=bostonhb&output=rss',
        'icsUrl' => 'https://hb.amcboston.org/listings/?c=bostonhb&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/2/committee/60',
        ),
    'bostonfamily' => array(
        'title' => 'AMC Boston Family Outings',
        'showHikeRatingKey' => 0,
        'homePageUrl' => 'https://family.amcboston.org/',
        'listingsUrl' => 'https://activities.outdoors.org/search/index.cfm/action/details/id/',
        'rssUrl' => 'https://hb.amcboston.org/listings/?c=bostonfamily&output=rss',
        'icsUrl' => 'https://hb.amcboston.org/listings/?c=bostonfamily&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/2/committee/16',
        ),
        // Can't find the comm. code for the next one.
    'bostonintro' => array(
        'title' => 'AMC Boston Intro',
        'showHikeRatingKey' => 0,
        'homePageUrl' => 'http://amcboston.org/intro/',
        'listingsUrl' => 'http://ashearer.com/amc/listings/?c=bostonintro',
        'rssUrl' => 'http://ashearer.com/amc/listings/?c=bostonintro&output=rss',
        'icsUrl' => 'http://ashearer.com/amc/listings/?c=bostonintro&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/2/committee/55',
        ),        
    'worcester' => array(
        'title' => 'AMC Worcester',
        'showHikeRatingKey' => 0,
        'homePageUrl' => 'http://amcworcester.org/',
        'listingsUrl' => 'http://ashearer.com/amc/listings/?c=worcester',
        'rssUrl' => 'http://ashearer.com/amc/listings/?c=worcester&output=rss',
        'icsUrl' => 'http://ashearer.com/amc/listings/?c=worcester&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/12',
        ),
    'worcesterym' => array(
        'title' => 'AMC Worcester Young Members',
        'showHikeRatingKey' => 0,
        'homePageUrl' => 'http://amcworcester.org/ym/',
        'listingsUrl' => 'http://ashearer.com/amc/listings/?c=worcesterym',
        'rssUrl' => 'http://ashearer.com/amc/listings/?c=worcesterym&output=rss',
        'icsUrl' => 'http://ashearer.com/amc/listings/?c=worcesterym&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/12/committee/48',
        ),
    'narragansett' => array(
        'title' => 'AMC Narragansett',
        'showHikeRatingKey' => 1,
        'homePageUrl' => 'http://amcnarragansett.org/',
        'listingsUrl' => 'http://ashearer.com/amc/listings/?c=narragansett',
        'rssUrl' => 'http://ashearer.com/amc/listings/?c=narragansett&output=rss',
        'icsUrl' => 'http://ashearer.com/amc/listings/?c=narragansett&output=ics',
        'xmlUrl' => 'http://activities.outdoors.org/xml/index.cfm/chapter/7',
        ),


);

function getAMCGroupData($groupID) {
    global $kGroupData;
    if (!isset($kGroupData[$groupID])) {
        $groupID = 'boston';
    }
    return $kGroupData[$groupID];
}

function getAMCGroupTitleMap() {
    global $kGroupData;
    $result = array();
    foreach ($kGroupData as $groupID => $groupData) {
        $result[$groupID] = $groupData['title'];
    }
    return $result;
}

function getAMCGroupIDs() {
    global $kGroupData;
    return array_keys($kGroupData);
}


?>
