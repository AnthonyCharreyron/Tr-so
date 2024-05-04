jQuery(function($){
    $(document).ready(function() {
        let nbClick = 0;
        $('body').on('click', '.btn', function() {
            if(nbClick === 4){
                window.location.reload();
            }
            $(this).toggleClass('background-color');
            nbClick+=1;
        });

        $('body').on('click', '.1', function() {
            console.log('1');
            $('#5').addClass('2');
        });

        $('body').on('click', '.2', function() {
            console.log('2');
            $('#2').addClass('3');
        });

        $('body').on('click', '.3', function() {
            console.log('3');
            $('#8').addClass('4');
        });

        $('body').on('click', '.4', function() {
            console.log('4');
            $('#code').text('4528');
        });

        $('body').on('click', '#valideCode', function() {
            var codeInput = $('#codeInput').val();
            console.log(codeInput);
            if (parseInt(codeInput) === 4528){
                $('#verifCode').text('Le code est bon.');
                var bouton = document.createElement('button');
                bouton.innerText = "Passer à l'énigme 2";
                bouton.addEventListener('click', function() {
                window.location.href = "/enigme2";
                });
                document.body.appendChild(bouton);

            } else {
                $('#verifCode').text("Le code n'est pas bon.");
                setTimeout(function() {
                    location.reload();
                }, 3000);
            }
        });
    });
});
