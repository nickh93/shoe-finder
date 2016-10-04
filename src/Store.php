<?php
    class Store
    {
        private $name;
        private $type;
        private $description;
        private $id

        function __construct($store_name, $store_type, $store_description, $store_id = null)
        {
            $this->name = $store_name;
            $this->type = $store_type;
            $this->description = $store_description;
            $this->id = $store_id;
        }

        function getid()
        {
            return $this->id;
        }
        function setName($name)
        {
            $this->name = (string) $name;
        }
        function getName()
        {
            return $this->name;
        }
        function setType($store_type)
        {
            $this->type = (string) $store_type;
        }
        function getType()
        {
            return $this->type
        }
        function setDescription($store_description)
        {
            $this->description = (string) $store_description
        }
        function getDescription()
        {
            return $this->description
        }
        
    }

?>
