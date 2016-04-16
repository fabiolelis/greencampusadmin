<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');
require(__DATA_CLASSES__ . '/Species.class.php');

header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Origin: *');


//echo ($_SERVER["QUERY_STRING"]);
//var_dump(strpos($_SERVER["QUERY_STRING"], 'id') !== false );
//var_dump(strpos($_SERVER["QUERY_STRING"], 'id') === false );



//return species with id
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') !== false ){
   
   parse_str($_SERVER["QUERY_STRING"], $query);
   $speciesID = $query["id"];
   //$speciesID = "1";
   $t = new Species();
   $t = Species::Load($speciesID);

   //build json and return it
   $speciesJson = $t->getSpeciesJson();
   echo $speciesJson;
   
}
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') === false){
   
   $list = Species::LoadAll();
   $str = Species::getArraySpeciesJson($list);
   echo $str;
   

}


?>