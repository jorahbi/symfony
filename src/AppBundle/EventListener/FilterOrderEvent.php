<?php 

namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use AppBundle\Entity\Activity;

class FilterOrderEvent extends Event
{
	protected $activity;

	public function __construct()
	{
		$this->activity = new Activity();
	}

	public function getActivity()
	{
		return $this->activity;
	}

	public function onStoreOrder()
	{
		var_dump('storeOrder');
	}
}