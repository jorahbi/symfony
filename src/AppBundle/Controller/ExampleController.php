<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use AppBundle\EventListener\ExampleListener;

class ExampleController extends Controller
{
	 /**
	 * 路由解析
     * @Route("/example/show/{slug}", name="example_show")
     */
    public function showAction($slug)
    {
    	$url = $this->generateUrl(
            'example_show',
            array('slug' => $slug)
        );

        $url2 = $this->generateUrl(
            'example_show',
            array('slug' => $slug),
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $url1 = $this->get('router')->generate('example_show', array(
		    'slug' => 2
		));
        print_r($url);echo "<br />";
        print_r($url1);echo "<br />";
        print_r($url2);echo "<br />";
        //重定向
        //return $this->redirectToRoute('homepage');
        return $this->render('default/example.html', ['params' => $slug]);
    }
    /**
     * 重定向
     * @Route("/example/redirect")
     */
    public function redirectAction()
    {
    	//return $this->redirectToRoute('example_show', ['slug' => 111]);//第三个参数默认302 临时重定向 永久重定向301
    	return new RedirectResponse($this->generateUrl('example_show', ['slug' => 111]));
    }

    /**
     * 重定向
     * @Route("/example/listener")
     */
    public function listenerAction()
    {
    	/*$dispatcher = new EventDispatcher();
    	$listener = new ExampleListener();
		$dispatcher->addListener('kernel.request', array($listener, 'ontest'));*/
		return $this->render('default/example.html', ['params' => 'sdfsd']);
    }
}