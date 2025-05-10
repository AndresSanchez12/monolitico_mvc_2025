<?php
session_start();

require_once 'config/db.php';
require_once 'controller/IngresoController.php';
require_once 'controller/CategoriaController.php';
require_once 'controller/GastoController.php';
require_once 'controller/ReporteController.php';

$controladorIngreso = new IngresoController();
$controladorCategoria = new CategoriaController();
$controladorGasto = new GastoController();
$controladorReporte = new ReporteController();

if (isset($_GET['accion'])) {

    // ========== INGRESOS ==========
    if ($_GET['accion'] == 'registrar_ingreso' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $valor = $_POST['valor'];
        $controladorIngreso->registrarIngreso($mes, $anio, $valor);

    } elseif ($_GET['accion'] == 'form_ingreso') {
        require_once 'view/ingreso_form.php';

    } elseif ($_GET['accion'] == 'modificar_ingreso' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $nuevoValor = $_POST['nuevo_valor'];
        $controladorIngreso->modificarIngreso($mes, $anio, $nuevoValor);

    } elseif ($_GET['accion'] == 'eliminar_ingreso' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $controladorIngreso->eliminarIngreso($id);

    } elseif ($_GET['accion'] == 'lista_ingresos') {
        $ingresos = $controladorIngreso->listarIngresos();
        require_once 'view/lista_ingresos.php';

    // ========== CATEGORÍAS ==========
    } elseif ($_GET['accion'] == 'form_categoria') {
        require_once 'view/categoria_form.php';

    } elseif ($_GET['accion'] == 'registrar_categoria' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $porcentaje = $_POST['porcentaje'];
        $controladorCategoria->registrarCategoria($nombre, $porcentaje);

    } elseif ($_GET['accion'] == 'modificar_categoria' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nuevoNombre = $_POST['nombre'];
        $nuevoPorcentaje = $_POST['porcentaje'];
        $controladorCategoria->modificarCategoria($id, $nuevoNombre, $nuevoPorcentaje);

    } elseif ($_GET['accion'] == 'eliminar_categoria' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $controladorCategoria->eliminarCategoria($id);

    } elseif ($_GET['accion'] == 'lista_categorias') {
        $categorias = $controladorCategoria->listarCategorias();
        require_once 'view/lista_categorias.php';

    // ========== GASTOS ==========
    } elseif ($_GET['accion'] == 'form_gasto') {
        $categorias = $controladorCategoria->listarCategorias();
        require_once 'view/gasto_form.php';

    } elseif ($_GET['accion'] == 'registrar_gasto' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $categoria = $_POST['categoria'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $valor = $_POST['valor'];
        $controladorGasto->registrarGasto($categoria, $mes, $anio, $valor);

    } elseif ($_GET['accion'] == 'modificar_gasto' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nuevaCategoria = $_POST['nueva_categoria'];
        $nuevoValor = $_POST['nuevo_valor'];
        $controladorGasto->modificarGasto($id, $nuevaCategoria, $nuevoValor);

    } elseif ($_GET['accion'] == 'eliminar_gasto' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $controladorGasto->eliminarGasto($id);

    } elseif ($_GET['accion'] == 'lista_gastos') {
        $gastos = $controladorGasto->listarGastos();
        require_once 'view/lista_gastos.php';

    // ========== REPORTE ==========
    } elseif ($_GET['accion'] == 'form_reporte') {
        require_once 'view/reporte_form.php';

    } elseif ($_GET['accion'] == 'ver_reporte' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $reporteData = $controladorReporte->generarReporte($mes, $anio);
        require_once 'view/reporte_resultado.php';
    }

} else {
    require_once 'view/menu.php';
}
