<?php 
if(count($data) > 0){
  foreach ($data as $row) {
    echo "
<div class='container panel panel-default colaps'>
  <table class='tabpad'>
       <tr>
           <td class='text-left'>Judul</td>
           <td width='20'>:</td>
           <td class='text-left'>".$row['judul']."</td>
       </tr>  
       <tr>
           <td class='text-left'>Waktu upload</td>
           <td>:</td>
           <td class='text-left'>".date('d M Y, g.i', strtotime($row['tanggal']))."</td>
       </tr> 
    </table>         
    <p>Jika lowongan ini sudah terpenuhi, kamu bisa menghapusnya. <button class='btn btn-default'>Hapus</button>&nbsp;<button class='btn btn-default' data-toggle='collapse' data-target='#".$row['id_postingan']."'>Lihat</button></p></div>
    <div class='container table-responsive collapse' id='".$row['id_postingan']."'>
    <table class='table'>
      <th>No</th>
      <th>Employee Name</th>";
      if($row['status']=='pro'){echo "<th>CV</th>";}
      echo
      "<th>Date Submitted</th>
      <th>Detail Employee</th>
      <th>Status</th>
      <th>Action</th>
    ";
    $submit=$lowongan->select_by_postingan($row['id_postingan']);
    $i = 1;
    if(count($submit)>0){
      foreach ($submit as $rows) {

      $identitas = $pekerja->get_profile_id($rows['id_pekerja']);
      $file_name = $script->get_docs($rows['tanggal'],$identitas['data']['username'],'../../assets/docs/');
        echo " 
        <tbody>
          <form method='post'>
            <td> ".$i." </td>
            <td> ".$identitas['data']['nama']." </td>
            ";
            if($row['status']=='pro'){
              if(isset($file_name)){
                echo "<td>
                  <button>
                    <a href='../../assets/docs/".$file_name."' download>Click to Download!</a>
                  </button>
                </td>";                
              }else{
                echo "<td>
                  <button disabled='true'>
                    File Tidak Diupload
                  </button>
                </td>";
              }            
            }
            
            echo "
            <td>".$rows['tanggal']."</td>
            <td>
              <button type='button' class='btn btn-default' data-toggle='modal' data-target='#pekerja".$rows['id_pekerja']."'>Show Detail</button>
            </td>

              <input type=hidden name='id_pos' value='".$row['id_postingan']."'>
              <input type=hidden name='id_terima' value='".$rows['id_pekerja']."'>";
            $cari=$postingan->cek_submit($rows['id_pekerja'],$row['id_postingan']);
            if(count($cari)>0){
            echo "
              <td>Accepted</td>
              <td>            
              <input type='submit' name='terima' disabled='true' value='Terima'>";
            }else{
            echo "
              <td>Waiting</td>
              <td>            
              <input type='submit' name='terima' value='Terima'>";
            }

            echo "
              <button class='btn btn-default'>Tolak</button>
            </td>
          </form>
      </tbody>
      ";
    }      
  }

    echo "    
    </table>
  
  <br><br>
</div>";
}} 

  $daftar = $pekerja->get_by_pengiklan_submit($_SESSION['user']['id_pengiklan']);
  if(count($daftar)>0){
  foreach ($daftar as $x) {
    echo "
    <div id='pekerja".$x['id_pekerja']."' class='modal fade' role='dialog'>
      <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <!-- <button type='button' class='close' data-dismiss='modal'>&times;</button> -->
            <h4 class='modal-title'>Detail Akun</h4>
          </div>
          <div class='modal-body'>
          <!-- Photo Profile -->
           <div class='container-fluid'>
            <div class='col-sm-4'>
            <img src=" ?><?php
              if($x['foto_profile']!=null){
                echo '../pekerja/profile/'.$x['foto_profile'];
              }else{
                echo '../../assets/images/invest.PNG';
              } ?><?php echo " class='img-responsive center-block'>
            <br>
            </div>
            <div class='col-sm-8'>
                <table align='center'>
                    <tr>
                        <td class='text-left'>Nama </td>
                        <td style='width:20px'> : </td>
                        <td class='text-left'>".$x['nama']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Keahlian </td>
                        <td> : </td>
                        <td class='text-left'>".$x['keahlian']."</td>
                    </tr>
                </table>
            </div>
            
           </div>
           </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->  

    <div id='terima".$x['id_pekerja']."' class='modal fade' role='dialog'>
      <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <!-- <button type='button' class='close' data-dismiss='modal'>&times;</button> -->
            <h4 class='modal-title'>Detail Akun</h4>
          </div>
          <div class='modal-body'>
          <!-- Photo Profile -->
           <div class='container-fluid'>
            <div class='col-sm-4'>
            <img src=" ?><?php
              if($x['foto_profile']!=null){
                echo '../pekerja/profile/'.$x['foto_profile'];
              }else{
                echo '../../assets/images/invest.PNG';
              } ?><?php echo " class='img-responsive center-block'>
            <br>
            </div>
            <div class='col-sm-8'>
                <table align='center'>
                    <tr>
                        <td class='text-left'>Nama </td>
                        <td style='width:20px'> : </td>
                        <td class='text-left'>".$x['nama']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>e-mail </td>
                        <td> : </td>
                        <td class='text-left'>".$x['email']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Telephone </td>
                        <td> : </td>
                        <td class='text-left'>".$x['no_hp']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Social Media </td>
                        <td> : </td>
                        <td class='text-left'>".$x['sosmed']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Alamat </td>
                        <td> : </td>
                        <td class='text-left'>".$x['alamat']."</td>
                    </tr>
                </table>
            </div>
            
           </div>
           </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->
    ";}  
  }
  
?>