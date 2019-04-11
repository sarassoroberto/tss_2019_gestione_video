<?php

class AutoreDao
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    public function create(Autore $autore)
    { }

    public function read($id_autore = 0)
    {
        //echo "passo id:  " . $id_autore . "<br>";
        //var_dump(boolval(!$id_autore));
        try {
            if (!$id_autore) {
                //echo "<br>01 get all";
                $stm = $this->pdo->prepare("SELECT * FROM autore");

                //echo $stm->queryString;

                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_CLASS, 'Autore');
            } else {

                //echo "<br>02 get one";
                $stm = $this->pdo->prepare("SELECT * FROM autore where id_autore=:id_autore");
                $stm->bindParam(':id_autore', $id_autore, PDO::PARAM_INT);

                //echo $stm->queryString;

                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_CLASS, 'Autore')[0];
            }
        } catch (PDOException $e) { }
    }
    public function update(Autore $autore)
    {

        $sql = "UPDATE autore SET ";

        $ref = new ReflectionClass($autore);
        $properties = $ref->getProperties();

        //print_r($properties);
        foreach ($properties as $proprieta) {
            $property_name  =  $proprieta->getName();
            $sql .= "$property_name =  :$property_name,";
        }


        $sql = rtrim($sql, ',');

        $sql .= " where id_autore = :id_autore;";

        $stm = $this->pdo->prepare($sql);

        // $stm->bindParam(':nome',$autore->nome);
        foreach ($properties as $proprieta) {
            $property_name  =  $proprieta->getName();
            $stm->bindParam(':' . $property_name, $autore->$property_name);
        }

        $stm->execute();
    }
    public function delete($id_autore)
    {
        $stm = $this->pdo->prepare("DELETE from autore where id_autore=:id_autore;");
        $stm->bindParam(':id_autore', $id_autore, PDO::PARAM_INT);
        $stm->execute();
        return $stm->rowCount();
    }
}
