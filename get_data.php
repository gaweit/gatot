<?php
require 'function.php';
$koneksi = mysqli_connect("localhost", "root", "", "gatot");


$search = $_POST['search'];
$artikel_result = search_artikel($search);
$relevan_kalimat = relevan_kalimat($search);
$relevan_perkata = relevan_kata($search);
?>
<?php 
if (strlen($search) == 0) {
    ?>

    <div class="list-group">

        <div href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1 text-center"><center>Tidak ada data yang ditemukan</center></h5>
          </div>
      </div>
  </div>
<?php }else{ ?> 
    <h4 class="mb-3 text-center">Hasil pencarian teratas</h4>
    <?php foreach ($artikel_result as $artikel) { ?>
        <div class="list-group">
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><?php echo str_ireplace($search,"<mark>".$search."</mark>",$artikel['artikel_judul']); ?></h5>
              </div>
              <p class="mb-1 text-muted"><small><?php echo substr(str_ireplace($search,"<mark>".$search."</mark>",$artikel['artikel_deks']),0,100)."..."; ?></small></p>
              <small><a href="<?php echo $artikel['artikel_slug'] ?>"><?php echo $artikel['artikel_slug'] ?></a></small>
          </div>
      </div>
  <?php  } ?>


  <hr>
  <h4 class="mb-3 text-center">Rekomendasi yang relevan dengan keyword</h4>
  <div class="list-group">
      <?php foreach ($relevan_kalimat as $kalimat) {
        ?>
        <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><?php echo $kalimat['artikel_judul'] ?></h5>
          </div>
          <p class="mb-1 text-muted"><small><?php echo  substr($kalimat['artikel_deks'],0,100)."..."; ?></small></p>
          <small><a href="<?php echo $kalimat['artikel_slug'] ?>"><?php echo $kalimat['artikel_slug'] ?></a></small>
      </div>
  <?php  } ?>
</div>
<hr>
<h4 class="mb-3 text-center">Rekomendasi yang relevan perkata</h4>
<div class="list-group">

  <?php foreach ($relevan_perkata as $kata) {
    ?>
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?php echo $kata['artikel_judul'] ?></h5>
      </div>
      <p class="mb-1 text-muted"><small><?php echo  substr($kata['artikel_deks'],0,100)."..."; ?></small></p>
      <small><a href="<?php echo $kata['artikel_slug'] ?>"><?php echo $kata['artikel_slug'] ?></a></small>
  </div>
<?php  } ?>

</div>

<?php } ?>