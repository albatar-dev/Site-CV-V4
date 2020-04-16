<?php

namespace App\Form;

use App\Entity\MessagesInternes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('entreprise')
            ->add('mail')
            ->add('titreMessage')
            ->add('message', TextareaType::class)
            ->add('visibleOnSite', null, ['attr'=>['checked'=>true]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MessagesInternes::class,
        ]);
    }
}
