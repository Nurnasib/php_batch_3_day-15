<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'password-reset')
    {
        include 'pages/password-reset.php';
    }
    elseif ($_GET['pages'] == 'blog')
    {
        $blog  = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProducts();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'describe')
    {
        if (isset($_GET['id']))
        {
            $product = new Product();
            $products = $product->getAllProducts();
            include 'pages/description.php';
        }
    }
}
elseif (isset($_POST['btn']))
{
    $passGen = new PasswordGenerator($_POST);
    $result = $passGen->newPassword();
    include 'pages/password-reset.php';
}
else
{
    $home = new Home();
    $home->index();
}