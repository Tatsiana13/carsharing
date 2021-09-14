<style>
    .row {
        background-image: url("/public/images/cars/16678.jpg");
        color: white;
        height: 800px;
    }
</style>
<div class="row">
    <div class="col">
    </div>
    <div class="col">

        <div class="block_news_edit">
            <?php
            //print_r($this->data);
            use W1020\HTML\Select; ?>

            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
//                    echo $value . "<br>";
                    if ($field == "user_groups_id") {
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["groupList"])
                                ->setSelected($this->data["row"]['user_groups_id'] ?? "")
                                ->html() . '<br>';
                    } else {
                        echo "    <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>" . $value . "</span>
      <input name='$field' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value='" . ($this->data['row'][$field] ?? "") . "'>
    </div>";
                    }
                }
                ?>
                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="Save Changes">
                </div>
            </form>
        </div>
    </div>
    <div class="col">
    </div>
</div>
</div>
