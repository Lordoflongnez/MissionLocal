<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;    
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;



class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les deux mots de passe doivent être identiques',
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le Mot de passe'],
                'options' => array(
                    'attr' => array(
                        'class' => 'password-field',
                        
                    )
                ),
                'required' => true,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Validé !',
                'attr' => array(
                    'class' => 'btn btn-primary btn-block'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
