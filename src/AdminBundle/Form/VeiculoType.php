<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class VeiculoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marca', ChoiceType::class, array(
                'choices' => array(
                  'Renault' => 'Renault',
                  'Ford' => 'Ford',
                  'vw' => 'VolksVagem',
                  'Honda' => 'Honda'
                ),
            ))
            ->add('modelo')
            ->add('ano', DateType::class, array(
                'format' => 'yyyy-MM-dd'
            ))
            ->add('cor', ChoiceType::class, array(
                'choices' => array(
                    'Azul' => 'Azul',
                    'Preto' => 'Preto',
                    'Branco' => 'Vermelho' 
                ),
                'expanded' => true,
                'multiple' => false
            ))
            ->add('categoria')
            ->add('cidade')  
            ->add('preco')    
            ->add('image', FileType::class)    
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Veiculo'
        ));
    }
}
