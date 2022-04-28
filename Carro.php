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
            return $this->color;
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

    $myCar = new Car("fiat", "uno", "branca", "BRAOS17");

    // Chamar a url com parametros
    //$myCar = new Car($_GET['brand'], $_GET['model'],
    //    $_GET['color'], $_GET['licenseNumber']);

    echo 'A marca de $myCar é '.$myCar->getBrand().'<br />';

    echo 'Mudando a marca de $myCar...'.$myCar->setBrand("Ferrari").'<br />';

    echo 'A marca de $myCar é '.$myCar->getBrand().'<br />';

    echo $myCar->turnOn()."<br />";

    require_once 'conexao.php';

    $connection = connectToCarDatabase();

    // insert a single publisher
    $sqlInsertCar = 'INSERT INTO cars(brand, model, color, licenseNumber)
        VALUES(:brand, :model, :color, :licenseNumber)';

    $insertStatement = $connection->prepare($sqlInsertCar);

    $insertStatement->execute([
        ':brand' => $myCar->getBrand(),
        ':model' => $myCar->getModel(),
        ':color' => $myCar->getColor(),
        'licenseNumber' => $myCar->getLicenseNumber()
    ]);

    $carId = $connection->lastInsertId();

    echo "O carro de id ". $carId . " foi inserido com sucesso"."<br/>";

    echo "<h3>Todos os carros inseridos no banco de dados</h3>";

    $sqlReadAllCars = 'SELECT brand, model, color, licenseNumber FROM cars';

    $readStatement = $connection->query($sqlReadAllCars);

    // get all cars
    $cars = $readStatement->fetchAll(PDO::FETCH_ASSOC);

    if (sizeof($cars) > 0) {
        // show the cars
        foreach ($cars as $car) {
            echo " Marca:". $car['brand'];
            echo " Modelo:". $car['model'];
            echo " Cor:". $car['color'];
            echo " Placa:". $car['licenseNumber']."<br />";
        }
    } else {
        echo "Não há carro no banco de dados";
    }

?>
