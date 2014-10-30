<?php

namespace Jim\P0700Bundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('lastName', null, array('label' => "Nom"));
        $builder->add('firstName', null, array('label' => "Prénom"));
        $builder->add('address', null, array('label' => "Adresse"));
        $builder->add('postalCode', null, array('label' => "Code postal"));
        $builder->add('town', null, array('label' => "Ville"));
        $builder->add('phoneNumber', null, array('label' => "Téléphone fixe"));
        $builder->add('mobileNumber', null, array('label' => "Téléphone mobile"));
    }

    public function getName()
    {
        return 'jim_p0700_user_registration';
    }
}