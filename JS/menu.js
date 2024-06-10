
let btnMenu = document.getElementById ('btn-abrir-menu')
let menumobile = document.getElementById ('menu-mobile')
let overlay = document.getElementById ('overlay-menu-mobile')

btnMenu.addEventListener('click', ()=>{
    menumobile.classList.add('abrir-menu')
})

menumobile.addEventListener('click', ()=>{
    menumobile.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menumobile.classList.remove('abrir-menu')
})