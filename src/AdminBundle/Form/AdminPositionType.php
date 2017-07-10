<?php 
namespace AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class AdminPositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, Array $options)
    {
        $builder->add('title', TextType::class)
            ->add('parentId', EntityType::class, [
                'class' => 'AdminBundle:AdminPosition',
                    //'mapped' => false,
                    'choice_label' => 'title',
                    //'choice_value' => 'path',
                    'required' => false,
                    'query_builder' => function(EntityRepository $er){
                       /* $result = $er->createQueryBuilder('p')->andWhere('p.lv = :lv')->setParameter('lv', 1)->orderBy('p.label', 'ASC');
                        //\Doctrine\Common\Util\Debug::dump($result);
                        return $result;*/
                    }
                ])
            ->add('isEnable', CurrencyType::class, array(
                    //'mapped' => false, 
                    'required' => true, 
                    'choices' => ['是' => 1, '否' => 0], 
                    'expanded' => true,
                    'multiple' => false,
                    'data' => 1
            ))
            ->add('save', SubmitType::class);
    }
}





