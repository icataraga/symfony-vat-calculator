<?php

namespace App\Form;

use App\Entity\Vat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class Calculator extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('currency', HiddenType::class, ['empty_data' => 'dollar'])
            ->add('cost', IntegerType::class, ['attr' => ['class' => 'form-control'],'label' => 'Item Cost ($)','required' => true])
            ->add('vat_rate_percentage', IntegerType::class, ['attr' => ['class' => 'form-control'],'label' => 'VAT Rate(%)','required' => true])
            ->add('vat_rate_amount', NumberType::class, ['attr' => ['class' => 'form-control', 'readonly'=>'readonly'],'label' => 'VAT Rate($)','required' => true])
            ->add('gross_amount', NumberType::class, ['empty_data' => 0,'attr' => ['class' => 'form-control', 'readonly'=>'readonly'],'label' => 'Total Amount','required' => true])
            ->add('date', HiddenType::class, ['empty_data' => new \DateTime()] )
            ->add('save', SubmitType::class, ['attr' => ['class'=> 'btn btn-default'],'label' => 'Save'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
                'data_class' => Vat::class,
        ]);
    }
}
