<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');
require(__DATA_CLASSES__ . '/Tree.class.php');

header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Origin: *');


//return tree with id
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') !== false ){
   
   
   parse_str($_SERVER["QUERY_STRING"], $query);
   $treeID = $query["id"];
   //$speciesID = "1";
   $t = new Tree();
   $t = Tree::Load($treeID);

   //build json and return it
   $treesJson = $t->getTreeJson();
   echo $treesJson;

}

//return all trees
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') === false){
   
   $list = Tree::LoadAll();
   $str = Tree::getArrayTreeJson($list);
   echo $str;
}


/*
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
*/


?>