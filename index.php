<?

// Set your MOMGOHQ_URL with "heroku config:set MONGOHQ_URL= ...
$mongo = new Mongo(getenv('MONGOHQ_URL'));

// Select db and doc
$doc = $mongo->database->document;

// Select the id
$id = 1;
$content = $doc->findOne(array('_id'=>$id));

// Create output
var_dump($content);

?>
