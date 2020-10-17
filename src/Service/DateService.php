<?php

   namespace Grayl\Date\Service;

   /**
    * Class DateService
    * The service for working with DateTime entities
    *
    * @package Grayl\Date
    */
   class DateService
   {

      /**
       * Gets the date as a string (Y-m-d H:i:s) from a DateTime entity (UTC time)
       *
       * @param \DateTime $date The DateTime entity to get as a string
       *
       * @return string
       */
      public function getDateTimeAsString ( \DateTime $date ): string
      {

         // Return the formatted date
         return $date->format( 'Y-m-d H:i:s' );
      }


      /**
       * Subtracts a DateInterval period from a DateTime entity
       *
       * @param \DateTime     $date     The DateTime entity to subtract from
       * @param \DateInterval $interval The DateInterval in standard format
       */
      public function subtractDateIntervalFromDateTime ( \DateTime $date,
                                                         \DateInterval $interval ): void
      {

         // Subtract the DateInterval from the date
         $date->sub( $interval );
      }


      /**
       * Adds a DateInterval period onto a DateTime entity
       *
       * @param \DateTime     $date     The DateTime entity to add to
       * @param \DateInterval $interval The DateInterval in standard format
       */
      public function addDateIntervalToDateTime ( \DateTime $date,
                                                  \DateInterval $interval ): void
      {

         // Add the DateInterval to the date
         $date->add( $interval );
      }

   }