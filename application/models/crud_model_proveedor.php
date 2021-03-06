<?php 
 	class Crud_model_proveedor extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_proveedores()
    {
        $sql = $this->db->get('cat_proveedor');
        return $sql->result();
    }
    //agregamos un usuario
    public function agregar_proveedor($data) {
        $this->db->insert('cat_proveedor', $data);
        return $this->db->insert_id();

    }
    //actualizamos los datos de un usuario por id
    public function actualizar_proveedor($id_proveedor, $data){
        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->update('cat_proveedor', $data);
    }
    //eliminamos un usuario por id
    public function eliminar_proveedor($id_proveedor)
    {
        $this->db->delete('cat_proveedor', array('id_proveedor' => $id_proveedor));
    }
    //Obtenemos los datos de un usuario por id
    public function get_proveedor($id_proveedor)
    {
        $sql = $this->db->get_where('cat_proveedor',array('id_proveedor'=>$id_proveedor));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }
}

?>