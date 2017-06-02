<?php 
namespace AppBundle\EventListener;
 
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
 
class ExampleListener
{
	public function onKernelRequest(GetResponseEvent $event)
	{
		/* if (!$event->isMasterRequest()) {
            // don't do anything if it's not the master request
            // 如果不是主请求，就什么也不做
            var_dump('event');
            return;
        }*/
        
        //自定义事件
        $activity = new Activity();
        $event = new FilterOrderEvent($activity);
        $dispatcher = new EventDispatcher();
        //$dispatcher->addListener(StoreEvents::STORE_ORDER, [$event, 'onStoreOrder']);
        $dispatcher->dispatch(StoreEvents::STORE_ORDER, $event);
		var_dump('事件监听');
		
	}

}