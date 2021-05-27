<?php
include_once 'models/product.php';
include_once 'models/venta.php';
/** 
 * 
 */
class ventasModel extends models
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
            $query = $this->db->conexion()->prepare('INSERT INTO ventas(id_producto, cantidad, fecha_venta)values(:id_producto,:cantidad,:fecha_venta)');
            $query->execute([
                'id_producto' => $data[0]['id_producto'],
                'cantidad' => $data[0]['cantidad'],
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

    public function updateStock($cantidad, $id)
    {
        $item = new product();
        echo $cantidad;
        die();
        try {
            $query = $this->db->conexion()->prepare('SELECT stock FROM productos WHERE id = :id');
            $query->execute([
                'id' => $id

            ]);

            while ($row = $query->fetch()) {
                $item->cantidad = $row['cantidad'];
            }
            $stock = $item->cantidad - $cantidad;

            try {
                $query = $this->db->conexion()->prepare('UPDATE productos
                 SET stock=:stock
                 WHERE id = :id');
                $query->execute([
                    'id' => $id,
                    'stock' => $stock
                ]);
                return true;
            } catch (PDOException $e) {
                return false;
            }
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