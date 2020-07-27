
    <div class="jumbotron" style="padding: 10px;">
      <h3 class="display-4" style="font-size: 70px;"><?=$web_profile["nama_web"]?></h3>
      <p class="lead" style="font-size: 40px;"><?=$web_profile["deskripsi_web"]?></p>
    </div>

<div align="center">
  <div style="width: 720px;height: 120px;" class="bg-secondary text-light">
    <h3>Iklan</h3>
  </div>
</div>

<hr>
<h1 style="font-size: 60px;"><i><b>Artikel Terbaru...</b></i></h1>
<hr>
<?php 
          if($artikel->status == true){
            foreach ($artikel->data as $key => $value) {
              ?>
              <div class="media" style="font-size: 45px;">
                <a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><img src="<?=$value["thumbnail"]?>" class="mr-3" alt="<?=$value["judul"]?>" style="width:400px;height:400px;"></a>
                <div class="media-body">
                  <h1 class="mt-0" style="font-size: 50px;"><a href="//<?=base_url("artikel/".$value['id']."/".preg_replace("/( )/", "-", $value["judul"]))?>.html" class="text-dark"><?=$value["judul"]?></a></h1>
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
            <ul class="pagination justify-content-center" style="font-size: 30px;">
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