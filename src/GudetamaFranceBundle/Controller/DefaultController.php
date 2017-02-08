<?php

namespace GudetamaFranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GudetamaFranceBundle:Default:index.html.twig');
    }

	public function getPlaylistYoutubeAction() {

    $client = new \Google_Client();
	$client->getHttpClient()->setDefaultOption('verify', false);
    $client->setApplicationName("YouTube Application");	
	$client->setDeveloperKey('AIzaSyBF2e8K-B4si6sL6kmVarb-1mYXBazFVT4');
	$youtube = new \Google_Service_YouTube($client);

    $service = new \Google_Service_YouTube($client);

	
	$nextPageToken = '';
	$htmlBody = '<ul>';

    $videos = array();
    $channels = array();
    $playlists = array();
	
	do {
		$playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
		'playlistId' => 'PLFNUyl__hoIg1iIxNsf28sPori9P6CZoT',
		'maxResults' => 50,
		'pageToken' => $nextPageToken));

		foreach ($playlistItemsResponse['items'] as $playlistItem) {
				$videos[] = array('title' => $playlistItem['snippet']['title'], 'id' => $playlistItem['snippet']['resourceId']['videoId']);
		}

		$nextPageToken = $playlistItemsResponse['nextPageToken'];
	} while ($nextPageToken <> '');


	var_dump($videos);
return $this->render('GudetamaFranceBundle:Default:index.html.twig');
   /* return array(
        'youtube_videos' => $videos,
        'youtube_channels' => $channels,
        'youtube_playlists' => $playlists
    );*/

	}
}
