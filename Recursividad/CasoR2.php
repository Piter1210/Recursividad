<?php class Categoria {
    public $id;
    public $nombre;
    public $subcategorias = [];

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function agregarSubcategoria($subcategoria) {
        $this->subcategorias[] = $subcategoria;
    }
}

// Función recursiva para imprimir categorías y subcategorías
function imprimirCategorias($categoria, $nivel = 0) {
    echo str_repeat('-', $nivel) . $categoria->nombre . "<br>";

    foreach ($categoria->subcategorias as $subcategoria) {
        imprimirCategorias($subcategoria, $nivel + 1);
    }
}

// Crear categorías
$categoriaPrincipal = new Categoria(1, "Nivel de Programación");
$subcategoria1 = new Categoria(2, "Junior");
$subcategoria2 = new Categoria(3, "Lenguajes de programación");
$subcategoria3 = new Categoria(4, "Clasificacòn de Niveles de los lenguajes");

$categoriaPrincipal->agregarSubcategoria($subcategoria1);
$categoriaPrincipal->agregarSubcategoria($subcategoria2);
$categoriaPrincipal->agregarSubcategoria($subcategoria3);

$subcategoria1->agregarSubcategoria(new Categoria(5, "Semi senior"));
$subcategoria1->agregarSubcategoria(new Categoria(6, "Senior"));
$subcategoria2->agregarSubcategoria(new Categoria(7, "C"));
$subcategoria2->agregarSubcategoria(new Categoria(8, "C++"));
$subcategoria2->agregarSubcategoria(new Categoria(9, "Java"));
$subcategoria2->agregarSubcategoria(new Categoria(10, "Python"));
$subcategoria2->agregarSubcategoria(new Categoria(11, "Java Script"));
$subcategoria2->agregarSubcategoria(new Categoria(12, "PHP"));
$subcategoria3->agregarSubcategoria(new Categoria(13, "Nivel Bajo"));
$subcategoria3->agregarSubcategoria(new Categoria(14, "Nivel Medio"));
$subcategoria3->agregarSubcategoria(new Categoria(15, "NivelAlto"));


// Llamar a la función recursiva para imprimir las categorías
imprimirCategorias($categoriaPrincipal);
?>