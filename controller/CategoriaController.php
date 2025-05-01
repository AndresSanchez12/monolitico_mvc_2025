<?php
// controller/CategoriaController.php
require_once 'model/Categoria.php';

class CategoriaController {
    public function __construct() {
        if (!isset($_SESSION['categorias'])) {
            $_SESSION['categorias'] = [];
        }
    }

    public function registrarCategoria($nombre, $porcentaje) {
        if ($porcentaje <= 0 || $porcentaje > 100) {
            echo "Error: El porcentaje debe ser mayor a 0 y menor o igual a 100.";
            return;
        }

        foreach ($_SESSION['categorias'] as $categoria) {
            if ($categoria->nombre == $nombre) {
                echo "Error: Ya existe una categoría con ese nombre.";
                return;
            }
        }

        $nuevaCategoria = new Categoria($nombre, $porcentaje);
        $_SESSION['categorias'][] = $nuevaCategoria;
        echo "Categoría registrada correctamente.";
    }

    public function modificarCategoria($nombreActual, $nuevoNombre, $nuevoPorcentaje) {
        foreach ($_SESSION['categorias'] as $categoria) {
            if ($categoria->nombre == $nombreActual) {
                $categoria->actualizar($nuevoNombre, $nuevoPorcentaje);
                echo "Categoría actualizada correctamente.";
                return;
            }
        }
        echo "Error: No se encontró la categoría.";
    }

    public function eliminarCategoria($nombre) {
        foreach ($_SESSION['categorias'] as $indice => $categoria) {
            if ($categoria->nombre == $nombre) {
                // Luego pondremos aquí la validación si tiene gastos asociados.
                unset($_SESSION['categorias'][$indice]);
                echo "Categoría eliminada correctamente.";
                return;
            }
        }
        echo "Error: No se encontró la categoría.";
    }

    public function listarCategorias() {
        return $_SESSION['categorias'];
    }
}
?>
