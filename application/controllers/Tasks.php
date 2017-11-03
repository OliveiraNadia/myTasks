<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

    public function index($indice = null) {
        $this->load->model('Tasks_model', 'Tasks');
        // $dados['tasks'] = $this->tasks->get_tasks();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "A tarefa foi cadastrada com sucesso!";
            $this->load->view('includes/msgSucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar o usuário.";
            $this->load->view('includes/msgErro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "A Tarefa foi excluida com sucesso!";
            $this->load->view('includes/msgSucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir a tarefa.";
        } else if ($indice == 5) {
            $data['msg'] = "A Tarefa foi atualizado com sucesso!";
            $this->load->view('includes/msgSucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar a tarefa.";
            $this->load->view('includes/msgErro', $data);
        }
        $this->load->view('createTask');
        $this->load->view('includes/footer');
    }

    public function criarTarefa() {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('createTask');
        $this->load->view('includes/footer');
    }

    public function cadastrarTarefa() {

        $this->load->model('Tasks_model', 'tasks');


        if ($this->tasks->cadastrarTarefa()) {
            redirect('tasks/1');
        } else {
            redirect('tasks/2');
        }
    }

    public function listarTasks($indice = null) {

        $this->load->model('Tasks_model', 'tasks');
        $dados['tasks'] = $this->tasks->get_tasks();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "O status foi atualizada com sucesso!";
            $this->load->view('includes/msgSucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível atualizar o status.";
            $this->load->view('includes/msgErro', $data);
        }
        $this->load->view('listarTesks', $dados);
    }

    public function editarTarefa() {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('editarTasks');
        $this->load->view('includes/footer');
    }

    public function atualizar($id = null, $indice = null) {
        

        $this->db->where('idTarefa', $id);
        $data['tasks'] = $this->db->get('tb_tarefas')->result();

        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "A senha foi atualizada com sucesso!";
            $this->load->view('includes/msgSucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível atualizar a senha.";
            $this->load->view('includes/msgErro', $data);
        }
        $this->load->view('editarTasks', $data);
        $this->load->view('includes/footer');
    }

    public function excluir($id = null) {

        $this->db->where('idTarefa', $id);
        if ($this->db->delete('tb_tarefas')) {
            redirect('tasks/3');
        } else {
            redirect('tasks/4');
        }
    }
    public function login() {
        
        $this->load->view('login');
       
    }
    public function logar(){
		
		$userName = $this->input->post('userName');
		$senha = $this->input->post('senha');
		
		$this->db->where('senha',$senha);
		$this->db->where('userName',$userName);
		$this->db->where('status',1);
		$data['usuario'] = $this->db->get('usuarios')->result();
		
		if(count($data['usuario'])==1){
			$dados['nomeUsuario'] = $data['usuario'][0]->nomeUsuario;
			$dados['idUsuario'] = $data['usuario'][0]->idUsuario;
			$dados['logado'] = true;
			$this->session->set_userdata($dados);
			redirect('home');
		}else{
			redirect('home/login');
		}
          
          
             
	}

}
