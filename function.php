<?
function Connect() {
    // Create connection
    $conn = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);
    mysqli_set_charset($conn, "utf8");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function getProjects($db_connect){
    $sql = "SELECT * FROM projects";
    $result = mysqli_query($db_connect, $sql);
    if (isset($result) and $result != NULL){
      while($data = mysqli_fetch_assoc($result)){
         echo '
         <div class="u-container-style u-list-item u-repeater-item" data-href="'.$data['link'].'">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img src="images/projectlogo/'.$data['photo'].'" alt="" style="width:100%;">
              </div>
         </div>
          ';  
    }
  }
}

function getPartners($db_connect){
    $sql = "SELECT * FROM partners";
    $result = mysqli_query($db_connect, $sql);
    if (isset($result) and $result != NULL){
      while($data = mysqli_fetch_assoc($result)){
         echo '
         <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-12 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <img src="images/'.$data['logo'].'" alt="" class="u-image u-image-contain u-image-default u-image-1">
                </div>
        </div>
          ';  
    }
  }
}

function getPartnersAbout($db_connect){
    $sql = "SELECT about_text FROM partners";
    $result = mysqli_query($db_connect, $sql);
    if (isset($result) and $result != NULL){
      while($data = mysqli_fetch_assoc($result)){
         echo '
         <p class="u-text u-text-2">'.$data['about_text'].'</p>
          ';  
    }
  }
}
?>