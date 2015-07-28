<?php

namespace Proposal\WebBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class ConfirmType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title','text')
            ->add('content','textarea')
            ->add('images','file',array('label'=>'插图'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Confirm',
        ));
    }

    public function getName()
    {
        return 'confirm';
    }

}