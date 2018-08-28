<?php

require_once(__DIR__ ."/./Conexao.class.php");
require_once(__DIR__ ."/../modelo/Marca.class.php");

class MarcaDAO {


    public function findAll(){
        
        $sql = "SELECT *
        FROM tb_marcas";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll();
        $marcas = array();
        
        foreach ($rows as $row){
            $marca = new Marca();
            $marca->setId($row['mar_id']);
            $marca->setNome($row['mar_nome']);
            array_push($marcas, $marca);
        }
        return $sexos;
    
    }

    public function findById($id){

        $sql = "SELECT * FROM tb_sexos WHERE sex_id = $id";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        $sexo = new Sexo();
        $sexo->setId($row['sex_id']);
        $sexo->setNome($row['sex_nome']);
        $sexo->setSigla($row['sex_sigla']);
        return $sexo;
    }

    public function save(Sexo $sexo){
        if ($sexo->getId() == null){
            $this->insert($sexo);
        } else {
            $this->update($sexo);
        }
    }
    
    private function insert(Sexo $sexo){
        $sql = "INSERT INTO tb_sexos (sex_nome, sex_sigla)
            VALUES ('{$sexo->getNome()}','{$sexo->getSigla()}')";
        try{    
            Conexao::get()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    private function update(Sexo $sexo){
    $sql = "UPDATE tb_sexos SET sex_nome = '{$sexo->getNome()}', sex_sigla = '{$sexo->getSigla()}' 
    WHERE sex_id ={$sexo->getId()}";

        try{    
            Conexao::get()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        
    public function remove($id){
    $sql = "DELETE FROM tb_sexos WHERE sex_id = $id";
        try{    
            Conexao::get()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
    }
}