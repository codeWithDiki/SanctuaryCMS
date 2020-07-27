<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-primary text-light">
        <b>Artikel Terpopuler</b>
      </div>
      <div class="card-body" style="padding: 0; max-height: 300px; overflow-x: auto;">

        <ul class="list-group">

            <?php 

              if($pop_artikel->status == true){
                  foreach ($pop_artikel->data as $key => $value) {
                      ?>
                        <li class="list-group-item">
                          <div class="media">
                            <a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><img src="<?=$value["thumbnail"]?>" class="mr-3" alt="<?=$value["judul"]?>" style="width:100px;height:100px;"></a>
                            <div class="media-body">
                              <h5 class="mt-0"><a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><?=$value["judul"]?></a></h5>
                              <hr>
                              <p>
                                <div><b>Kategori :</b> <a href="//<?=base_url("kategori/".$value['kategori']."/".preg_replace("/( )/", "-", $kategori->data[(int)$value["kategori"]]))?>"><span class="badge badge-success"><?=$kategori->data[(int)$value["kategori"]] ?></span></a>

                                 </div>
                                <div><b>Tags :</b> 
                                    <?php 
                                      $tag_a = json_decode($value["tag"]);
                                      for ($i=0; $i < count($tag_a); $i++) { 
                                        ?>
                                          <a href="//<?= base_url("tags/".(int)$tag_a[$i]."/".preg_replace("/( )/", "-", $tag->data[(int)$tag_a[$i]]))?>"><span class="badge badge-warning"><?=$tag->data[(int)$tag_a[$i]]; ?></span></a>
                                        <?php
                                      }
                                     ?>
                                 </div>
                              </p>
                                <div>
                                  <small><i class="fa fa-eye"></i> <?=$value["jml_view"]?></small> <small><i class="fa fa-thumbs-up"></i> <?=$value["jml_like"]?></small> <small><i class="fa fa-thumbs-down"></i> <?=$value["jml_dislike"]?></small> <small><i class="fa fa-comments"></i> <?=$value["jml_komen"]?></small> 
                                </div>
                                <div>
                                  <small><i class="fa fa-calendar"></i> <?=$value["tgl_kirim"]?></small> <br> <small><i class="fa fa-pencil"></i> <?=$users->data[$value["pengirim"]]?></small>
                                </div>
                            </div>
                          </div>
                        </li>
                      <?php
                    }  
                } else {
                  ?>
                  <li class="list-item">
                    <div class="alert alert-warning" style="margin:0;">
                      Data belum tersedia.
                    </div>
                  </li>
                  <?php
                }

             ?>
        </ul>
      </div>  
    </div>
  </div>
  <div class="col-md-5">
      <h3 class="display-4" style="font-size: 40px;"><?=$web_profile["nama_web"]?></h3>
      <p class="lead"><?=$web_profile["deskripsi_web"]?></p>
  </div>
  <div class="col-md-3">
    <div class="jumbotron" style="padding: 10px;width: 250px;height: 250px;">ADS 250x250</div>
  </div>
</div>
<hr>
<div class="container">
  <h3 align="center">Tags</h3>
    <hr>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php 

          for($i = 0; $i < count($tag_group);$i++){

        ?>
        <div class="carousel-item <?php if($i == 0){echo "active";} ?>">

          <div class="row">
            <?php 
              foreach ($tag_group[$i] as $key => $value) {
                ?>
              
            <div class="col">
              <div class="media">
              <a href=""></a><img src="<?=$value["thumbnail"]?>" class="rounded-circle mr-3" alt="<?=$value["nama"]?>" style="width:100px;height: 100px;">
              <div class="media-body">
                <h5 class="mt-0"><?=preg_replace("/(-)/", ' ', $value["nama"])?></h5>
                <p><?=$value["deskripsi"]?></p>
              </div>
            </div>
            </div>

            <?php 
            }
             ?> ?>
          </div>
        </div>

        <?php 
            }
         ?>
      </div>
    </div>
  </div>
<hr>
<div class="container" align="center">
  <div class="jumbotron" style="width: 720px;height: 120px;">ADS 720x120</div>
</div>
<div class="row">
    <div class="col-md-9">
      <hr>
      <h3 class="display-4" style="font-size: 30px;"><b><i>Artikel Terbaru</i></b></h3>
      <hr>
      
        

        <?php 
          if($artikel->status == true){
            foreach ($artikel->data as $key => $value) {
              ?>
              <div class="media">
                <a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><img src="<?=$value["thumbnail"]?>" class="mr-3" alt="<?=$value["judul"]?>" style="width:200px;height:200px;"></a>
                <div class="media-body">
                  <h5 class="mt-0"><a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><?=$value["judul"]?></a></h5>
                  <hr>
                  <p>
                    <div><b>Kategori :</b> <a href="//<?=base_url("kategori/".$value['kategori']."/".preg_replace("/( )/", "-", $kategori->data[(int)$value["kategori"]]))?>"><span class="badge badge-success"><?=$kategori->data[(int)$value["kategori"]] ?></span></a>

                      </div>
                      <div><b>Tags :</b> 
                      <?php 
                        $tag_a = json_decode($value["tag"]);
                        for ($i=0; $i < count($tag_a); $i++) { 
                        ?>
                          <a href="//<?= base_url("tags/".(int)$tag_a[$i]."/".preg_replace("/( )/", "-", $tag->data[(int)$tag_a[$i]]))?>.html"><span class="badge badge-warning"><?=$tag->data[(int)$tag_a[$i]]; ?></span></a>
                      <?php
                        }
                      ?>
                      </div>
                  </p>
                <div>
                  <small><i class="fa fa-eye"></i> <?=$value["jml_view"]?></small> <small><i class="fa fa-thumbs-up"></i> <?=$value["jml_like"]?></small> <small><i class="fa fa-thumbs-down"></i> <?=$value["jml_dislike"]?></small> <small><i class="fa fa-comments"></i> <?=$value["jml_komen"]?></small> 
                </div>
                <div>
                <small><i class="fa fa-calendar"></i> <?=$value["tgl_kirim"]?></small> <br> <small><i class="fa fa-pencil"></i> <?=$users->data[$value["pengirim"]]?></small>
                </div>
                </div>
              </div>
            <hr>
              <?php
            }
          }
         ?>
        <?php if($jml_page >= 1){ ?>
          <nav aria-label="...">
            <ul class="pagination justify-content-center">
              <li class="page-item <?php if((($current-1) < 1)?true:false){echo "disabled";} ?>">
                <a class="page-link" href="<?php if((($current-1) < 1)?true:false){echo "#";} else { echo "//".base_url("page/".($current-1));} ?>" tabindex="-1">Sebelumnya</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link"> Halaman ke-<?php if($current == 0){echo 1;} else { echo $current; } ?> dari <?=$jml_page?> Halaman. </a>
              </li>
              <li class="page-item <?php if((($current+1) > $jml_page)?true:false){echo "disabled";} ?>">
                <a class="page-link" href="<?php if((($current+1) > $jml_page)?true:false){echo "#";} else { echo "//".base_url("page/".($current+1));} ?>" tabindex="-1">Selanjutnya</a>
              </li>
            </ul>
          </nav>
        <?php } ?>
      
    </div>
    <div class="col">
      <div class="jumbotron" style="width: 250px;height: 250px;">
        ads 250x250
      </div>

    </div>
</div>