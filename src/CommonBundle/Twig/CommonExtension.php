<?php
namespace CommonBundle\Twig;


class CommonExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('inArray', array($this, 'inArrayFilter')),
        );
    }

    public function inArrayFilter($needle, Array $haystack)
    {
        return in_array($needle, $haystack);
    }

    public function getName()
    {
        return 'app_extension';
    }
}