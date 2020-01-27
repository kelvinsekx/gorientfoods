let modalClose = document.querySelector('.modal-close')
let modal = document.getElementById('modal')
modalClose.addEventListener('click', function (){
    return modal.style.display="none"
})


let icon = document.getElementById('icon')
icon.addEventListener('click', function (){
    return modal.style.display="block"
})