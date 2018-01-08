<?php

namespace Valiton\Payment\DatatransBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DatatransType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    public function getName()
    {
        return 'datatrans';
    }
}