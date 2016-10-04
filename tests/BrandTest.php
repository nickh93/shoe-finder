<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Brand.php";
    require_once "src/Store.php";

    $server ='mysql:host=localhost:8889;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BrandTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Brand::delteAll();
        //     Store::deleteAll();
        // }

        function testGetName()
        {
        //Arrange
        $name = "Nike";
        $test_brand = new Brand($name);

        //Act
        $result = $test_brand->getName();

        //Assert
        $this->assertEquals($name, $result);
        }

        function testSetName()
        {
        //Arrange
        $name = "Adiddas";
        $test_brand = new Brand($name);
        //Act
        $test_brand->setName("Adiddas");
        $result = $test_brand->getName();

        //Assert
        $this->assertEquals("Adiddas", $result);
        }
        function testGetId()
        {
        //Arrange
        $id = 1;
        $name = "Lacoste";
        $test_brand = new Brand($name, $id);

        //Act
        $result = $test_brand->getId();

        //Assert
        $this->assertEquals(1, $result);
        }
    }

?>
