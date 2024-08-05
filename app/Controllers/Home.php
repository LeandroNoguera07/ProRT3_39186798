<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
   {
      $data['titulo']='pagina principal';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('front/inicio');
      echo view('front/footer_view');
   }
    public function inicio()
    {
      $data['titulo']='inicio';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('front/inicio');
      echo view('front/footer_view');
    }
    public function quienessomos()
   {
      $data['titulo']='quienes somos';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('front/quienes_somos');
      echo view('front/footer_view');
   }
    public function acercade()
   {
      $data['titulo']='acerca de';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('front/acercade');
      echo view('front/footer_view');
   }
    public function login()
   {
      $data['titulo']='login';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('front/login');
      echo view('front/footer_view');
   }
   public function registro()
   {
      $data['titulo']='registrarse';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('back/registro');
      echo view('front/footer_view');
   }

}
