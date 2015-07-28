<?php

namespace Proposal\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class Proposal2Type extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question','textarea',array('attr'=>array('rows'=>7)))
            ->add('option1','text')
            ->add('option2','text')
            ->add('option3','text')
            ->add('option4','text')
            ->add('option5','text');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Proposal2',
        ));
    }

    public function getName()
    {
        return 'proposal2';
    }



}