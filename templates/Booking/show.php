<style>
    .body {
        background: url('/public/images/cars/16678.jpg') no-repeat center center;
        height: 800px;
    }

    a {
        text-decoration: none;
    }
</style>
<div class="body">
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-10">
                <?php

                use W1020\HTML\Pagination;
                use W1020\HTML\Table;


                echo (new Table())
                    ->setData($this->data["table"])
                    ->setHeaders($this->data["comments"])
                    ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>🗑️</a>")
                    ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>🖊️</a>")
                    ->setClass("table table table-dark")
                    ->html();
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
    </div>
