<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SigninType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'placeholder' => 'saisir votre e-mail'
                ]
            ])
            ->add('password',PasswordType::class,[
                'label'=>'Mot de passe',
                'attr'=> [
                    'placeholder'=>'saisir votre mot de passe'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>'valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CliUser::class,
        ]);
    }
}
