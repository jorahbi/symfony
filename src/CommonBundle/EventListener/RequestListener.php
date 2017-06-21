<?php 
namespace CommonBundle\EventListener;
 
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\DependencyInjection\Container;
 
class RequestListener
{
    protected $fileSystem;
    protected $container;

    public function __construct(Container $container)
    {
        $this->fileSystem = new FilesystemAdapter();
        $this->container = $container;
    }

    /**
     * request事件拦截登录与权限验证
     */
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
		//\Doctrine\Common\Util\Debug::dump($event->getRequest()->getHttpHost());
        //$pathInfo = $event->getRequest()->getPathInfo();
        $interceptor = $this->container->getParameter('request.interceptor');
        $currentRoute = $event->getRequest()->attributes->get('_route');
        $result = true;
        
        foreach($interceptor as $key => &$value)
        {
            //过滤不用验证的route
            if(in_array($currentRoute, $value['filter']))
                break;

            if(strpos($currentRoute, '/' . trim($key, '/')) === 0)
            {
                $funcName = $value['method'];
                if(!$this->$funcName($currentRoute))
                {
                    header('Location: ' . $value['redirect']);die;
                }
                $perCache = $this->fileSystem->getItem('stats.permissionsAll')->get();
                $currentMenu = isset($perCache[$currentRoute]) ? $perCache[$currentRoute] : '';
                unset($perCache);
                $this->container->get('admin.permissionService')->setCurrentMenu(explode(',', $currentMenu));
                break;
            }
        }
	}

    /**
     * 
     */
    private function _adminAuth($currentRoute)
    {
        //登录、权限验证
        //$cache->deleteItem('stats.permissions');//删除缓存
        $perCache = $this->fileSystem->getItem('stats.permissionsAll');
        $resultCache = [];
        if($perCache->isHit() && in_array($currentRoute, $perCache->get())){
            //$resultCache = $perCache->get();
            //权限验证 跳转
        }
        return true;
    }

    private function _passportAuth($currentRoute)
    {

    }
}