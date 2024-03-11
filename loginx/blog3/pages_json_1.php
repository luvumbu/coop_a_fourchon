<div id="body">
  <?php
  include("all_script_page.php");
  ?>
</div>
<?php
if (count($apple->list_row) != 0) {
  include("add_log.php");
  $src = "../../src/img/all/qr_code/" . give_url() . ".png"; ?>
  <div class="class_qr_code" >
    <img id="id_qr_code" src="<?php echo $src; ?>" alt="" srcset="">

  </div>
  </div>
  <?php
}
?>