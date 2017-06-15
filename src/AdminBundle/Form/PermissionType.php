<?php 
namespace AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class PermissionType extends AbstractType
{

    private $_container;
    private $_doctrine;

    private function _getContainer()
    {
        global $kernel;
        $this->_container = $kernel->getContainer();
        $this->_doctrine = $this->_container->get('doctrine')->getManager();
    }

    public function buildForm(FormBuilderInterface $builder, Array $options)
    {
        $this->_getContainer();
        $permissions = $this->_doctrine->getRepository('AdminBundle:Permission')->getRoot();
        $parents = [];
        foreach($permissions as &$value)
        {
            $parents[$value['label']] = $value['id'];
        }
        $builder->add('label', TextType::class)
            //->add('path', TextType::class, array('mapped' => false, 'required' => false))
            ->add('link', TextType::class)
            ->add('lv', TextType::class)
            ->add('path', TextType::class, array('mapped' => false, 'required' => false))
            //->add('icon', TextType::class, array('required' => false))
            ->add('parentId', ChoiceType::class, array(
                'required' => false, 
                'mapped' => false,
            	'choices' => $parents,
            	//'expanded' => true
            ))
            /*->add('path2', CountryType::class, array('mapped' => false, 'required' => false))
            //->add('path3', EntityType::class, array('mapped' => false, 'required' => false))
            ->add('path4', LanguageType::class, array('mapped' => false, 'required' => false))
            ->add('path5', LocaleType::class, array('mapped' => false, 'required' => false))
            ->add('path6', TimezoneType::class, array('mapped' => false, 'required' => false))
            ->add('path7', CurrencyType::class, array('mapped' => false, 'required' => false))*/
            ->add('save', SubmitType::class, array('label' => 'Create Task'));
    	
    }
}





