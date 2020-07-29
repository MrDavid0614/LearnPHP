<?php

require_once 'C:/xampp/htdocs/LearnPHP/Framework/model/Alumno.php';

class AlumnoController
{
    
    private $model;

    public function __construct()
    {
        $this->model = new Alumno();
    }

    public function indexAlumno()
    {
        require_once 'C:/xampp/htdocs/LearnPHP/Framework/view/alumno.php';
    }

    public function showById()
    {
        $alumno = new Alumno();
        if (isset($_REQUEST['id'])){
            $alumno = $this->model->getById($_REQUEST['id']);
        }
        require_once 'C:/xampp/htdocs/LearnPHP/Framework/view/alumno_form.php';
    }

    public function save()
    {
        $alumno = new Alumno();
        $alumno->id = $_REQUEST['id'];
        $alumno->nombre = $_REQUEST['nombre'];
        $alumno->apellidoPaterno = $_REQUEST['paterno'];
        $alumno->apellidoMaterno = $_REQUEST['materno'];
        $alumno->id>0?$alumno->update():$alumno->create();
        header('Location: ../index.php');
    }

    public function quit()
    {
        $this->model->delete($_REQUEST['id']);
        header('Location: ../index.php');
    }
}