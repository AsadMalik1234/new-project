<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get author from form class example code
$player = $_POST["player"];
$team = $_POST["team"];
$rating = $_POST["rating"];
$description = $_POST["description"];



if (file_exists('users.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('users.xml');

    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    //displaying the element in proper format
    echo '<u><b>This is the xml code from users.xml:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';

    //adding new child to the xml
    $newChild = $xml->addChild('user');
    $newChild->addChild('player', $player);
    $newChild->addChild('team', $team);
    $newChild->addChild('rating', $rating);
    $newChild->addChild('description', $description);
  
    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    //displaying the element in proper format
    echo '<u><b>This is the xml code from users.xml with new elements added:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';

    //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    // foreach ($xml->children() as $child)
      //  $child->user = "new data";
    //displaying the element in proper format
   // echo '<br /><u><b>This is the xml code from users.xml with all genre changed:</b></u>
   //  <br /><br />
     //<pre>' . htmlentities($xml->asXML(), ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>'; 
} 
else {
    exit('Failed to open users.xml.');
}
    file_put_contents('/home/ubuntu/workspace/users.xml', $xml->asXML());
?>
