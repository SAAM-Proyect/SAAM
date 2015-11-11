<?php
class Database extends PDO{
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    //                   Método para asignar variables al PDO                          //
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
    }
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    //                          Métodos para las tablas                                //
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    /**
     * @param $ProcedureName El nombre del procedimiento almacenado que vamos a ejecutar
     * @param $data Los valores que le pasaremos como parámetros al procedimiento almacenado
     * @return bool
     */
    public function procedure_IUD($ProcedureName, $data){
        ksort($data);
        $fieldValues = "'".implode("', '", array_values($data))."'";
        $sth = $this->prepare("CALL  $ProcedureName($fieldValues)");
        foreach ($data as $key => $value){
            $sth->bindValue("$key", $value);
        }
        return $sth->execute();
    }

    /**
     * @param $ProcedureName
     * @param $data
     * @param array $array
     * @param int $fetchMode
     * @return mixed
     * @internal param $ProcedureNameASZ
     */
    public function procedure_S($ProcedureName, $data, $array=array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $fieldValues = "'" . implode("', '", array_values($data)) . "'";
        //echo print_r($fieldValues);
        $sth = $this->prepare("CALL  $ProcedureName($fieldValues)");
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    /**
     * @param $ProcedureName
     * @param array $array
     * @param int $fetchMode
     * @return array
     */
    public function procedure_All($ProcedureName, $array=array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare("SELECT * FROM $ProcedureName");
        foreach ($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * @param $ViewName
     * @param array $array
     * @param int $fetchMode
     * @return array
     */
    public function Views_All($ViewName, $array=array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare("SELECT * FROM $ViewName");
        foreach ($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    /**
     * Sólo para selección por niockname
     * @param $ProcedureName Nombre del procedimiento almacenado
     * @param $nickname Nickname del login
     * @param array $array
     * @param int $fetchMode
     * @return mixed
     */
    /*public function procedure_LoginD($ProcedureName, $nickname, $array=array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare("CALL  $ProcedureName('$nickname')");
        foreach ($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }*/
    /**
     * Sólo para selección por ID
     * @param $ProcedureName
     * @param $id
     * @param array $array
     * @param int $fetchMode
     * @return array
     */
    /*public function procedure_Users($ProcedureName, $id, $array=array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare("CALL  $ProcedureName($id)");
        foreach ($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }*/
    /**
     * 
     * @param String $sql La consulta
     * @param Array $array Parámetros para hacer el Bind
     * @param Int $fetchMode El fetch mode de PDO
     * @return mixed
     */
    public function select($sql, $array=array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     *
     * @param String $table
     * @param Array $data Arreglo de strings asociativo
     * @return bool
     */
    public function insert($table, $data){
        ksort($data);
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':'.implode(', :', array_keys($data));
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }

    /**
     *
     * @param String $table Nombre de la tabla
     * @param Array $data El arreglo de los datos o los strings asociativos
     * @param String $where La condición de nuestra consulta
     * @return bool
     */
    public function update($table, $data, $where)
    {
        ksort($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $values) {
            $fieldDetails .= "$key=:$key,";
        }
        // rtrim nos separa el string como el split
        $fieldDetails = rtrim($fieldDetails, ',');
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }

    /**
     *
     * @param String $tabla Nombre de la tabla
     * @param String $where Nuestra condición WHERE
     * @param int|String $limit Es el límite para evitar sentencias maliciosas
     * @return mixed
     */
    public function delete($tabla, $where, $limit=1){
        return $this->exec("DELETE FROM $tabla WHERE $where LIMIT $limit");
    }
}