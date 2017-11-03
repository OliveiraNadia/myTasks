<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    function cadastrarTarefa() {

        $data['nomeTarefa'] = $this->input->post('nomeTarefa');
        $data['tituloTarefa'] = $this->input->post('tituloTarefa');
        $data['dataInicialTarefa'] = $this->input->post('dataInicialTarefa');
        $data['dataFinalTarefa'] = $this->input->post('dataFinalTarefa');
        $data['descricaoTarefa'] = $this->input->post('descricaoTarefa');
        // $data['anexosTarefa'] = $this->input->post('anexosTarefa');


        return $this->db->insert('tb_tarefas', $data);
    }

    public function salvarTarefa() {

        $this->db->select('*');
        return $this->db->get('tb_status')->result();

        $id = $this->input->post('idTarefa');

        $data['statusTarefa'] = $this->input->post('statusTarefa');

        $this->db->where('idTarefa', $id);

        return $this->db->update('tb_status', $data);
    }

    public function excluir($id = null) {

        $this->db->where('idTarefa', $id);
        return $this->db->delete('tb_tarefas');
    }

    public function salvarAtualizacao() {


        $id = $this->input->post('idTarefa');

        $data['nomeTarefa'] = $this->input->post('nomeTarefa');
        $data['tituloTarefa'] = $this->input->post('tituloTarefa');
        $data['dataInicialTarefa'] = $this->input->post('dataInicialTarefa');
        $data['dataFinalTarefa'] = $this->input->post('dataFinalTarefa');
        $data['descricaoTarefa'] = $this->input->post('descricaoTarefa');
        $data['statustarefa'] = $this->input->post('status');

        $this->db->where('idStatus', $id);

        return $this->db->update('tb_tatefa', $data);
    }

    public function get_tasks() {
        $this->db->select('*');
        return $this->db->get('tb_tarefas')->result();
    }

    public function get_tasks_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nomeTarefa', $termo);
        // PESQUISAR POR STATUS $this->db->like('nomeTarefa', $termo); 
        return $this->db->get('tb_tarefas')->result();
    }

    public function get_status() {
        $this->db->select('status, COUNT(*) AS qtd');
        $this->db->group_by('status');
        $this->db->order_by('status', 'ASC');

        $q = $this->db->get('Pedidos');
        return $q->result_array();
    }

    public function get_qtd_tasks() {
        $this->db->select('COUNT(*) AS total');
        return $this->db->get('tb_tarefas')->result();
    }

    public function get_tasks_pag($value, $reg_pag) {
        $this->db->select('*');
        $this->db->limit($reg_pag, $value);
        return $this->db->get('tb_tarefas')->result();
    }

    public function statusTarefa() {
        $id = $this->input->post('id');
        $data['statusTarefa'] = $this->input->post('statusTarefa');
        $this->db->where('id', $id);
        return $this->db->update('tb_status', $data);
    }

    public function get_ColetaStatus() {
        $this->db->select('coleta, COUNT(*) AS qtd');
        $this->db->group_by('coleta');
        $this->db->order_by('coleta', 'ASC');

        $q = $this->db->get('Pedidos');
        return $q->result_array();
    }

    public function get_andamento() {
        $this->db->select('status, COUNT(*) AS qtd');
        $this->db->group_by('status');
        $this->db->order_by('status', 'ASC');

        $q = $this->db->get('Pedidos');
        return $q->result_array();
    }

    public function get_recebido() {
        $this->db->select('status, COUNT(*) AS qtd');
        $this->db->group_by('status');
        $this->db->order_by('status', 'ASC');

        $q = $this->db->get('Pedidos');
        return $q->result_array();
    }

}
