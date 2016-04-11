<?php
require(dirname(__FILE__) . '/../includes/prepend.inc.php');
require(__DATA_CLASSES__ . '/Tree.class.php');

header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Origin: *');

//post tree
if(isset($_POST['tree'])){

   $tree = json_decode($_POST['tree']);
   //var_dump($tree);
   $t = new Tree();
   $t->Name = $tree->name;
   $t->Age  = $tree->age;
   $t->Save();

   $str = "Added new tree:\nID: " . $t->IdTree . "\nName: " . $t->Name . "\nAge: " . $t->Age;
   echo $str;
   //var_dump($t);
   
}

//return all trees
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'tree') == true && strpos($_SERVER["QUERY_STRING"], 'id') == false){
	
   $list = Tree::LoadAll();
   $str = "[";
   $i = 0;


   for ($i=0; $i < sizeof($list); $i++) {

   		$tree = $list[$i];
   		$str .= '{ \"name\": \"' . $tree->Name . ',\"age\":'. $tree->Age . '}';
   		if($i < sizeof($list) - 1)
   			$str .= ',';
   }
   
   
   
   $str .= ']';
   var_dump($str);
   
}


//return tree with id
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'tree') == true && strpos($_SERVER["QUERY_STRING"], 'id') == true){
   
   parse_str($_SERVER["QUERY_STRING"], $query);
   $treeID = $query["id"];
   $t = new Tree();
   $t = Tree::Load($treeID);

   //build json and return it

   var_dump($t);
   
}



//return species with id
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'species') == true && strpos($_SERVER["QUERY_STRING"], 'id') == true){
   
   parse_str($_SERVER["QUERY_STRING"], $query);
   $speciesID = $query["id"];
   //$speciesID = "1";
   $t = new Species();
   $t = Species::Load($speciesID);

   //build json and return it
   $speciesJson = $t->getSpeciesJson();
   echo $speciesJson;
   
}
?>