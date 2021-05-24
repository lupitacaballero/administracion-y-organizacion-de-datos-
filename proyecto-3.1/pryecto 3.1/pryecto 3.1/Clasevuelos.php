<?php
    class Vuelos{

       public $id;
       public $origin;
       public $destination;
       public $duration;

       //Constructor

       public function __construct(string $ids, string $origen, string $destino, string $tiempo)
       {
           $this-> id= $ids;
           $this->origin= $origen;
           $this->destination= $destino;
           $this->duration=$tiempo;
       }
    }

