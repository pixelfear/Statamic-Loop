<?php
class Plugin_loop extends Plugin
{

	/**
	 * Loops over the tag pair content n times
	 * @return string
	 */
	public function index()
	{
		// Number of times to loop
		$times = $this->fetchParam('times', 1);

		// Loop!
		for ($i=0; $i < $times; $i++) {
			$vars[] = array(
				'index' => $i,
				'count' => $i+1
			);
		}

		// Parse it
		return Parse::tagLoop($this->content, $vars, true, $this->context);
	}

}
