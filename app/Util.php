<?php
//the two required functions to convert spaces into - and to lowercase
class Util{

    public function spaceConverter($data)
    {
        $data = str_replace(" ","-", $data);
        return $data;
    }

    public function lowerStrngConverter($data)
    {
        $data = strtolower($data);
        return $data;
    }

}



?>