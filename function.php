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

function getNewsPsyCamp($db_connect){
  $sql = "SELECT * FROM `news` as n LEFT JOIN `user` as u ON n.autorID = u.id WHERE n.category = 'psycamp' AND n.top = 1";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $title = explode(',', $data['title']);
      $short_desc = addslashes($data['short_desc']);
      echo'
      <div class="u-align-center-sm u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-28 u-layout-cell-1">
      <div class="u-container-layout u-valign-middle-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
        <h1 class="u-align-center-xs u-text u-text-palette-3-base u-text-1">'.$title[0].'</h1>
        <h5 class="u-align-center-xs u-text u-text-2 whiteColor">'.$title[1].'</h5>
        <p class="u-align-center-xs u-text u-text-3 whiteColor">'.$short_desc.'</p>
        <p class="u-align-center-xs u-text u-text-black u-text-4 whiteColor">Author: '.$data['name'].'</p>
        <a href="#" class="u-active-white u-btn u-btn-rectangle u-button-style u-custom-font u-heading-font u-hover-white u-palette-3-base u-radius-0 u-btn-1">Կարդալ Ավելին</a>
      </div>
      </div>
      <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-32 u-image-1" id="newsPhoto" data-photo="/images/'.$data['mainPhoto'].'">
        <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
      </div>
      ';
    }
}
}
?>