<?php
    class Home extends Controller{
        public function login(){
            $data['judul'] = 'Login';
            
            $this->view('home/login', $data);   
        }
        public function index(){
            
            $data['judul'] = 'Login';
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
        public function signup(){
            $data['judul'] = 'Sign Up';
            
            $this->view('home/signup', $data);
            
        }
       
    }

