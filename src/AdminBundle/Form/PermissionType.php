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
        /*$permissions = $this->_doctrine->getRepository('AdminBundle:Permission')->getRoot();
        $parents = [];
        foreach($permissions as &$value)
        {
            $parents[$value['label']] = $value['id'];
        }*/
         $builder->add('status', CurrencyType::class, array(
                'mapped' => false, 
                'required' => true, 
                'choices' => ['是' => 0, '否' => 1], 
                'expanded' => true,
                'multiple' => false,
            ));
            //->add('link', TextType::class);
            /*->add('lv', TextType::class)
            ->add('path', TextType::class, array('mapped' => false, 'required' => false))*/
            //->add('icon', TextType::class, array('required' => false))
            /*->add('parentId', ChoiceType::class, array(
                'required' => false, 
                'mapped' => false,
            	'choices' => $parents,
            	//'expanded' => true
            ))*/
            /*->add('path2', CountryType::class, array('mapped' => false, 'required' => false))
            //->add('path3', EntityType::class, array('mapped' => false, 'required' => false))
            ->add('path4', LanguageType::class, array('mapped' => false, 'required' => false))
            ->add('path5', LocaleType::class, array('mapped' => false, 'required' => false))
            ->add('path6', TimezoneType::class, array('mapped' => false, 'required' => false))
            ->add('path7', CurrencyType::class, array('mapped' => false, 'required' => false))*/
            // ->add('save', SubmitType::class, array('label' => 'Create Task'));
            /*$builder->add('parentTest', EntityType::class, [
                'class' => 'AdminBundle:Permission',
                    'mapped' => false,
                    'choice_label' => 'label',
                    'query_builder' => function(EntityRepository $er){
                        //return $er->findBy(['lv' => 1]);
                        $result = $er->createQueryBuilder('p')->andWhere('p.lv = :lv')->setParameter('lv', 1)->orderBy('p.label', 'ASC');
                        //\Doctrine\Common\Util\Debug::dump($result);
                        //\Doctrine\Common\Util\Debug::dump($er->findBy(['lv' => 1]));
                        return $result;
                    }
            ]);*/
    	$builder->addEventListener(
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

                $form->add('parentTest', EntityType::class, $formOptions);
            }
        );
    }
}





