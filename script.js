// Função para trocar a cor do item do menu selecionado
function changeColor(element) {
    let items = document.querySelectorAll(".menu-item");
    items.forEach(item => {
        item.style.backgroundColor = "white";
    });
    element.style.backgroundColor = "lightblue";
}
