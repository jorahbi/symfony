<?php

/**
 * Annotation class for @Route().
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 *
 */
class Test
{
	public function __construct()
	{
		var_dump('annotation run');
	}
}