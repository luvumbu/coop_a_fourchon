<div id="body">
  <?php
  include("all_script_page.php");
 
if($verif_id){
   include("all_script_page2.php");
 

}
else {

 
?>

<style>
  body,div{
    overflow: hidden; /* Hide scrollbars */
    background-color: black;

  }
</style>
<?php 
}

?>
</div>
<?php

if (count($apple->list_row) != 0) {
  include("add_log.php");
  $src = "../../src/img/all/qr_code/" . give_url() . ".png"; ?>
  <div class="class_qr_code" >
    <img id="id_qr_code" class="id_qr_code display_none" src="<?php echo $src; ?>" alt="" srcset="">

  </div>
  </div>
  <?php
}
?>