<?php
    class Usuario_model extends Model{
        function __construct() {
            parent::__construct();
        }
        function signUp($data){
            return $this->db->insert('usuarios', $data);
        }
        function SignIn($data){
            //return $this->db->select($fields,'usuarios',$where);
            return $this->db->select("SELECT * FROM Usuario WHERE Alias = :alias", $data);
        }
        /*function getUser($id){
            return $this->db->select("SELECT * FROM Users WHERE id_Users = :id", array(":id"=>$id));
        }*/
        function update($id, $data){
            print ($this->db->update("usuarios", $data, "id =".$id));
        }
        function getUser($data){
            return $this->db->procedure_S("procedure_UsersByID", $data);
        }
        function _callProcedureSelect($data){
            return $this->db->procedure_S("procedure_Login", $data);
        }
        function _callProcedureIUD($ProcedureName, $data){
            return $this->db->procedure_IUD($ProcedureName, $data);
        }
    }