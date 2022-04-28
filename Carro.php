<?php
    class Car {

        private $brand;
        private $model;
        private $color;
        private $licenseNumber;

        public function __construct($brand, $model, $color, $licenseNumber) {
            $this->brand = $brand;
            $this->model = $model;
            $this->color = $color;
            $this->licenseNumber = $licenseNumber;
	    }

        public function turnOn() {
            echo "Carro ligando...";
        }

        public function turnOff() {
            echo "Carro desligado...";
        }

        public function speedUp() {
            echo "Carro acelerando...";
        }

        public function break() {
            echo "Carro freando...";
        }

        /** 
         * Getters
        */
        
        public function getBrand() {
            return $this->brand;
        }

        public function getModel() {
            return $this->model;
        }

        public function getColor() {
            return $this->model;
        }

        public function getLicenseNumber() {
            return $this->licenseNumber;
        }

        /** 
         * Setters
        */
        
        public function setBrand($newBrand) {
            $this->brand = $newBrand;
        }

        public function setModel($newModel) {
            $this->model = $newModel;
        }

        public function setColor($newColor) {
            $this->color = $newColor;
        }

        public function setLicenseNumber($newLicenseNumber) {
            $this->licenseNumber = $newLicenseNumber;
        }

    }

    $myCar = new Car("fiat", "uno", "vermelho", "BRAOS17");

    echo 'A marca de $myCar é '.$myCar->getBrand().'<br />';

    echo 'Mudando a marca de $myCar...'.$myCar->setBrand("Ferrari").'<br />';

    echo 'A marca de $myCar é '.$myCar->getBrand().'<br />';

    echo $myCar->turnOn();
?>
