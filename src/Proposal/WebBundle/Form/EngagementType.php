<?php

namespace Proposal\WebBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class EngagementType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title','text')
            ->add('content','textarea',array('attr'=>array('rows'=>10)))
            ->add('questions','textarea',array('attr'=>array('rows'=>10)))
            ->add('answers','textarea',array('attr'=>array('rows'=>10)));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Engagement',
        ));
    }

    public function getName()
    {
        return 'engagement';
    }

}