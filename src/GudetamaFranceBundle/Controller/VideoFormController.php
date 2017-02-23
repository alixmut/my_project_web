<?php

namespace GudetamaFranceBundle\Controller;

use GudetamaFranceBundle\Entity\Categorie;
use GudetamaFranceBundle\Entity\UploadSubtitle;
use Symfony\Component\Process\Process;
use GudetamaFranceBundle\Entity\Video;
use GudetamaFranceBundle\Entity\VideoRepository;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoFormController extends Controller
{

    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $subtitle = new UploadSubtitle();
            if(!($video = $em
                ->getRepository('GudetamaFranceBundle:Video')
                ->find($id)))
            {
                return $this->render('GudetamaFranceBundle:pages:404.html.twig');
            }

            foreach($video->getSubtitles() as $s) {
                if($s->getNote() > $subtitle->getNote())
                    $subtitle = $s;
            }
            print_r($subtitle->getFilename());
               /* $em->persist($video);


                $structure = 'C:/wamp/www/my_project_web/web/uploads/video/'.$directoryName;
                mkdir($structure, 0777, true);
                //echo 'Echec lors de la création des répertoires...';
                exec('C:\wamp\bin\php\youtube-dl -o C:/wamp/www/my_project_web/web/uploads/video/'.$directoryName.'/video.mp4 --format mp4 https://www.youtube.com/watch?v='.$v['id']);
                exec('C:\wamp\bin\php\ffmpeg\bin\ffmpeg -ss 4 -i C:/wamp/www/my_project_web/web/uploads/video/'.$directoryName.'/video.mp4 -s 480x300 -frames:v 1 C:/wamp/www/my_project_web/web/uploads/video/'.$directoryName.'/poster.jpg');
                $em->flush();*/
        return $this->render('GudetamaFranceBundle:pages:single.html.twig', array('video' => $video));
    }

}
