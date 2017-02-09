<?php

namespace GudetamaFranceBundle\Form;

use \Entity\UploadSubtitle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UploadSubtitleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
			->add('save', SubmitType::class, array('attr' => array('class' => 'save')))						
            ->add('filename', FileType::class, array('label' => 'Subtitles (SRT file)'))
            // ...
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GudetamaFranceBundle\Entity\UploadSubtitle',
        ));
    }
}
