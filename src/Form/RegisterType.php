<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'label' => 'Nombre'
        ])
        ->add('surname', TextType::class, [
            'label' => 'Surname'
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email'
        ])
        ->add('password', PasswordType::class, [
            'label' => 'Password'
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Registrar'
        ]);
    }
}
