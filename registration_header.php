<div class="header">
  <a href="#default" class="logo">Library </a>
  
  <div class="header-right">

    <a class="dbs" href="login.php">Login</a>
    
    <a class="dbs"href="registration.php">Registration</a>
    
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script>
$(document).ready(function () {
    var sideBarButtons = $(".header-right");
    console.log(sideBarButtons);
 var url= window.location.pathname;
 var filename = url.substring(url.lastIndexOf('/')+1);
console.log(filename);
var btns = document.getElementsByClassName("dbs");

    $('.header-right').find('a').each(function() {
       
        if($(this).attr('href')==filename){
            this.className += " active";

      console.log(this.className);

  
    }
});

})
      

</script>