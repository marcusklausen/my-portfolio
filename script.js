let modal = document.querySelector('#modal-backdrop');

let cardLinks = document.querySelectorAll('a.card-link');


cardLinks.forEach(
    function(cardLink, index){
        cardLink.addEventListener("click", function(e) {
            e.preventDefault();
            let workItemId = cardLink.getAttribute('href');
            modal.style.display = 'flex';
        })
    }
);