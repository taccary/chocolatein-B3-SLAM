
<div style="text-align:center; margin-top: 25px; margin-bottom: 25px;">
	<h2>Déconnexion réussi</h2>
    Vous allez être redirigé dans <span id="timer">4s<span>
</div>

<script>
    Timer3s();
    function Timer3s(){
    var timerElt = document.getElementById('timer');
    var counter = 3;
    var timer = setInterval(function(){
        timerElt.innerText = counter + "s";
        counter = counter - 1;
        if(counter == 0){

        }
    }, 1000);
    }
</script>    