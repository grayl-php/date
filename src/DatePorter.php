<?php

   namespace Grayl\Date;

   use Grayl\Date\Controller\DateController;
   use Grayl\Date\Service\DateService;
   use Grayl\Mixin\Common\Traits\StaticTrait;

   /**
    * Front-end for the Date package
    *
    * @package Grayl\Date
    */
   class DatePorter
   {

      // Use the static instance trait
      use StaticTrait;

      /**
       * Creates a new DateController from the current UTC time
       *
       * @param ?\DateTime $date A fully configured DateTime instance if we are not using the current date
       *
       * @return DateController
       * @throws \Exception
       */
      public function newDateController ( ?\DateTime $date ): DateController
      {

         // If we are not using a passed DateTime instance, create one for the current time
         if ( empty( $date ) ) {
            $date = new \DateTime( null,
                                   new \DateTimeZone( "UTC" ) );
         }

         // Return a new DateController
         return new DateController( $date,
                                    new DateService() );
      }


      /**
       * Creates a DateController from a string date in Y-m-d H:i:s format
       *
       * @param string $string A string date in Y-m-d H:i:s format
       *
       * @return DateController
       * @throws \Exception
       */
      public function newDateControllerFromString ( string $string ): DateController
      {

         // Create a new DateTime from the string
         $date = \DateTime::createFromFormat( 'Y-m-d H:i:s',
                                              $string,
                                              new \DateTimeZone( "UTC" ) );

         // Return a new DateController
         return $this->newDateController( $date );
      }


      /**
       * Returns a DateInterval object from a standard interval format
       *
       * @param string $interval The DateInterval in standard format (EX: P2Y4DT6H8M)
       *
       * @return \DateInterval
       * @throws \Exception
       */
      public function newDateInterval ( string $interval ): \DateInterval
      {

         // Return a new DateInterval
         return new \DateInterval( $interval );
      }

   }