    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="ukuran500 tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-3">
                <img class="img-thumbnail img-responsive margin-b10" src="<?php echo base_url();?>assets/images/logo-flag.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-9">
                <?php foreach ($titlesistem as $t): ?>
                  <h3 class="judul-head"><?php echo $t['title']?></h3>
                  <p><i class="fa fa-cog fa-fw"></i> <?php echo $t['ket']?></p>             
                <?php endforeach ?>  
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
        
         
        <div class="ukuran600 tengah margin-b50">
          <div class="login-container">
          <div class="col s1">
            <img src="<?php echo base_url(); ?>assets/images/profil.png" width="250" height="250" alt="" > 
            </div>
                <div class="row h-100 align-items-right justify-content-left text-justify">
                        <div class="col-lg-8 align-self-baseline">
                            <h4 class ="text-white-75 font-weight-bold text-center ">Informasi Pribadi</h4>
                        <hr class="divider my-6">
                            <p class="text-white-75 font-weight-regular  mb-7">Nama: Ridho Yuli Firmansah <br> </p>
                            <p class="text-white-75 font-weight-regular  mb-7">Tempat Tanggal Lahir : Malang 05-July-1999<br></p>
                            <p class="text-white-75 font-weight-regular  mb-7">Jurusan : Teknik Informatika <br></p>
                            <p class="text-white-75 font-weight-regular  mb-7">Prodi  : Teknik Industri <br> </p>
                            <p class="text-white-75 font-weight-regular  mb-7">Angkatan : 2017.</p>
                    <hr class="divider my-6">
                    </div>
                </div>
          <!-- <?php foreach ($tentang as $te): ?>
            <h3 class="text-center text-warning"><?php echo $te['title'] ?></h3>
            <hr class="hr1" />
            <div class="tentang">
            <p>
              <?php echo $te['ket'] ?>
            </p>
            </div>
            <?php endforeach ?> -->
          </div>
        </div>
        </div>
      </div>
    </div>