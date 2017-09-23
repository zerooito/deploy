<?php

class Deploy
{
	
	const URL = 'https://scrutinizer-ci.com/api/repositories/g/ciawn/dashboard/inspections?access_token=e0c3870a889587f6271f81cc9d51e0ef515664ad463ecf90f3f4d65bf2af269d';


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