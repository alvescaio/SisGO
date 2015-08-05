<?php

class Oculos_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function insert($dados)
    {
        $this->db->insert('oculos', $dados);
    }

}
