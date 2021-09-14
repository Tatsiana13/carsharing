<style>
    .h1 {
        text-align: center;
    }

    #form {
        padding-top: 10%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="/public/images/cars/login.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col" id="form">
            <h1 class="h1">Register to continue</h1>

            <form action="?type=Aut&action=reg" method="post">

                <div class="form-floating mb-3">
                    <input type="name" class="form-control" name="name" id="floatingInput"
                           placeholder="Enter your name" value="<?= $_SESSION['regData']['name'] ?? '' ?>">
                    <label for="floatingInput">Enter your name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="login" class="form-control" name="login" id="floatingInput"
                           placeholder="Create your login" value="<?= $_SESSION['regData']['login'] ?? '' ?>">
                    <label for="floatingInput">Enter your name</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="pass1" id="floatingPassword"
                           placeholder="Create your password" value="<?= $_SESSION['regData']['pass1'] ?? '' ?>">
                    <label for="floatingPassword">Create your password</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" name="pass2" id="floatingPassword"
                           placeholder="Confirm your password" value="<?= $_SESSION['regData']['pass2'] ?? '' ?>">
                    <label for="floatingPassword">Confirm your password</label>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="Sign In">
                </div>

            </form>
        </div>
    </div>
<?php
unset($_SESSION['regData']);
?>