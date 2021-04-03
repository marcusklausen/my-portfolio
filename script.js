let modalBackdrop = document.querySelector('#modal-backdrop');
let cardLinks = document.querySelectorAll('a.card-link');
let modalContainer = document.querySelector('#modal-container');
let closeModalButton;

cardLinks.forEach(
    function(cardLink, index){
        cardLink.addEventListener("click", function(e) {
            e.preventDefault();
            let workItemId = cardLink.getAttribute('href');
            modalBackdrop.style.display = 'flex';
            getModalContentFrom(workItemId);
        })
    }
);



function getModalContentFrom(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        // If AJAX response is OK
        if (this.readyState == 4 && this.status == 200) {
            modalContainer.innerHTML = this.responseText;

            // Check if modal height is more than height of viewport
            checkModalHeight();

            closeModalButton = document.querySelector('#close-modal');
            closeModalButton.addEventListener('click', (event) => {
            event.preventDefault();
            closeModal();
        })

           } else {
               console.log('rekt');
           }
        
    };

    xhttp.open("GET", `article.php?id=${id}`, true);
    xhttp.send();
    
}

modalContainer.addEventListener('click', function(e) {
    e.stopPropagation();
});

modalBackdrop.addEventListener('click', function() {
    closeModal();
})



// Helper functions

function checkModalHeight() {
    if (modalContainer.clientHeight > window.innerHeight){
        modalContainer.children[0].style.overflow = 'scroll';
        modalContainer.children[0].style.maxHeight = '100vh';
    }
}

function closeModal() {
    modalBackdrop.style.display = 'none';
    modalContainer.innerHTML = '';
}