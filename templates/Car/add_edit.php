<style>
    .row {
        background-image: url("/public/images/cars/16678.jpg");
        color: white;
    }
</style>

<div class="row">
    <div class="col">
    </div>
    <div class="col">

        <div class="block_news_edit">
            <form enctype="multipart/form-data" action="<?= $this->data['action'] ?>" method="post">
                <?php
                unset($this->data["comments"]['picture']);

                foreach ($this->data["comments"] as $field => $value) {
                    if ($field == "text") {
                        echo "<textarea class='news_text' name='$field'>" . ($this->data['row'][$field] ?? "") . "</textarea><br>";
                    } else {
//                echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

                        echo "    <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>" . $value . "</span>
        <input name='$field' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value='" . ($this->data['row'][$field] ?? "") . "'>
    </div>";
                    }
                }
                ?>
                <br>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"><b>Attach a file with a image</b></label>
                    <input class="form-control" type="file" id="formFileMultiple" name="picture" multiple>
                </div>
                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>
    <div class="col">
    </div>
</div>
</div>
