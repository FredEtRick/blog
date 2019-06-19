<?php

namespace App\Form;

use App\Form\CommentType;
use App\Entity\CommentCompo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CommentCompoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comment', CommentType::class, ['data_class' => CommentCompo::class])
            ->add('save', SubmitType::class, [
                    'label' => "Envoyer",
                    'attr' => [
                            'class' => 'btn btn-success mt-4 boutonForm'
                        ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CommentCompo::class,
        ]);
    }
}
