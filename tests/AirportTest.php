<?php

if (!class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Verifies if the task entity accepts property values that meet the form
 * validation rules, and rejects ones that don't.
 */
class AirportTest extends PHPUnit_Framework_TestCase {

    private $airport;

    /**
     * Sets up a task to test with.
     */
    public function setUp() {
        $this->airport = new Airport();
    }

    public function testIdValidAlpha() {
        $id = 'PHP';

        $this->airport->id = $id;
        $this->assertEquals($id, $this->airport->getId());
    }

    public function testIdNotValidAlpha() {
        $id = 'php7.1';

        $this->airport->id = $id;
        $this->assertNotEquals($id, $this->airport->getId());
    }

    public function testIdNotValidLength() {
        $id = 'phpunit';

        $this->airport->id = $id;
        $this->assertNotEquals($id, $this->airport->getId());
    }

    public function testIdNotValidAlphaLength() {
        $id = 'p2p';

        $this->airport->id = $id;
        $this->assertNotEquals($id, $this->airport->getId());
    }


    public function testCommunityValidAlphaNumericSpaces() {
        $community = 'Beechcraft Sunshine 7';

        $this->airport->community = $community;
        $this->assertEquals($community, $this->airport->getCommunity());
    }

    public function testCommunityValidLength() {
        $community = 'Length does not exceed 64';

        $this->airport->community = $community;
        $this->assertEquals($community, $this->airport->getCommunity());
    }


    public function testAirportValidAlphaNumericSpaces() {
        $airport = 'Vancouver International Airport 2017';

        $this->airport->airport = $airport;
        $this->assertEquals($airport, $this->airport->getAirport());
    }

    public function testAirportNotValidLength() {
        $airport = 'abcde123456789012345678901234567890123456789012345678901234567890';

        $this->airport->airport = $airport;
        $this->assertNotEquals($airport, $this->airport->getAirport());
    }

    public function testAirportNotValidAlphaNumericSpaces() {
        $name = 'Rich Airport $$$';

        $this->airport->name = $name;
        $this->assertNotEquals($name, $this->airport->getAirport());
    }


    public function testRegionNotValidInteger() {
        $region = '489.99';

        $this->airport->region = $region;
        $this->assertNotEquals($region, $this->airport->getRegion());
    }

    public function testRegionNotValidSize() {
        $region = 100;

        $this->airport->region = $region;
        $this->assertNotEquals($region, $this->airport->getRegion());
    }


    public function testCoordinatesNotValidAlphaNumeric() {
        $coordinates = '49\u00b020\u203214\u2033N124\u00b023\u203238\u2033W';

        $this->airport->coordinates = $coordinates;
        $this->assertNotEquals($coordinates, $this->airport->getCoordinates());
    }

    public function testCoordinatesNotValidLength() {
        $coordinates = '01234567890123456789012345678901234567890123456789012345678901234';

        $this->airport->coordinates = $coordinates;
        $this->assertNotEquals($coordinates, $this->airport->getCoordinates());
    }


    public function testRunwayNotValidInteger() {
        $runway = 890.9;

        $this->airport->runway = $runway;
        $this->assertNotEquals($runway, $this->airport->getRunway());
    }

    public function testRunwayNotValidSize() {
        $runway = 10000;

        $this->airport->runway = $runway;
        $this->assertNotEquals($runway, $this->airport->getRunway());
    }


    public function testAirlineNotValidAlpha() {
        $airline = 'ac064';

        $this->airport->airline = $airline;
        $this->assertNotEquals($airline, $this->airport->getAirline());
    }

    public function testAirlineNotValidLength() {
        $airline = 'abcdefghijabcdefghijabcdefghijabcdefghijabcdefghijabcdefghijabcde';

        $this->airport->airline = $airline;
        $this->assertNotEquals($airline, $this->airport->getAirline());
    }


    public function testTypeNotValidAlpha() {
        $type = 'bas3';

        $this->airport->type = $type;
        $this->assertNotEquals($type, $this->airport->getType());
    }

    public function testTypeNotValidLength() {
        $type = 'basee';

        $this->airport->type = $type;
        $this->assertNotEquals($type, $this->airport->getType());
    }
}