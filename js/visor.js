const img = document.getElementById("mapImage");
const container = document.getElementById("imageContainer");

let scale = 1;
let translateX = 0, translateY = 0;
let isDragging = false;
let startX, startY;
// funcion para restablecer a imagen inicial
function resetPosition() {
    scale = 1;       // Restablece el zoom
    translateX = 0;  // Centra horizontalmente
    translateY = 0;  // Centra verticalmente
    updateTransform(); // Aplica los cambios
}

// Funciones de zoom para los botones
function zoomIn() {
    scale = Math.min(scale + 0.1, 5);
    updateTransform();
}

function zoomOut() {
    scale = Math.max(scale - 0.1, 0.5);
    updateTransform();
}

// Funciones de movimiento con botones
function moveLeft() {
    translateX -= 20;
    updateTransform();
}

function moveRight() {
    translateX += 20;
    updateTransform();
}

function moveUp() {
    translateY -= 20;
    updateTransform();
}

function moveDown() {
    translateY += 20;
    updateTransform();
}

// 🚀 Función para actualizar transformaciones
function updateTransform() {
    img.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
}

// 🔍 Zoom con la rueda del mouse
container.addEventListener("wheel", (e) => {
    e.preventDefault();
    const zoomFactor = 0.1;
    if (e.deltaY < 0) {
        scale = Math.min(scale + zoomFactor, 5); // Máximo 5x
    } else {
        scale = Math.max(scale - zoomFactor, 0.5); // Mínimo 0.5x
    }
    updateTransform();
});

// ✋ Arrastrar la imagen con el mouse
img.addEventListener("mousedown", (e) => {
    isDragging = true;
    startX = e.clientX - translateX;
    startY = e.clientY - translateY;
    img.style.cursor = "grabbing";
});

document.addEventListener("mousemove", (e) => {
    if (!isDragging) return;
    translateX = e.clientX - startX;
    translateY = e.clientY - startY;
    updateTransform();
});

document.addEventListener("mouseup", () => {
    isDragging = false;
    img.style.cursor = "grab";
});

// 🎮 Soporte para pantalla táctil (Móviles)
img.addEventListener("touchstart", (e) => {
    isDragging = true;
    startX = e.touches[0].clientX - translateX;
    startY = e.touches[0].clientY - translateY;
});

img.addEventListener("touchmove", (e) => {
    if (!isDragging) return;
    translateX = e.touches[0].clientX - startX;
    translateY = e.touches[0].clientY - startY;
    updateTransform();
});

img.addEventListener("touchend", () => {
    isDragging = false;
});
