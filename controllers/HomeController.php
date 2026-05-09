<?php

require_once __DIR__ . "/../core/Controller.php";

class HomeController extends Controller {

    public function index() {

        $productModel = $this->model("Product");
        $data["products"] = $productModel->getProducts();

        $this->view("home", $data);
    }
}