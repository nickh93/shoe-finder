<?php
    class Brand
    {
        private $name;
        private $id;

        function __construct($brand_name, $brand_id = null)
        {
            $this->name = $brand_name;
            $this->id = $brand_id;
        }

        function getId()
        {
            return $this->id;
        }
        function getName()
        {
            return $this->name;
        }
        function setName($brand_name)
        {
            $this->name = $brand_name;
        }


    }
?>
