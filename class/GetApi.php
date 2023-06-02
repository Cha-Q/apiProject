<?php

    class GetAPi{

            public $apiUrl;
            public $apiKey;
            

            public function __construct(string $apiUrl, string $apiKey = '')
            {
                $this->apiUrl = $apiUrl;
                $this->apiKey = $apiKey;
            }
            

            public function apiRequest()
            {
                $curl = curl_init($this->apiUrl);
                
                curl_setopt_array( $curl, [
                    CURLOPT_CAINFO => __DIR__ .DIRECTORY_SEPARATOR . 'cert.cer',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 1
                ]);

                $data = curl_exec($curl);
                var_dump($data);
                if($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) != 200){
                    echo'oh oh';
                    return null;
                }
                
                $data = json_decode($data, true);
                return $data;
                
            }

    }




?>