'use strict'

window.addEventListener( 'DOMContentLoaded', ()=>{
    const form = document.getElementById('link-form'),
          input = document.querySelector('#link-form .link-input'),
          modal = document.querySelector('.modal'),
          rezBlock = document.querySelector('.rezBlock');

    form.addEventListener('submit', e => {
        e.preventDefault();
        console.log(input.value);
        if (input.value != '') {
            let data = new FormData(form);
            fetch('server.php', 
                {
                    method: 'POST',
                    body: data
                })
                .then(rez => {return rez.text(); })
                .then(rez => openModal(rez))
                .catch(error => openModal(error));
        } else {

        }
    });

    function openModal(message){
        // alert(message);
        modal.style.display = "block";
        rezBlock.textContent = message;

        window.addEventListener('click', e => {
            if(e.target != document.querySelector('.modal__body') && e.target != rezBlock) {
                modal.style.display = 'none';
            }
        });
    }
});