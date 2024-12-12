<?php


/*
    Polymorphism 
*/


interface DBConnects
{
    public function getUsers();
    public function getArticles();
    public function showStats();
}
class MySql implements DBConnects
{
    public $name;
    public function getUsers()
    {
        echo "SELECT * FROM users";
    }
    public function getArticles()
    {
        echo "SELECT * FROM articles";
    }
    public function showStats()
    {
        echo "SELECT * FROM stats";
    }
}
class Oracle implements DBConnects
{
    public $name;
    public function getUsers()
    {
        echo "Hello FROM users";
    }
    public function getArticles()
    {
        echo "Hello FROM articles";
    }
    public function showStats()
    {
        echo "Hello FROM stats";
    }
}


$row = new Oracle();

$row->getUsers();
$row->getArticles();
$row->showStats();


echo '<pre>';
print_r($row);
echo '</pre>';
