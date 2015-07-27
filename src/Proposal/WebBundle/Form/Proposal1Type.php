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

        $builder->get('content')
            ->addModelTransformer(new CallbackTransformer(
            // transform <br/> to \n so the textarea reads easier
                function ($originalDescription) {
                    return preg_replace('#<br\s*/?>#i', "\n", $originalDescription);
                },
                function ($submittedDescription) {
                    // remove most HTML tags (but not br,p)
                    $cleaned = strip_tags($submittedDescription, '<br><br/><p>');

                    // transform any \n to real <br/>
                    return str_replace("\n", '<br/>', $cleaned);
                }
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proposal\WebBundle\Entity\Proposal',
        ));
    }

    public function getName()
    {
        return 'proposal1';
    }

}