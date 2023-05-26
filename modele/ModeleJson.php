<?php

class ModeleJson{
    public static function getJson($url){

        $context = array( 'http' => array('request_fulluri' => true, ), );
        $cxContext = stream_context_create($context);
        $json = file_get_contents($url, False, $cxContext);
        $listeObjets = json_decode($json);
        return $listeObjets;
    }
}
?>