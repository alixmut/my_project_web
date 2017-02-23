<?php

namespace GudetamaFranceBundle\Controller;

use GudetamaFranceBundle\Entity\Categorie;
use GudetamaFranceBundle\Entity\UploadSubtitle;
use Symfony\Component\Process\Process;
use GudetamaFranceBundle\Entity\Video;
use GudetamaFranceBundle\Entity\VideoRepository;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoController extends Controller
{

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();


        //$video = new Video();
        $categorie = new Categorie();
        $subtitle = new UploadSubtitle();
        $idPlaylist = 'PLFNUyl__hoIg1iIxNsf28sPori9P6CZoT';
        $videoList = $this->getPlaylistYoutubeAction($idPlaylist);

        var_dump($videoList);

        foreach ($videoList as $v) {
            // $advert est une instance de Advert
            if(!$em
                ->getRepository('GudetamaFranceBundle:Video')
                ->findByFilenamedb($v['title']))
            {
                echo "test";
                $directoryName = md5(uniqid());
                $video = new Video();
                $categorie->setName("Ete");
                $categorie->setVideo($video);
                $em->persist($categorie);

                $video->setCategorie($categorie);
                $video->setUsername("toto");
                $video->setFilename($directoryName);
                $video->setFilenamedb($v['title']);
                $video->setIdVideo($v['id']);

                foreach($video->getSubtitles() as $s) {
                    if($s->getNote() > $subtitle->getNote())
                        $subtitle = $s;
                }
                echo $subtitle;
                $em->persist($video);


                $structure = 'C:/wamp/www/my_project_web/web/uploads/video/'.$directoryName;
               mkdir($structure, 0777, true);
              // echo $this->get('kernel')->getRootDir() . '/../exe/youtube-dl -o '. $this->get('kernel')->getRootDir() . '/../web/uploads/video/'.$directoryName.'/video.mp4 --format mp4 https://www.youtube.com/watch?v='.$v['id'];
                   //echo 'Echec lors de la création des répertoires...';
                exec($this->get('kernel')->getRootDir() . '\..\exe\youtube-dl -o '. $this->get('kernel')->getRootDir() . '\..\web\uploads\video\\'.$directoryName.'/video.mp4 --format mp4 https://www.youtube.com/watch?v='.$v['id']);
                exec($this->get('kernel')->getRootDir() . '\..\exe\ffmpeg\bin\ffmpeg -ss 4 -i ' .$this->get('kernel')->getRootDir() . '\..\web\uploads\video\\'.$directoryName.'/video.mp4 -s 480x300 -frames:v 1 '.$this->get('kernel')->getRootDir() . '\..\web\uploads\video\\'.$directoryName.'\poster.jpg');
                $em->flush();

            }
        }

        return $this->render('GudetamaFranceBundle:pages:video.html.twig');
    }

    public function getPlaylistYoutubeAction($id) {

        $client = new \Google_Client();
        $client->getHttpClient()->setDefaultOption('verify', false);
        $client->setApplicationName("YouTube Application");
        $client->setDeveloperKey('AIzaSyBF2e8K-B4si6sL6kmVarb-1mYXBazFVT4');
        $youtube = new \Google_Service_YouTube($client);

        $service = new \Google_Service_YouTube($client);


        $nextPageToken = '';

        $videos = array();
        $channels = array();
        $playlists = array();

        do {
            $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
                'playlistId' => $id,
                'maxResults' => 50,
                'pageToken' => $nextPageToken));

            foreach ($playlistItemsResponse['items'] as $playlistItem) {
                $videos[] = array('publishedAt' => $playlistItem['snippet']['publishedAt'],'title' => $playlistItem['snippet']['title'], 'id' => $playlistItem['snippet']['resourceId']['videoId']);
            }

            $nextPageToken = $playlistItemsResponse['nextPageToken'];
        } while ($nextPageToken <> '');

        return $videos;
    }
}
