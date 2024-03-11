<style>
    .display_flex_1,.display_flex_2{
        display:flex;
        justify-content:space-between ; 
    }
    .space_el{
       margin:50px; 
    }
    a {
        text-decoration:none ; 
    }
    .mmm{
        border:10px solid black ; 
    }
    .display_flex_1  {
       
 padding:15px ; 

    }

    .display_flex_2 div {
       margin-left:25px ; 
       margin-right:25px ; 
 

    }
    .padding_1{
        padding:45px; 
    }
    .presentation_{
      
       background-size:100% ; 
       padding-bottom:200px;
       padding-top:200px;

text-shadow:1px 1px white; 
background-attachment:fixed ; 
background-size:100%; 

    }
    .bold_child{
        padding:25px ; 
    }
 .pages_1{
    color:rgba(0,0,0,0.3) ; 
 
 }
 .i_array{
    margin:15px; 
 

    display:flex; 
    justify-content:space-around ; 
    flex-wrap:wrap;
    
 }
 .i_array2{
 /*
    margin:5px; 
    border-bottom:5px solid rgba(100,0,0,0.2); 

border-top:5px solid #2acbd2 ; 
border-radius:15px 15px 0 0 ; 

display:block ; 
    padding-top:25px; 
    padding:25px; 
 
    margin:100px; 
    width:400px; 

   
*/
border: 1px #e1e1e1 ;
background-color : #fafafa ; 
width: 400px ; 
padding: 50px; 
border-top: 4px solid <?php echo $liste_projet_color_1[0] ; ?> ; 
border-radius: 15px 15px 0 0 ; 
margin:30px; 
margin-bottom:60px; 
 }
 .description_el{
 
    margin-top:20px ; 
    color:rgba(0,0,0,0.3) ; 
   
}
 .taille_img{
    width:100px;
    border-radius : 100%; 
    height:100px ; 
    margin-bottom:20px ; 
    margin-top:25px; 
 }
 .description{
    color:rgba(0,0,0,0.4) ; 
margin-top:25px; 
 }
 
.hreff_el,.hreff_el_0   {
 
    margin-right:25px ; 
  color:<?php echo $liste_projet_color_1[0] ; ?> ; 
  border-bottom:1px solid <?php echo $liste_projet_color_1[0] ; ?> ; 
 }
 .hreff_el_0  {
 
border-bottom:1px solid <?php echo $liste_projet_color_1[0] ; ?> ; 

text-shadow:1px 1px black; 
}
.m_princ{
    width:200px; 
}
.lien {
    width:30%; 
    margin:auto ; 
    text-align:center ; 
    margin-top:60px; 
    margin-bottom:60px; 

}

::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: rgba(0,0,20,0.8); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgba(0,0,20,0.9); 
}

 
    .debut_page{
 
        width:50px ;
        text-align:center ;  
        color:white ; 
        text-shadow:1px 1px black ; 
        float:right ; 
    }
    .invisible_user{
        font-size:4em ; 
    }
 
</style>