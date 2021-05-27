<?php
//session_start();
/** 
 * 
 */


class products extends controllers
{


    function __construct()
    {
        //con la clase parent hereda las funcionalidades del controlador padre
        parent::__construct();



        //busca la vista bajo el metodo render y le indica que debe renderizar

    }
    function render()
    {
        $show_user = $this->model->show();
        $this->views->products = $show_user;
        $this->views->render('products/index');
    }
    function validarFunction($funcion)
    {
        $funciones = array(
            "render" => "true",
            "new" => "true",
            "registrarProducto" => "true",
            "update" => "true"
        );
        if (array_key_exists($funcion, $funciones)) {
            return true;
        } else {
            return false;
        }
    }
    function new()
    {
        $this->views->render('products/new');
    }
    function registrarProducto()
    {
        $nombre = $_POST['nombre'];
        $referencia = $_POST['referencia'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $stock = $_POST['stock'];
        $fecha_creacion = date("Y-m-d");
        $fecha_venta = date('jS \of F Y h:i:s A');
        $return = array(
            'nombre' => $nombre,
            'referencia' => $referencia,
            'precio' => $precio,
            'peso' => $peso,
            'categoria' => $categoria,
            'stock' => $stock,
            'fecha_creacion' => $fecha_creacion,
            'fecha_venta' => $fecha_venta
        );
        if ($this->model->add([$return])) {
            echo "<script>
                alert('Producto agregado con Exito');
                window.location= 'http://localhost:8083/products/';
     </script>";
        } else {
            echo "<script>
                alert('Sugerencia no Enviada');
                window.location= 'http://localhost:8083/products/';
     </script>";
        }
    }

    public function update($id)
    {

        $show_user = $this->model->edit($id);
        $this->views->products = $show_user;
        $this->views->render('products/edit');
    }

    public function editarProducto($id)
    {

        $nombre = $_POST['nombre'];
        $referencia = $_POST['referencia'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $stock = $_POST['stock'];
        $return = array(
            'id' => $id,
            'nombre' => $nombre,
            'referencia' => $referencia,
            'precio' => $precio,
            'peso' => $peso,
            'categoria' => $categoria,
            'stock' => $stock
        );
        if ($this->model->update([$return])) {
            echo "<script>
                alert('Registro Actualizado');
                window.location= 'http://localhost:8083/products/';
     </script>";
        } else {
            echo "<script>
                alert('Registro no actualizado');
                window.location= 'http://localhost:8083/products/';
     </script>";
        }
    }

    public function delete($id)
    {

        if ($this->model->delete($id)) {
            echo "<script>
                alert('Registro Eliminado');
                window.location= 'http://localhost:8083/products/';
     </script>";
        } else {
            echo "<script>
                alert('Registro no Eliminado');
                window.location= 'http://localhost:8083/products/';
     </script>";
        }
    }
}