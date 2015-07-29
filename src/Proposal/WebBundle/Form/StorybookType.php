<?php

namespace Proposal\WebBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;

class StorybookType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
            ->add('title','text')
            ->add('content','textarea',array('attr'=>array('rows'=>20)))
            ->add('file','file',array(
                'label'=>'插图'
                ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Storybook',
        ));
    }

    public function getName()
    {
        return 'storybook';
    }

}