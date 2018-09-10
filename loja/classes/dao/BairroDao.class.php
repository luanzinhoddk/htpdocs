<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__. "/../modelo/Bairro.class.php");
require_once(__DIR__. "/../modelo/Cidade.class.php");

class BairroDao {
        
    private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::get();
    }
    
    public function findAll() {
        $sql = "SELECT * FROM tb_bairros LEFT JOIN tb_cidades ON cid_id = bai_cid_id";
        $statement = $this->conexao->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll();
        $bairros = array();
        foreach ($rows as $row) {
            $cidade = new Cidade();
            $cidade->setId($row['cid_id']);
            $cidade->setNome($row['cid_nome']);
            
            $bairro = new Bairro();
            $bairro->setId($row['bai_id']);
            $bairro->setNome($row['bai_nome']);
            $bairro->setCidade($cid);
            array_push($bairros, $bairro);
        }
        return $bairros;
    }

    public function findById($id) {
        $sql = "SELECT * FROM tb_cidades WHERE cid_id=:id";
        $statement = $this->conexao->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch();
        $cidade = new Cidade();
        $cidade->setId($row['cid_']);
        $cidade->setNome($row['cid_nome']);
        return $cidade;
    } 

    public function findByCidade(Cidade $cidade) {
        $sql = "SELECT * FROM tb_bairros LEFT JOIN tb_cidades ON cid_id = bai_cid_id WHERE cid_id=:cid_id";
        $statement = $this->conexao->prepare($sql);
        $id_cid = $cidade->getId();
        $statement->bindParam(':cid_id', $id_cid);
        $statement->execute();
        $rows = $statement->fetchAll();
        $bairros = array();
        foreach ($rows as $row) {
            $cidade = new Cidade();
            $cidade->setId($row['cid_id']);
            $cidade->setNome($row['cid_nome']);
            
            $bairro = new Bairro();
            $bairro->setId($row['bai_id']);
            $bairro->setNome($row['bai_nome']);
            $bairro->setCidade($cidade);
            array_push($bairros, $bairro);
        }
        return $bairros;
    }
}