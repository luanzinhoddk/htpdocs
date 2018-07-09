<?php

    class Lampada {

        private $estado;
        private $potencia;

        function __construct($estado=false, $potencia=0) {
            $this->estado = $estado;
            $this->setPotencia ($potencia);
        }

        function setPotencia($potencia) {
            if($potencia >= 0){
                $this->potencia = $potencia;
            } else {
                $this->potencia = 0;
            }
        }

        function getPotencia() {
            return $this->potencia;
        }

        function getEstado() {
            return $this->estado;
        }

        function liga() {
            $this->estado = true;
        }

        function desliga() {
            $this->estado = false;
        }

        function __toString() {
            
            return "Lampada{
                potencia={$this->potencia},
                estado={$this->estado}
            }";

        }

    }