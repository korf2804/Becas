<?php

class Articulos_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    //genera un listado de articulos
    function lista_articulos() {

        $this->db->order_by('SB_FechaArticulo', 'desc');
        $this->db->limit(2);
        $consulta = $this->db->get('sb_articulos');
        
        return $consulta;
    }

    //Muestra detalle de un articulo por nombre
    function detalle_articulo($url_articulo) {
        $this->db->where('SB_UrlArticulo', $url_articulo);
        $consulta = $this->db->get('sb_articulos');
        return $consulta->row();
    }
    
    function categoria_noticia($categoria){
        $this->db->where('categoria',$categoria);
        $consulta = $this->db->get('sb_categorias');
        return $consulta->row();
    }

}
