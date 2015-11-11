<?php
class Faqs_model extends Model{
    function __construct(){
        parent:: __construct();
    }
    function all_faqs(){
       return $this->db->Views_All('todos_FAQs');
    }
    function Crear_Faq($data){
        return $this->db->procedure_S('insertar_faqs',$data);
    }
}