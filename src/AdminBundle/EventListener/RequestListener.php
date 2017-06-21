<?php 
namespace AdminBundle\EventListener;
 
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

use AppBundle\StoreEvents;
use AppBundle\EventListener\FilterOrderEvent;
use AppBundle\Entity\Activity;
use Symfony\Component\EventDispatcher\EventDispatcher;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;
 
class RequestListener
{
    protected $fileSystem;

    public function __construct()
    {
        $this->$fileSystem = new FilesystemAdapter();
    }

	public function onKernelRequest(GetResponseEvent $event)
	{
		/* if (!$event->isMasterRequest()) {
            // don't do anything if it's not the master request
            // 如果不是主请求，就什么也不做
            var_dump('event');
            return;
        }*/
        
        //自定义事件
       /* $activity = new Activity();
        $event = new FilterOrderEvent($activity);
        $dispatcher = new EventDispatcher();
        //$dispatcher->addListener(StoreEvents::STORE_ORDER, [$event, 'onStoreOrder']);
        $dispatcher->dispatch(StoreEvents::STORE_ORDER, $event);*/
		//\Doctrine\Common\Util\Debug::dump($event->getRequest()->attributes->get('_route'));
        $currentRoute = $event->getRequest()->attributes->get('_route');
        switch ($currentRoute) {
            case 'admin':
                $this->_adminAuth($currentRoute);
                break;
            
            case 'passport':
                $this->_passportAuth($currentRoute);
                break;
        }
       
        var_dump($resultCache);
	}

    /**
     * 
     */
    private function _adminAuth($currentRoute)
    {
        //$cache->deleteItem('stats.permissions');//删除缓存
        $perCache = $this->fileSystem->getItem('stats.permissionsAll');
        $resultCache = [];
        if($perCache->isHit() && in_array($currentRoute, $perCache->get())){
            //$resultCache = $perCache->get();
            //权限验证 跳转
        }
    }

    private function _passportAuth($currentRoute)
    {

    }
}