<?php

namespace GudetamaFranceBundle\Controller;

use Symfony\Component\Process\Process;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
<<<<<<< HEAD
        $dl = new YoutubeDl([
            'continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
            'audio-format' => 'mp3',
            'format' => 'bestvideo',
        ]);
// For more options go to https://github.com/rg3/youtube-dl#user-content-options

        $dl->setDownloadPath('C:\wamp\www\my_project_web');
// Enable debugging
=======
        exec('C:\wamp\bin\php\youtube-dl -o C:/wamp/www/my_project_web/web/%(title)s.%(ext)s --format mp4 https://www.youtube.com/watch?v=D4hAVemuQXY');
       // while ($process->isRunning())
// Enable debugging_
>>>>>>> 3519d8157d9a3558f24170eb49f6e4931bc759fe
        /*$dl->debug(function ($type, $buffer) {
            if (\Symfony\Component\Process\Process::ERR === $type) {
                echo 'ERR > ' . $buffer;
            } else {
                echo 'OUT > ' . $buffer;
            }
        });*/


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
