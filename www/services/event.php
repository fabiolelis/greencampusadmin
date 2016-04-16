<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');
require(__DATA_CLASSES__ . '/Tree.class.php');

header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Origin: *');


//return tree with id
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') !== false ){
   
   
   parse_str($_SERVER["QUERY_STRING"], $query);
   $eventID = $query["id"];
   //$speciesID = "1";
   $e = new Event();
   $e = Event::Load($eventID);

   //build json and return it
   $eventJson = $e->getEventJson();
   echo $eventJson;

}

//return all trees ordered by date
if(isset($_GET) && strpos($_SERVER["QUERY_STRING"], 'id') === false){
   
   $list = Event::QueryArray(
        QQ::All(),
        QQ::Clause(
            QQ::OrderBy(QQN::Event()->DateTime)
        )
    );
   $str = Event::getArrayEventJson($list);
   echo $str;
}
