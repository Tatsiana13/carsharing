<div class="container">
    <div class="row">
        <div class="col">


            <h2>Car Model: <b><?= $this->data["carData"]["model"] ?></b></h2>
            <h3>Car Price/per day: <b><?= $this->data["carData"]["price"] ?>$</b></h3>
            <h3>Year of the Car: <b><?= $this->data["carData"]["year"] ?></b></h3>
            <p>Car Type: <b><?= $this->data["carData"]["type"] ?></b></p>
            <p>Fuel Consumption: <b><?= $this->data["carData"]["fuel_cons"] ?></b></p>
            <p>Car Fuel: <b><?= $this->data["carData"]["fuel"] ?></b></p>
            <p>Number of seats in the car: <b><?= $this->data["carData"]["seats"] ?></b></p>
            <p>Car with <b><?= $this->data["carData"]["transmission"] ?> transmission</b></p>
            <p>Color of the car: <b><?= $this->data["carData"]["color"] ?></b></p>
            <?= "<img class='w-100' alt='...' src='public/images/cars/" . $this->data["carData"]['id'] . "_" . $this->data["carData"]['picture'] . "'>"; ?>


        </div>
        <div class="col">

            <form action="?type=Newcar&action=book" method="post">
                <input type="hidden" name="car_id" value="<?= $this->data["carData"]["id"] ?>">
                <div class="form-group">
                    <label for="inputDate">Enter the beginning of the car rental:</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDate">Enter the end of the car rental:</label>
                    <input type="date" name="end_date" class="form-control">
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingInput"
                           placeholder="Your name">
                    <label for="floatingInput">Enter your name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="phone" id="floatingInput"
                           placeholder="Your phone number">
                    <label for="floatingInput">Enter your phone number</label>
                </div>
                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="Book">
                </div>
            </form>


        </div>
    </div>
</div>