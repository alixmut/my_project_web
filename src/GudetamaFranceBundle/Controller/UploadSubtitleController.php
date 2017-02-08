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
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $upload->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $upload->setBrochure($fileName);

            // ... persist the $upload variable or any other work
			/*$file = $product->getBrochure();
			$fileName = $this->get('app.brochure_uploader')->upload($file);

			$product->setBrochure($fileName);*/
			$em->persist($upload);
			$em->flush();
            return $this->redirect('GudetamaFranceBundle:UploadSubtitle:upload_subtitle.html.twig');
        }
		return $this->render('GudetamaFranceBundle:UploadSubtitle:upload_subtitle.html.twig', array(
            'form' => $form->createView(),));
    }
}
