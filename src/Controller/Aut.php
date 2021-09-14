<?php


namespace App\Controller;

use App\Helper\Password;
use App\Model\AutModel;

class Aut extends AbstractController
{
    /**
     * @var AutModel
     */
    protected AutModel $model;

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = "users";
        $this->model = new AutModel($config);
    }

    public function actionShow(): void
    {
        $this->view->setTemplate("Aut/login");
//            ->view();
    }

    public function actionShowReg(): void
    {
        $this->view->setTemplate("Aut/registration");
//            ->view();
    }

    public function actionReg(): void
    {
        $ok = true;

        $pass = new Password((string)$_POST['pass1']);

        if ($_POST['name'] == '') {
            /**
             * $_SESSION['warnings'] array<string>
             */
            $_SESSION['warnings'][] = 'The name cannot be empty!';
            $ok = false;
        }

        if ($_POST['pass1'] != $_POST['pass2']) {
            $_SESSION['warnings'][] = 'The passwords are different!';
            $ok = false;
        } elseif (!$pass->checkMinSize()) {
            $_SESSION['warnings'][] = 'Password cannot be fewer than 8 characters!';
            $ok = false;
        } elseif (!$pass->checkMaxSize()) {
            $_SESSION['warnings'][] = 'Password cannot be more than 128 characters!';
            $ok = false;
        } elseif (!$pass->checkLatin()) {
            $_SESSION['warnings'][] = 'The password has to contain latin characters!';
            $ok = false;
        }
        elseif ($pass->checkSpaceSymbol()) {
            $_SESSION['warnings'][] = 'The password must not contain a space!';
            $ok = false;
        } elseif (!$pass->containsNumbers()) {
            $_SESSION['warnings'][] = 'The password has to contain at least one number!';
            $ok = false;
        }

        if ($this->model->checkUserExists($_POST['login'])) {
            $_SESSION['warnings'][] = "User name <b>{$_POST['login']}</b> is occupied!";
            $ok = false;
        } elseif ($_POST['login'] == '') {
            $_SESSION['warnings'][] = "The login cannot be empty!";
            $ok = false;
        }

        if ($ok) {
//            print_r($_POST);
            $config = include __DIR__ . "/../../config.php";
            $this->model->addNewUser($_POST['login'], md5($_POST['pass1'] . $config['salt']), $_POST['name']);
//            $this->model->addNewUser($_POST['login'], $_POST['pass1'], $_POST['name']);
            $this->redirect("?");
        } else {
            $_SESSION['regData'] = $_POST;
            $this->redirect("?type=Aut&action=showreg");
        }

    }

    /**
     * @throws \Exception
     */
    public function actionLogin(): void
    {
        $config = include __DIR__ . "/../../config.php";
        $user = $this->model->checkUser($_POST['login'], md5($_POST['pass'] . $config['salt']));
//        print_r($user);
        if (empty($user)) {
            $this->redirect("?type=Aut&action=show");
        } else {
            $_SESSION['user'] = $user[0];
            $this->redirect("?");
        }

    }

    public function actionLogout(): void
    {
        unset($_SESSION['user']);
        $this->redirect("?type=Aut&action=show");
    }
}