<?php

namespace KrisnaBeaute\BelajarPhpMvc\Controller;

use KrisnaBeaute\BelajarPhpMvc\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belanja Skincare",
            "content" => "Selamat berbelanja skincare Krisna Beaute"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Achmad Choirur Roziqin";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message"=>"Login Sukses"
        ];
        // Kirimkan response ke view
    }
}