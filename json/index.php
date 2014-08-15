<?php
function runTime(){
    $mtime = microtime();
    $mtime = explode(' ', $mtime);
    $mtime = $mtime[1] + $mtime[0];
    return $mtime;
}
?>
<pre>
<?php
$start = runTime();

$ser;

for($i=0; $i<1000; $i++){
    $a = array("a" => 1, "x" => 10);
    $ser = serialize($a);
}
$total = runTime() - $start;
echo "Serializing 1000 times took \t$total seconds";
?>

<?php
$start = runTime();

$json;

for($i=0; $i<1000; $i++){
    $a = array("a" => 1, "x" => 10);
    $json = json_encode($a);
}
$total = runTime() - $start;
echo "JSON encoding 1000 times took \t$total seconds";
?>

<?php
$start = runTime();

$ser;

for($i=0; $i<1000; $i++){
    $a = unserialize($ser);
}
$total = runTime() - $start;
echo "Unserializing 1000 times took \t$total seconds";
?>

<?php
$start = runTime();

$json;

for($i=0; $i<1000; $i++){
    $a = json_decode($json);
}
$total = runTime() - $start;
echo "JSON decoding 1000 times took \t$total seconds<br>";
echo date('Y-m-d H:i:s', 1406953616);
?>
</pre>