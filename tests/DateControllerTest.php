<?php

   namespace Grayl\Test\Date;

   use Grayl\Date\Controller\DateController;
   use Grayl\Date\DatePorter;
   use PHPUnit\Framework\TestCase;

   /**
    * Test class for the Date package
    *
    * @package Grayl\Date
    */
   class DateControllerTest extends TestCase
   {

      /**
       * Tests the creation of a valid DateController object
       *
       * @return DateController
       * @throws \Exception
       */
      public function testCreateDateController (): DateController
      {

         // Create a date controller entity
         $date = DatePorter::getInstance()
                           ->newDateController( null );

         // Check the type of object created
         $this->assertInstanceOf( DateController::class,
                                  $date );

         // Return it
         return $date;
      }


      /**
       * Tests the data in a DateController
       *
       * @param DateController $date A DateController to test
       *
       * @depends testCreateDateController
       */
      public function testDateData ( DateController $date ): void
      {

         // Test the data
         $this->assertNotEmpty( $date->getDateAsString() );
         $this->assertIsString( $date->getDateAsString() );
      }


      /**
       * Tests the creation of a valid DateController object from a string date
       *
       * @return DateController
       * @throws \Exception
       */
      public function testCreateDateControllerFromString (): DateController
      {

         // Create a date controller entity from a string date
         $date = DatePorter::getInstance()
                           ->newDateControllerFromString( '2018-10-01 01:01:01' );

         // Check the type of object created
         $this->assertInstanceOf( DateController::class,
                                  $date );

         // Return it
         return $date;
      }


      /**
       * Tests the data in a DateController created from a string date
       *
       * @param DateController $date A DateController to test
       *
       * @depends testCreateDateControllerFromString
       */
      public function testDateDataFromString ( DateController $date ): void
      {

         // Test the data
         $this->assertNotEmpty( $date->getDateAsString() );
         $this->assertIsString( $date->getDateAsString() );
         $this->assertEquals( '2018-10-01 01:01:01',
                              $date->getDateAsString() );
      }

   }
