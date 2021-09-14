<style>
    .h1 {
        text-align: center;
    }
    #form{
        padding-top: 10%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="/public/images/cars/login.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col" id="form">
            <h1 class="h1">Login to continue</h1>

            <form action="?type=Aut&action=login" method="post">

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="login" id="floatingInput"
                           placeholder="Enter your login">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="pass" id="floatingPassword"
                           placeholder="Enter you password">
                    <label for="floatingPassword">Password</label>
                </div>
                <!--                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Log In">-->
                <br>


                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="Log In">
                </div>

        </div>
    </div>
