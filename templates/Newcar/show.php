<div class="row">
    <div class="col">

    </div>
    <div class="col-8">
        <h1>Auto Rental Guides</h1>
        <?php

        use W1020\HTML\Pagination;
        use W1020\HTML\Table;

        unset($this->data["comments"]["edit"]);
        unset($this->data["comments"]["del"]);
        $this->data["comments"]["book"] = "Book the Car";


        echo "<div class='row g-0 bg-light position-relative'>";
        foreach ($this->data["table"] as $row) {
            echo "<div class='col-md-6 mb-md-0 p-md-4'>";
            echo "<img class='w-100' alt='...' src='public/images/cars/" . $row['id'] . "_" . $row['picture'] . "'>";
            echo "</div>";
            echo "<div class='col-md-6 p-4 ps-md-0'>";
            echo "<h5 class='mt-0'>" . $row["model"] . "</h5>";
            echo "<p> Price of the Car: " . $row["price"] . "$/per dar</p>";
            echo "<a href='?type={$this->data['controllerName']}&action=showbook&id=" . $row['id'] . "' class='btn btn-primary'>See more details</a>";
            echo "</div>";
//            echo $row["id"];
        }
        echo "</div>";


        ?>
        <?php
        echo (new Pagination())
            ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
            ->setPageCount($this->data["pageCount"])
            ->setActivePage($this->data["activePage"])
            ->html();
        ?>

    </div>
    <div class="col">

    </div>
</div>


