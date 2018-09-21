<?php
  //Define('DB_USER','b1x5td1v');
  //Define('DB_PWD','Peru1982');
  //Define('DB_HOST','cloud70.hostgator.com');
  //Define('DB_NAME','b1x5td1v_UxDesign');

  Define('DB_USER','root');
  Define('DB_PWD','');
  Define('DB_HOST','localhost');
  Define('DB_NAME','UxDesign');




 $conn = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
 if(!$conn)die($conn->connect_error);
?>