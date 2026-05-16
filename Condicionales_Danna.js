// ======================
// RETO A
// Sistema de Acceso
// ======================

console.log("========== SISTEMA DE ACCESO ==========");

let edad = 20;
let tieneEntrada = true;

let mensajeAcceso = "";

if (edad < 18) {

    mensajeAcceso = "Acceso denegado: Menor de edad";

} else if (!tieneEntrada) {

    mensajeAcceso = "Acceso denegado: Necesitas una entrada";

} else {

    mensajeAcceso = "¡Bienvenido al evento!";
}

console.log(mensajeAcceso);


// ======================
// RETO B
// Categorización
// ======================

console.log("\n========== CATEGORÍA DE JUGADORES ==========");

let puntaje = 2;
let categoria = "";

switch (puntaje) {

    case 1:
        categoria = "Nivel: Principiante";
        break;

    case 2:
        categoria = "Nivel: Pro";
        break;

    case 3:
        categoria = "Nivel: Maestro";
        break;

    default:
        categoria = "Puntaje no válido";
}

console.log(categoria);