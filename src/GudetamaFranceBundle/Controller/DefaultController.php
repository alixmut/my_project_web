<?php

namespace GudetamaFranceBundle\Controller;

use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {



        $dl = new YoutubeDl([
            'continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
            'audio-format' => 'mp3',
            'format' => 'bestvideo',
        ]);
// For more options go to https://github.com/rg3/youtube-dl#user-content-options

        $dl->setDownloadPath('C:\wamp\www\my_project_web');
// Enable debugging
        /*$dl->debug(function ($type, $buffer) {
            if (\Symfony\Component\Process\Process::ERR === $type) {
                echo 'ERR > ' . $buffer;
            } else {
                echo 'OUT > ' . $buffer;
            }
        });*/
        try {
            $video = $dl->download('https://www.youtube.com/watch?v=oDAw7vW7H0c');
            echo $video->getTitle(); // Will return Phonebloks
            // $video->getFile(); // \SplFileInfo instance of downloaded file
        } catch (NotFoundException $e) {
            // Video not found
        } catch (PrivateVideoException $e) {
            // Video is private
        } catch (CopyrightException $e) {
            // The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement
        } catch (\Exception $e) {
            // Failed to download
        }
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
