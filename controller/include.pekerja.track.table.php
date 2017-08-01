<?php 
    $data =$pekerja->tracking();
    if($data>0){
        foreach ($data as $value) {
          echo "
          <tbody>
          <td>".$value[0]."</td>
          <td>".$value[1]."</td>
          <td>".$value[2]."</td>
          <td>".$value[3]."</td>
        </tbody>";
        }
    }

?>    