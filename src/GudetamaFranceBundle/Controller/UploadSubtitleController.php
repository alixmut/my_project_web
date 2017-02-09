<?php

namespace GudetamaFranceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GudetamaFranceBundle\Entity\UploadSubtitle;
use GudetamaFranceBundle\Form\UploadSubtitleType;

class UploadSubtitleController extends Controller
{
    public function upload_subtitleAction(Request $request)
    {
        $upload = new UploadSubtitle();
        $form = $this->createForm(UploadSubtitleType::class, $upload);
        $form->handleRequest($request);
		$em = $this->getDoctrine()->getManager();
		
		if ($form->isSubmitted() && $form->isValid()) {
			
			// $file stores the uploaded srt file
			/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $upload->getFilename();
																			//Si n'entre pas dans le if, fait des choses
			if(strcmp($file->getClientOriginalExtension(), "srt") == 0) {	//Quand censé entrer dans le if, ne fait plus rien et ne sort pas
				echo "<script>alert(\"Le fichier a été ajouté\")</script>";
				// Generate a unique name for the file before saving it
				$fileName = md5(uniqid()).'.'."srt";

				// Move the file to the directory where brochures are stored
				$file->move(
					$this->getParameter('brochures_directory'),
					$fileName
				);

				// Update the 'brochure' property to store the srt file name
				// instead of its contents
				$upload->setFilename($fileName);

				// ... persist the $upload variable or any other work
				/*$file = $product->getBrochure();
				$fileName = $this->get('app.brochure_uploader')->upload($file);
				$product->setBrochure($fileName);*/
				$em->persist($upload);
				$em->flush();
                return $this->render('GudetamaFranceBundle:pages:upload_subtitle.html.twig', array(
                    'form' => $form->createView(),));
			}
			else echo "<script>alert(\"Le fichier n'est pas un srt\")</script>";
		}
		return $this->render('GudetamaFranceBundle:pages:upload_subtitle.html.twig', array(
				'form' => $form->createView(),));
    }
}
