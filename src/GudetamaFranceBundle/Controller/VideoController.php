<?php

namespace GudetamaFranceBundle\Controller;

use Symfony\Component\Process\Process;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoController extends Controller
{

    public function showAction()
    {


        return $this->render('GudetamaFranceBundle:pages:video.html.twig');
    }
}
