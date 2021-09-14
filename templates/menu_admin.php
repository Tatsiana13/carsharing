<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>"
                   href="?">Main
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Car" ? " active" : "" ?>"
                   href="?type=car&action=show">Cars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Booking" ? " active" : "" ?>"
                   href="?type=booking&action=show">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
                   href="?type=Users&action=show">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
                   href="?type=UserGroups&action=show">UserGroups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?type=Aut&action=logout">Log Out
                    (<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] . ')' : "" ?>
                </a>
            </li>
        </ul>
    </div>
</nav>



