<style>
    .bg {
        background: url('/public/images/city/travel1.jpg') no-repeat center center;
        height: 800px;
        width: 100%;
        color: white;
        text-align: center;
        padding-top: 4%;
    }
    .a{
        font-size: 40px;
        color: #a7cade;
    }
</style>
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-10">
                <h2>Please read useful tips before contact with our customers😉</h2>
                <h4>The link below👇🏻</h4>
                <a href="https://www.nicereply.com/blog/customer-service-phrases/" target="_blank" class="a">Click here🖱️</a>
                <?php

                use W1020\HTML\Pagination;
                use W1020\HTML\Table;

                unset($this->data["comments"]["edit"]);
                unset($this->data["comments"]["del"]);
                //$this->data["comments"]["book"] = "Book the Car";
                echo (new Table())
                    ->setData($this->data["table"])
                    ->setHeaders($this->data["comments"])
                    ->setClass("table table-hover")
                    ->html(); ?>
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
    </div>
