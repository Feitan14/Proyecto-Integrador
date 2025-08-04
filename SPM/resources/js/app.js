import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
import './bootstrap';

/* borrar o comentar en caso de que algo salga mal*/
document.addEventListener("DOMContentLoaded", async () => {
    const contenedor = document.getElementById("usuarios-api");
    if (!contenedor) return;

    try {
        const res = await fetch("https://apifastpi-production.up.railway.app/usuarios");
        const data = await res.json();

        if (!Array.isArray(data)) {
            contenedor.innerHTML = "<li>No se recibió una lista válida.</li>";
            return;
        }

        contenedor.innerHTML = data.map(user => `
            <li>${user.nombre} (${user.email})</li>
        `).join("");
    } catch (err) {
        console.error("Error conectando con la API:", err);
        contenedor.innerHTML = "<li>Error al conectar con la API</li>";
    }
});
