var button = document.getElementById('read_button');

button.addEventListener('click', function() {
    var portifolio = document.querySelector('.portifolio');
    portifolio.classList.toggle('active');

    if (portifolio.classList.contains('active')){
        return button.textContent = 'VER MENOS';
    }

    button.textContent = 'VER MAIS';
});