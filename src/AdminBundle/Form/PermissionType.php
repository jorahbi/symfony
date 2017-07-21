<?php 
namespace AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class PermissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, Array $options)
    {
        $builder
        ->add('link', TextType::class, [
            'data' => $options['data']->getLink(),
        ])
        ->add('label', TextType::class, [
            'data' => $options['data']->getLabel(),
        ])
        ->add('icon', TextType::class, [
            'data' => $options['data']->getIcon(),
        ])
        ->add('id', HiddenType::class, [
            'data' => $options['data']->getId(),
            'required' => false,
            'mapped' => false
        ])
        ->add('status', CurrencyType::class, [
                //'mapped' => false, 
                'required' => true, 
                'choices' => ['是' => 1, '否' => 0], 
                'expanded' => true,
                'multiple' => false,
                'data' => $options['data']->getStatus(),
        ])
        ->add('isMenu', CurrencyType::class, [
                //'mapped' => false, 
                'required' => true, 
                'choices' => ['是' => 1, '否' => 0], 
                'expanded' => true,
                'multiple' => false,
                'data' => $options['data']->getIsMenu(),
        ])
        ->add('parentId', EntityType::class, [
                'class' => 'AdminBundle:Permission',
                    'mapped' => false,
                    'choice_label' => 'label',
                    //'choice_value' => 'path',
                    'required' => false,
                    'data' => $options['data']->getParent() === NULL ? NULL : $options['data']->getParent()->getId(),
                    'query_builder' => function(EntityRepository $er){
                        return $er->createQueryBuilder('p');
                        //return $result;
                    }
        ])
        ->add('save', SubmitType::class);
    	/*$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event){
                $form = $event->getForm();
                $formOptions = [
                    'class' => 'AdminBundle:Permission',
                    'mapped' => false,
                    'choice_label' => 'label',
                    //'property' => 'label',
                    'query_builder' => function(EntityRepository $er){
                        //return $er->createQueryBuilder('p')->andWhere('p.lv = :lv')->setParameter('lv', 1)->orderBy('p.label', 'ASC');
                    }
                ];

                $form->add('parentId', EntityType::class, $formOptions);
            }
        );*/
    }
}





