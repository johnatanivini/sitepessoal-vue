<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function index() {

        $this -> load -> view('includes/header_manutencao.php');
        $this -> load -> view('manutencao');
        $this -> load -> view('includes/footer_manutencao.php');
    }

    public function indique() {

        $this -> load -> view('includes/header_manutencao.php');
        $this -> load -> view('manutencao_indique');
        $this -> load -> view('includes/footer_manutencao.php');

    }

    public function indica_cadastro() {

        $this->load->library('My_PHPMailer');
        
        $email = new PHPMailer();
        $email->IsSMTP();
        $email->IsHTML();
        $email->CharSet='utf-8';
        $email->Host="smtp.gmail.com";
        $email->Username="johnatan.ivini@gmail.com";
        $email->Port=465;
        $email->Password="iviniDesignerJIV25";
         $email->SetFrom("johnatan.ivini@gmail.com");
        $email->FromName="Site Papika";
        $email->AddBCC('johnatan.ivini@gmail.com');
        $email->AddAddress($this->input->post('email_amigo'),$this->input->post('nome_amigo'));
        $email->Subject="Indicação do site, confira!";
        $email->Body="Confira as novidades do Papika.com.br, <a href='http://www.papika.com.br'>Papika</a>";
        $email->SMTPDebug =2;
        if($email->Send()){
            echo "Email enviado com sucesso";
        }else{
            echo "Não foi possivel ser entregue.";
        }

       // echo "Amigo Indicado! Indique para mais pessoas, compartilhe em seu Facebook e/ ou twiiter!";
    }

    public function cliente_cadastro() {

        $nome = $this -> input -> post('nome');
        $email = $this -> input -> post('email');
        $nome_bebe = $this -> input -> post('nome_bebe');
        $data_nasc = $this -> input -> post('data_nasc');
        $cidade = $this -> input -> post('cidade');
        $estado = $this -> input -> post('estado');

        $data = explode('/', $data_nasc);

        $data = $data[2] . "-" . $data[1] . "-" . $data[0];

        $this -> db -> where('email_cliente', $email);

        $emailexiste = $this -> db -> get('papika_cliente') -> result();

        if (count($emailexiste) === 1) {

            echo "Email já existe, tente outro!";

        } else {

            $set = array('nome_cliente' => $nome, 'email_cliente' => $email, 'nome_bebe' => $nome_bebe, 'data_nasci' => $data, 'cidade' => $cidade, 'estado' => $estado);

            $this -> db -> insert('papika_cliente', $set);

            echo "Cadastrado com sucesso";

        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
