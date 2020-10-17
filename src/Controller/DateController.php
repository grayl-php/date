<?php

   namespace Grayl\Date\Controller;

   use Grayl\Date\Service\DateService;

   /**
    * Class DateController
    * The controller for working with DateData entities
    *
    * @package Grayl\Date
    */
   class DateController
   {

      /**
       * A configured DateTime entity
       *
       * @var \DateTime
       */
      private \DateTime $date;

      /**
       * The DateService instance to interact with
       *
       * @var DateService
       */
      private DateService $date_service;


      /**
       * The class constructor
       *
       * @param \DateTime   $date         A configured DateTime entity to work with
       * @param DateService $date_service The DateService instance to use
       */
      public function __construct ( \DateTime $date,
                                    DateService $date_service )
      {

         // Set the date
         $this->date = $date;

         // Set the service entity
         $this->date_service = $date_service;
      }


      /**
       * Gets the date as a string (Y-m-d H:i:s) from a DateTime entity (UTC time)
       *
       * @return string
       */
      public function getDateAsString (): string
      {

         // Return the date as a string using the service
         return $this->date_service->getDateTimeAsString( $this->date );
      }


      /**
       * Subtracts a DateInterval period from a DateTime entity
       *
       * @param \DateInterval $interval The DateInterval in standard format
       */
      public function subtractDateIntervalFromDateTime ( \DateInterval $interval ): void
      {

         // Use the service to reduce the date
         $this->date_service->subtractDateIntervalFromDateTime( $this->date,
                                                                $interval );
      }


      /**
       * Adds a DateInterval period onto a DateTime entity
       *
       * @param \DateInterval $interval The DateInterval in standard format
       */
      public function addDateIntervalToDateTime ( \DateInterval $interval ): void
      {

         // Use the service to add to the date
         $this->date_service->addDateIntervalToDateTime( $this->date,
                                                         $interval );
      }

   }