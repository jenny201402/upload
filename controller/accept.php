<?php
	if ($_FILES["file"]["error"] > 0){
      echo "Error: " . $_FILES["file"]["error"] . "<br />";
    } else {
      //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
      //echo "Type: " . $_FILES["file"]["type"] . "<br />";
      //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
      //echo "Stored in: " . $_FILES["file"]["tmp_name"];
      $fileName = $_FILES["file"]["name"];
      if( $fileName == "001.png" ){
        echo json_encode([
                'status'    => 1,
                'message'   => "success",
                'url'       => "http://admin.mekxfj.com/data/gift_tmp/1539791597001.png",
                'name'      => $fileName."\n",
              ]);
      } else if( $fileName == "002.png" ){
        echo json_encode([
                'status'    => 1,
                'message'   => "success",
                'url'       => "http://admin.mekxfj.com/data/gift_tmp/1539792362002.png",
                'name'      => $fileName."\n",
              ]);
      } else {
        echo json_encode([
                'status'    => 1,
                'message'   => "success",
                'url'       => "http://admin.mekxfj.com/data/gift_tmp/1539792405003.png",
                'name'      => $fileName."\n",
              ]);
      }
     }