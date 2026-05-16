<?php

// ======================
// RETO A
// ======================

echo "<hr>";
echo "<h1>SISTEMA DE ACCESO</h1>";

$edad = 20;
$tieneEntrada = true;

$mensaje = "";

if ($edad < 18) {

    $mensaje = "❌ Acceso rechazado: Usuario menor de edad";

} elseif ($tieneEntrada == false) {

    $mensaje = "⚠️ Acceso rechazado: Falta la entrada";

} else {

    $mensaje = "✅ Acceso permitido. ¡Disfruta el evento!";
}

echo "<p>$mensaje</p>";


// ======================
// RETO B
// ======================

echo "<hr>";
echo "<h1>CATEGORÍA DE JUGADORES</h1>";

$puntaje = 2;
$categoria = "";

switch ($puntaje) {

    case 1:
        $categoria = "🟢 Jugador Principiante";
        break;

    case 2:
        $categoria = "🔵 Jugador Profesional";
        break;

    case 3:
        $categoria = "🟣 Jugador Maestro";
        break;

    default:
        $categoria = "❌ Puntaje incorrecto";
}

echo "<p>$categoria</p>";

?>