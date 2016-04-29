<?php
$expectedValues = array("food", "animals", "flowers");

$selectionArr['food'] = array('pizza', 'spaghetti', 'rice');
$selectionArr['animals'] = array('cat', 'dog', 'girrafe', 'pig', 'chicken');
$selectionArr['flowers'] = array('rose', 'sampaguita');

if (isset($_POST['data']) and in_array($_POST['data'], $expectedValues)){
$selectedArr = $selectionArr[$_POST['data']];

foreach($selectedArr as $optionValue){
echo '<option>' . $optionValue . '</option>';
}
}
?>