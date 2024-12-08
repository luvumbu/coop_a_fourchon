<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">

<body>
    
<div class="element_1">



<form style="position: fixed;">    
<div id="upload-progress"   ></div>
<div>
    <label for="file-input"><img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/50/external-dowload-big-data-xnimrodx-lineal-xnimrodx.png" alt="external-dowload-big-data-xnimrodx-lineal-xnimrodx"></label>
    
</div>


<input type="file" name="" id="file-input"  class="class1"  onclick="name_file()" /><br />
 

<div>
<label for="submit-button"><img width="50" height="50" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/external-send-folder-folder-tanah-basah-basic-outline-tanah-basah.png" alt="external-send-folder-folder-tanah-basah-basic-outline-tanah-basah"></label>
    
</div>

<input class="class1" type="submit" value="Envoyer" id="submit-button" class="class3" onclick="disip()" />
</form>
<script>
function disip() 
{
    document.getElementById("submit-button").style.display="none"; 
  
}
function name_file() {
    const d = new Date();
 time = d.getTime();


 console.log(time) ; 





 var ok = new Information("add_img/name.php"); // création de la classe 
ok.add("name", time); // ajout de l'information pour lenvoi 
   
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




}

</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="add_img/upload.js"></script>

</div>



<div id="bg_black" onclick="bg_black(this)"></div>
 
<style>
    .class1{
        display:none ; 
    }
</style>


<style>
    .element_1{
        width : 30%; 
        top: 35px; 
        text-align:center ; 
        margin:auto  ; 
        border:1px solid rgba(0,0,0,0.9); 
        border-radius: 15px;
        position:absolute ; 
background-color:white ; 
z-index: 2;
left:35%;
    }
    .element_1 div {
        padding:7px ; 
        padding-left: 90px;
        padding-right: 90px;

    }
    #bg_black{
z-index: 1;

        background-color:rgba(0,0,0,0.6) ; 
        width : 100%;
        height : 100% ; 
        position:fixed ; 
        top:0 ; 
    }
    body{
        padding: 0;
        margin: 0;
    }
</style>

<script>
    function  bg_black(_this) {
       
       document.getElementById("add_img").className ="display_none" ; 
    }
</script>
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
</body>
</html>