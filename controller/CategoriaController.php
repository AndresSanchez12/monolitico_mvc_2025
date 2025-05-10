<?php
require_once 'model/Categoria.php';

class CategoriaController {

    public function registrarCategoria($nombre, $porcentaje) {
        $categoria = new Categoria($nombre, $porcentaje);
        if ($categoria->save()) {
            echo "Categoría registrada correctamente.";
        } else {
            echo "Error al registrar la categoría.";
        }
    }

    public function modificarCategoria($id, $nuevoNombre, $nuevoPorcentaje) {
        $categoria = new Categoria($nuevoNombre, $nuevoPorcentaje, $id);
        if ($categoria->update()) {
            echo "Categoría actualizada correctamente.";
        } else {
            echo "Error al actualizar la categoría.";
        }
    }

    public function eliminarCategoria($id) {
        if (Categoria::delete($id)) {
            echo "Categoría eliminada correctamente.";
        } else {
            echo "Error al eliminar la categoría.";
        }
    }

    public function listarCategorias() {
        return Categoria::getAll();
    }
}