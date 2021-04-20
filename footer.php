<?php
$display="
<script>
window.onscroll = function (e) {
    const distance = window.scrollY;
    const nav = document.querySelector('#nav');
    if(distance>100){
      nav.classList.add('nav-change');
    }else if(nav_list.classList.contains('reveal')){
        nav.classList.add('nav-change');
    }else{
      nav.classList.remove('nav-change');
    }
};
const nav_list = document.querySelector('.list-div');
const burger = document.getElementsByClassName('burger');
function nav_reveal(){
    const nav = document.querySelector('#nav');
    nav_list.classList.toggle('reveal');
    if(!nav.classList.contains('nav-change')){
        nav.classList.toggle('nav-change');
    }
}
</script>
 <script>
        if(window.location.href !== 'http://elevarbetensys.se/SY20/SA20/responsvie/index.php'){
            navbar = document.querySelector('nav');
            navbar.style.backgroundColor='black';
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js' integrity='sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s' crossorigin='anonymous'></script>
    -->
  </body>
</html>";
echo $display;

?>