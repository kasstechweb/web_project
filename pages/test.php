<?php

echo $db->get_connection();
$games = $db->get_all_from('games');
foreach ($games as $game) {
    echo $game['name'];
}
//var_dump();
?>
<p>test</p>
