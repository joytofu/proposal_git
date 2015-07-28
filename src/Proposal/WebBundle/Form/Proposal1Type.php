<?php

namespace Proposal\WebBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class Proposal1Type extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options){
       $builder
           ->add('title','text')
           ->add('content','textarea',array('attr'=>array('rows'=>20)));


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Proposal1',
        ));
    }

    public function getName()
    {
        return 'proposal1';
    }

}