<?php

if (!class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Verifies if the task entity accepts property values that meet the form
 * validation rules, and rejects ones that don't.
 */
class AirplaneTest extends PHPUnit_Framework_TestCase {

    private $airplane;

    /**
     * Sets up a task to test with.
     */
    public function setUp() {
        $this->airplane = new Airplane();
    }

    public function testIdValidAlphaNumeric() {
        $id = 'hellothere93';

        $this->airplane->id = $id;
        $this->assertEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidAlpha() {
        $id = 'HelloThere';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }

    public function testIdValidNumeric() {
        $id = '1993';

        $this->airplane->id = $id;
        $this->assertEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidLength() {
        $id = '12345678901234567890123456789012345678901234567890123456789012345';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidAlphaNumeric() {
        $id = 'HelloThere!';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }


    public function testManufacturerValidAlphaNumericSpaces() {
        $manufacturer = 'Beechcraft 99';

        $this->airplane->manufacturer = $manufacturer;
        $this->assertEquals($manufacturer, $this->airplane->getManufacturer());
    }

    public function testManufacturerValidLength() {
        $manufacturer = 'Length does not exceed 64';

        $this->airplane->manufacturer = $manufacturer;
        $this->assertEquals($manufacturer, $this->airplane->getManufacturer());
    }


    public function testModelValidAlphaNumericSpaces() {
        $model = 'King Air C90';

        $this->airplane->model = $model;
        $this->assertEquals($model, $this->airplane->getModel());
    }

    public function testModelNotValidLength() {
        $model = '12345678901234567890123456789012345678901234567890123456789012345';

        $this->airplane->model = $model;
        $this->assertNotEquals($model, $this->airplane->getModel());
    }

    public function testModelNotValidAlphaNumericSpaces() {
        $model = 'Rich Air $$$';

        $this->airplane->model = $model;
        $this->assertNotEquals($model, $this->airplane->getModel());
    }


    public function testPriceNotValidInteger() {
        $price = '489.99';

        $this->airplane->price = $price;
        $this->assertNotEquals($price, $this->airplane->getPrice());
    }

    public function testPriceNotValidSize() {
        $price = 100000;

        $this->airplane->price = $price;
        $this->assertNotEquals($price, $this->airplane->getPrice());
    }


    public function testSeatsNotValidInteger() {
        $seats = 59.5;

        $this->airplane->seats = $seats;
        $this->assertNotEquals($seats, $this->airplane->getSeats());
    }

    public function testSeatsNotValidSize() {
        $seats = -1;

        $this->airplane->seats = $seats;
        $this->assertNotEquals($seats, $this->airplane->getSeats());
    }


    public function testReachNotValidInteger() {
        $reach = 890.9;

        $this->airplane->reach = $reach;
        $this->assertNotEquals($reach, $this->airplane->getReach());
    }

    public function testReachNotValidSize() {
        $reach = 10000;

        $this->airplane->reach = $reach;
        $this->assertNotEquals($reach, $this->airplane->getReach());
    }


    public function testCruiseNotValidInteger() {
        $cruise = 890.9;

        $this->airplane->cruise = $cruise;
        $this->assertNotEquals($cruise, $this->airplane->getCruise());
    }

    public function testCruiseNotValidSize() {
        $cruise = 10000;

        $this->airplane->cruise = $cruise;
        $this->assertNotEquals($cruise, $this->airplane->getCruise());
    }


    public function testTakeoffNotValidInteger() {
        $takeoff = 1.1;

        $this->airplane->takeoff = $takeoff;
        $this->assertNotEquals($takeoff, $this->airplane->getTakeoff());
    }

    public function testTakeoffNotValidSize() {
        $takeoff = 10000;

        $this->airplane->takeoff = $takeoff;
        $this->assertNotEquals($takeoff, $this->airplane->getTakeoff());
    }

<?php

if (!class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Verifies if the task entity accepts property values that meet the form
 * validation rules, and rejects ones that don't.
 */
class AirplaneTest extends PHPUnit_Framework_TestCase {

    private $airplane;

    /**
     * Sets up a task to test with.
     */
    public function setUp() {
        $this->airplane = new Airplane();
    }

    public function testIdValidAlphaNumeric() {
        $id = 'hellothere93';

        $this->airplane->id = $id;
        $this->assertEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidAlpha() {
        $id = 'HelloThere';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }

    public function testIdValidNumeric() {
        $id = '1993';

        $this->airplane->id = $id;
        $this->assertEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidLength() {
        $id = '12345678901234567890123456789012345678901234567890123456789012345';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }

    public function testIdNotValidAlphaNumeric() {
        $id = 'HelloThere!';

        $this->airplane->id = $id;
        $this->assertNotEquals($id, $this->airplane->getId());
    }


    public function testManufacturerValidAlphaNumericSpaces() {
        $manufacturer = 'Beechcraft 99';

        $this->airplane->manufacturer = $manufacturer;
        $this->assertEquals($manufacturer, $this->airplane->getManufacturer());
    }

    public function testManufacturerValidLength() {
        $manufacturer = 'Length does not exceed 64';

        $this->airplane->manufacturer = $manufacturer;
        $this->assertEquals($manufacturer, $this->airplane->getManufacturer());
    }


    public function testModelValidAlphaNumericSpaces() {
        $model = 'King Air C90';

        $this->airplane->model = $model;
        $this->assertEquals($model, $this->airplane->getModel());
    }

    public function testModelNotValidLength() {
        $model = '12345678901234567890123456789012345678901234567890123456789012345';

        $this->airplane->model = $model;
        $this->assertNotEquals($model, $this->airplane->getModel());
    }

    public function testModelNotValidAlphaNumericSpaces() {
        $model = 'Rich Air $$$';

        $this->airplane->model = $model;
        $this->assertNotEquals($model, $this->airplane->getModel());
    }


    public function testPriceNotValidInteger() {
        $price = '489.99';

        $this->airplane->price = $price;
        $this->assertNotEquals($price, $this->airplane->getPrice());
    }

    public function testPriceNotValidSize() {
        $price = 100000;

        $this->airplane->price = $price;
        $this->assertNotEquals($price, $this->airplane->getPrice());
    }


    public function testSeatsNotValidInteger() {
        $seats = 59.5;

        $this->airplane->seats = $seats;
        $this->assertNotEquals($seats, $this->airplane->getSeats());
    }

    public function testSeatsNotValidSize() {
        $seats = -1;

        $this->airplane->seats = $seats;
        $this->assertNotEquals($seats, $this->airplane->getSeats());
    }


    public function testReachNotValidInteger() {
        $reach = 890.9;

        $this->airplane->reach = $reach;
        $this->assertNotEquals($reach, $this->airplane->getReach());
    }

    public function testReachNotValidSize() {
        $reach = 10000;

        $this->airplane->reach = $reach;
        $this->assertNotEquals($reach, $this->airplane->getReach());
    }


    public function testCruiseNotValidInteger() {
        $cruise = 890.9;

        $this->airplane->cruise = $cruise;
        $this->assertNotEquals($cruise, $this->airplane->getCruise());
    }

    public function testCruiseNotValidSize() {
        $cruise = 10000;

        $this->airplane->cruise = $cruise;
        $this->assertNotEquals($cruise, $this->airplane->getCruise());
    }


    public function testTakeoffNotValidInteger() {
        $takeoff = 1.1;

        $this->airplane->takeoff = $takeoff;
        $this->assertNotEquals($takeoff, $this->airplane->getTakeoff());
    }

    public function testTakeoffNotValidSize() {
        $takeoff = 10000;

        $this->airplane->takeoff = $takeoff;
        $this->assertNotEquals($takeoff, $this->airplane->getTakeoff());
    }


    public function testHourlyNotValidInteger() {
        $hourly = 6.00001;

        $this->airplane->hourly = $hourly;
        $this->assertNotEquals($hourly, $this->airplane->getHourly());
    }

    public function testHourlyNotValidSize() {
        $hourly = -1;

        $this->airplane->hourly = $hourly;
        $this->assertNotEquals($hourly, $this->airplane->getHourly());
    }
}
    public function testHourlyNotValidInteger() {
        $hourly = 6.00001;

        $this->airplane->hourly = $hourly;
        $this->assertNotEquals($hourly, $this->airplane->getHourly());
    }

    public function testHourlyNotValidSize() {
        $hourly = -1;

        $this->airplane->hourly = $hourly;
        $this->assertNotEquals($hourly, $this->airplane->getHourly());
    }
}