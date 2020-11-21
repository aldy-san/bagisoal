<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        //jika sudah login di tendang
        if ($this->session->userdata('email')) {
            redirect('');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('template_home/header', $data);
            $this->load->view('template_home/header_umum', $data);
            $this->load->view('auth/login');
            $this->load->view('template_home/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        //usernya ada
        if ($user) {
            //cek password
            if ($user['is_active'] == 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Alamat Email belum Terverifikasi!</div>');
                redirect('auth');
            }
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'email' => $user['email'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($data);
                redirect('');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        //jika sudah login di tendang
        if ($this->session->userdata('email')) {
            redirect('');
        }

        $this->form_validation->set_message('matches', 'password tidak sama!');
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[users.email]',
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|min_length[6]|max_length[12]|matches[password2]',
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|matches[password1]',
        );
        $this->form_validation->set_rules(
            'syarat',
            'Syarat',
            'required',
            array('required' => 'Anda harus menyetujui syarat dan ketentuan yang berlaku!')
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('template_home/header', $data);
            $this->load->view('template_home/header_umum', $data);
            $this->load->view('auth/register');
            $this->load->view('template_home/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'total_poin' => '0',
                'is_active' => '0'
            ];
            //SIAPKAN TOKEN
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('users', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Anda berhasil mendaftar. Silahkan verifikasi email anda</div>');
            redirect('auth');
        }
    }
    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'bagisoal1@gmail.com',
            'smtp_pass' => 'Aldisukapb1',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from('bagisoal1@gmail.com', 'BAGISOAL');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Klik link ini untuk menverifikasi akun anda : <a href = "' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">KLIK DISINI</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->db->set('is_active', 1);
                $this->db->where('email', $email);
                $this->db->update('users');

                $this->db->delete('user_token', ['email' => $email]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil di Verifikasi</div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Verifikasi gagal! Token Salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Verifikasi gagal! Email Tidak Terdaftar</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda telah Logout</div>');
        redirect('auth');
    }
}
