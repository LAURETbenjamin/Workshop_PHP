<?php
namespace App\Controller;
class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setlayout("my_Layout");
    }
}
?>