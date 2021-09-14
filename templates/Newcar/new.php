<h1><?= $this->data['new']['caption'] ?></h1>
<img src="public/images/cars/<?= $this->data['car']['id'] . '_' . $this->data['car']['picture'] ?>">
<div><?= $this->data['new']['text'] ?></div>
<hr>
<?php
foreach ($this->data['comments'] as $row) {
    echo "<i>$row[text]</i><b>$row[name]</b><br>";
}
?>

