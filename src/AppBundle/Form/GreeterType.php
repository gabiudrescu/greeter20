<?php

namespace AppBundle\Form;

use App\Collection\CommonNames;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GreeterType extends AbstractType
{
    private $names;

    public function __construct(CommonNames $names)
    {
        $this->names = $names;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'required' => false
            ])
            ->add('common_names', ChoiceType::class, [
                'choices' => $this->names->toArray(),
                'choices_as_values' => true,
                'choice_label' => function ($value) {
                    return $value;
                }
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }

    public function getName()
    {
        return self::class;
    }
}
