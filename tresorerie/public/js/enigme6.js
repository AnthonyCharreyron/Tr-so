jQuery(function($){
    $(document).ready(function() {
        $('body').on('click', '#valideCode', function() {
            var codeInput = $('#codeInput').val();
            console.log(codeInput);
            if (parseInt(codeInput) === 6837){//
                $('#verifCode').text('Le code est bon.');
                var bouton = document.createElement('button');
                bouton.innerText = "Passer à l'énigme 7";
                bouton.addEventListener('click', function() {
                window.location.href = "/enigme7";
                });
                document.body.appendChild(bouton);

            } else {
                $('#verifCode').text("Le code n'est pas bon.");
            }
        });
    });
});