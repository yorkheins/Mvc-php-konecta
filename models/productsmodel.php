<?php
include_once 'models/product.php';

/** 
 * 
 */
class productsModel extends models
{
    function show()
    {
        $items = [];
        $query = $this->db->conexion()->query("select * from productos");
        try {
            //$query->execute();

            while ($row = $query->fetch()) {
                $item = new product();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->referencia = $row['referencia'];
                $item->precio = $row['precio'];
                $item->peso = $row['peso'];
                $item->categoria = $row['categoria'];
                $item->stock = $row['stock'];
                $item->fecha_creacion = $row['fecha_creacion'];
                $item->fecha_venta = $row['fecha_venta'];
                array_push($items, $item);
            }
            return $items;
        } catch (Exception $e) {
            echo "error de conexion";
        }
    }

    public function add($data)
    {

        try {
            $query = $this->db->conexion()->prepare('INSERT INTO productos(nombre,referencia,precio,peso,categoria,stock,fecha_creacion,fecha_venta)values(:nombre,:referencia,:precio,:peso,:categoria,:stock,:fecha_creacion,:fecha_venta)');
            $query->execute([
                'nombre' => $data[0]['nombre'],
                'referencia' => $data[0]['referencia'],
                'precio' => $data[0]['precio'],
                'peso' => $data[0]['peso'],
                'categoria' => $data[0]['categoria'],
                'stock' => $data[0]['stock'],
                'fecha_creacion' => $data[0]['fecha_creacion'],
                'fecha_venta' => $data[0]['fecha_venta'],
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function edit($id)
    {
        $item =  new product();
        $query = $this->db->conexion()->prepare("SELECT * FROM productos WHERE id=:id");
        try {
            $query->execute(['id' => $id]);
            while ($row = $query->fetch()) {
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->referencia = $row['referencia'];
                $item->precio = $row['precio'];
                $item->peso = $row['peso'];
                $item->categoria = $row['categoria'];
                $item->stock = $row['stock'];
                $item->fecha_creacion = $row['fecha_creacion'];
                $item->fecha_venta = $row['fecha_venta'];
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($data)
    {

        try {
            $query = $this->db->conexion()->prepare('UPDATE productos
             SET nombre=:nombre,
             referencia=:referencia,
             precio=:precio,
             peso=:peso,
             categoria=:categoria,
             stock=:stock
             WHERE id = :id');
            $query->execute([
                'id' => $data[0]['id'],
                'nombre' => $data[0]['nombre'],
                'referencia' => $data[0]['referencia'],
                'precio' => $data[0]['precio'],
                'peso' => $data[0]['peso'],
                'categoria' => $data[0]['categoria'],
                'stock' => $data[0]['stock']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->db->conexion()->prepare('DELETE FROM productos WHERE id = :id');
            $query->execute([
                'id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}