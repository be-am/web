<?php
function createUrlQuery($baseUrl,$arr){
    $baseUrl.="?";
    
    $i=0;
    while($i<count($arr)){
        if($i%2==0 || $i==0){
            $baseUrl.=$arr[$i];
            $baseUrl.="=";
        }
        else{
            $baseUrl.=$arr[$i];
            if($i!=count($arr)-1){
                $baseUrl.="&";
            }
        }
        $i+=1;
    }
    return $baseUrl;
}
?>