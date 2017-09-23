<?php

require 'constants.php';

class Deploy
{
	
	const URL = SCRUTINIZER_ENDPOINT . '?access_token=' . TOKEN;

	public function getLastBuild()
	{
		$curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, self::URL); 

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

        $output = json_decode(curl_exec($curl)); 

        curl_close($curl);      

        return $output->_embedded->inspections[0]->build->status;
	}

	public function run()
	{
		if ($this->getLastBuild() != "passed")
			throw new Exception("Last Build Failed");			
		
		print self::URL;
	}

}

$Deploy = new Deploy;

$Deploy->run();