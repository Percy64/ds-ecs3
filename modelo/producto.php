<?php
 class producto{

    public $id;
    public $nombre;
    public $precio;
    public $stock;
    public $tipoproducto;
   
    
    public  function mostrardatos()
    {
        echo 'tipo de producto<br>';
        echo 'id'. $this->tipoproducto->id.'<br>';
        echo 'Descripción'. $this->tipoproducto->desc.'<br>';

        echo 'id'.$this->id.'<br>';
        echo 'nombre'.$this->nombre.'<br>';
        echo 'precio'.$this->precio.'<br>';
        echo 'stock'.$this->stock.'<br>';
        

    }

 }