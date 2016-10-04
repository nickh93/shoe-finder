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

    class StoreTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Brand::delteAll();
        //     Store::deleteAll();
        // }

        function testGetName()
        {
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);

            //Act
            $result = $test_store->getName();

            //Assert
            $this->assertEquals($name, $result);
        }
        function testSetName()
        {
            //Arrange
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);
            //Act
            $test_store->setName("Philly Shoe Trade Comp.");
            $result = $test_store->getName();

            //Assert
            $this->assertEquals("Philly Shoe Trade Comp.", $result);
        }
        function testGetType()
        {
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);

            //Act
            $result = $test_store->getType();

            //Assert
            $this->assertEquals($type, $result);
        }
        function testSetType()
        {
            //Arrange
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);
            //Act
            $test_store->setType("Sneakers");
            $result = $test_store->getType();

            //Assert
            $this->assertEquals("Sneakers", $result);
        }
        function testGetDescription()
        {
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);

            //Act
            $result = $test_store->getDescription();

            //Assert
            $this->assertEquals($description, $result);
        }
        function testSetDescription()
        {
            //Arrange
            $name = "Philly Shoe Trade Comp.";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description);
            //Act
            $test_store->setDescription("A store designed for Jordan sneaker lovers");
            $result = $test_store->getDescription();

            //Assert
            $this->assertEquals("A store designed for Jordan sneaker lovers", $result);
        }
        function testGetId()
        {
            //Arrange
            $id = 1;
            $name = "SanFran Shoes";
            $type = "Sneakers";
            $description = "A store designed for Jordan sneaker lovers";
            $test_store = new Store($name, $type, $description, $id);

            //Act
            $result = $test_store->getId();

            //Assert
            $this->assertEquals(1, $result);
        }
    }


?>
