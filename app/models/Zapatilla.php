<?php

/**
 * Description of Zapatilla
 *
 * @author oscar
 */

class Zapatilla {
    
    private $idZapatilla;
    private $marca;
    private $talla;
    private $color;
    private $descripcion;
    private $foto;
    
    public function __construct() {
        
    }
    
    public function getIdZapatilla() {
        return $this->idZapatilla;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getTalla() {
        return $this->talla;
    }
   
    public function getColor() {
        return $this->color;
    }
    
    public  function getDescripcion() {
        return $this->descripcion;
    }

    public  function getFoto() {
        return $this->foto;
    }
    public function setIdZapatilla($idZapatilla) {
        $this->idZapatilla = $idZapatilla;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTalla($talla) {
        $this->talla = $talla;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    function setFoto($foto) {
        $this->foto = $foto;
    }
    
    function zapatilla2HTML() {
        $result = '<div class=" col-md-4 ">';
         $result .= '<div class="card ">';
          $result .= ' <img class="card-img-top rounded mx-auto d-block avatar" src='.$this->getFoto().' alt="Card image cap">';
            $result .= '<div class="card-block">';
                $result .= '<h2 class="card-title">' . $this->getMarca() . '</h2>';
                $result .= '<p class=" card-text description">'.$this->getTalla().'<br>'.$this->getColor().'<br>'.$this->getDescripcion().'</p>';                    
             $result .= '</div>';
             $result .= ' <div  class=" btn-group card-footer" role="group">';
                $result .= '<a type="button" class="btn btn-secondary" href="app/views/detail.php?id='.$this->getIdZapatilla().'">Detalles</a>';
                $result .= '<a type="button" class="btn btn-success" href="app/views/edit.php?id='.$this->getIdZapatilla().'">Modificar</a> ';
                $result .= '<a type="button" class="btn btn-danger" href="app/controllers/deleteController.php?id='.$this->getIdZapatilla().'">Borrar</a> ';
            $result .= ' </div>';
         $result .= '</div>';
     $result .= '</div>';
        
        
        return $result;
    }

    
    
}
