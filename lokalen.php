<?php   

$lokalen = [
    ["lokaal" => "1.056", "capaciteit" => 34],
    ["lokaal" => "1.035", "capaciteit" => 39],
    ["lokaal" => "2.087", "capaciteit" => 45],

];

echo '<ul>';
foreach ($lokalen as $lokaal) {
    echo '<li>' . $lokaal['lokaal'] . " - " . $lokaal['capaciteit'] . '</li>';
}

echo '</ul>';