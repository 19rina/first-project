    <!-- Menu serching -->
    


    <section class="brands">

    <div class="container">
      <div class="row p-0 text-center">
        
      </div>
    </div>
  </section>
  <!-- Akhir rands -->
  <!-- Features -->
  <section class="features bg-light p-5">
<div class="col-sm-12 col-md-4 offset-md-8">
   <?php echo form_open('bimbing/search') ?>
    <input type="text" name="keyword" placeholder="search">
    <input type="submit" name="search_submit" value="Cari">
  <?php echo form_close() ?>
  
</div>
    
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h3>Dosen Pembimbing</h3>
          <p>Nama - nama Dosen Pembimbing dan Jumlah Mahasiswa yang sudah dibimbing</p>
        </div>
      </div>
    </div>
  <table class="table">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Jumlah Mahasiswa</th>
            <th>Fakultas</th>
            <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
    <th>1</th>
            <td>Agus</td>
            <td>3</td>
            <td>Teknologi Informasi</td>
            <td><a href="<?php echo base_url () ;?>Bimbing/lihat"class="btn btn-primary">Lihat Detail</a></td>
        </tr> 
        <tr>
            <th>2</th>
            <td>Robert</td>
            <td>4</td>
            <td>Teknologi Informasi</td>
            <td><a href="<?php echo base_url () ;?>Bimbing/lihat_angga"class="btn btn-primary" >Lihat Detail</a> 
        </tr>
        <tr>
            <th>3</th>
            <td>Chusnul Chotimah, M.Pd</td>
            <td>4</td>
            <td>Pendidikan</td>
            <td><a href="<?php echo base_url () ;?>Bimbing/lihat_chusnul"class="btn btn-primary">Lihat Detail</a>   
        </tr>
        <tr>
            <th>4</th>
            <td>Didin Sirojudin, M.Pd.I</td>
            <td>3</td>
            <td>Pendidikan</td>
            <td><a href="<?php echo base_url () ;?>Bimbing/lihat_didin"class="btn btn-primary">Lihat Detail</a></td>     
            </tr>
       </tbody>
    </table>
   <div class="row mb-3">
        <div class="col text-center">
        <a href="<?php echo base_url () ;?>Bimbing/coba">Lihat Semua</a>
        
  </div>
    
</section>

  

  <!--Biografi -->
  <section class="designer p-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h3>Biografi Dosen </h3>
          <p>Tak kenal, maka tak sayang</p>
        </div>
      </div>

      <table border="0" cellpadding="0" cellspacing="0" class=" table">
  <tbody>
    <tr>
      <td>
      <p><a href="<?php echo base_url () ;?>Bimbing/profil"><strong>Agus Syifaun Najah, M.Kom.</strong></a><br>
      NIY/NIDN. UBU. 2009.08.55.201/0705088501<br>
      Fakultas Teknoligi Informasi<br>
      ipan@upmk.ac.id</p>
      </td>
      <td>
      <p><a href="<?php echo base_url () ;?>Bimbing/profil"><strong>Primaadi Airlangga, M.IT</strong></a><br>
      NIY/NIDN. UBU.2010.01.55.201/0718108602<br>
      Fakultas Teknoligi Informasi<br>
      ipan@upmk.ac.id</p>
      </td>
    </tr>
    <td>
      <p><a href="<?php echo base_url () ;?>Bimbing/profil"><strong>Chusnul Chotimah, M.Pd
</strong></a><br>
      NIY/NIDN. 2013.0101.0070/0728068103<br>
      Fakultas Pendidikan<br>
      ipan@upmk.ac.id</p>
      </td><td>
      <p><a href="<?php echo base_url () ;?>Bimbing/profil"><strong>Didin Sirojudin, M.Pd.I
</strong></a><br>
      NIY/NIDN. 2015.0101.0095/0723098103<br>
      Fakultas Pendidikan<br>
      ipan@upmk.ac.id</p>
      </td>
    </tbody>
</table>
<div class="row mb-3">
        <div class="col text-center">
        <a href="<?php echo base_url () ;?>Bimbing/profil">Lihat Semua</a>
        
  </div>
</div>
</section>

  <!-- Akhir Designer -->
  