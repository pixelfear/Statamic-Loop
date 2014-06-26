<?php
class Plugin_loop extends Plugin
{

	/**
	 * Loops over the tag pair content n times
	 * @return string
	 */
	public function index()
	{
		// Parameters
		$from  = $this->fetchParam('from', 1);
		$to    = $this->fetchParam('to', 1) + 1;
		$times = $this->fetchParam('times');
		
		// Determine end point
		$end = ($times) ? $from + $times : $to;

		// Loop!
		for ($i = $from; $i < $end; $i++) {
			$vars[] = array(
				'value' => $i
			);
		}

		// Parse it
		return Parse::tagLoop($this->content, $vars, true, $this->context);
	}

}
