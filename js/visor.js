const img = document.getElementById("mapImage");
const container = document.getElementById("imageContainer");

let scale = 1.0;
let translateX = 0, translateY = 0;

// Función para actualizar transformaciones
function updateTransform() {
    img.style.transform = `scale(${scale}) translate(${translateX}px, ${translateY}px)`;
}

// Zoom In
function zoomIn() {
    scale += 0.2;
    updateTransform();
}

// Zoom Out
function zoomOut() {
    if (scale > 0.4) {
        scale -= 0.2;
        updateTransform();
    }
}

// Movimiento
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
