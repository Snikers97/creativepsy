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

function getTopNewsPsyCamp($db_connect){
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
        <p class="u-align-center-xs u-text u-text-black u-text-4 whiteColor">'.$data['name'].'</p>
        <a href="#" class="u-active-white u-btn u-btn-rectangle u-button-style u-custom-font u-heading-font u-hover-white u-palette-3-base u-radius-0 u-btn-1">Կարդալ Ավելին</a>
      </div>
      </div>
      <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-32 u-image-1" id="newsPhoto" data-campphoto="/images/'.$data['mainPhoto'].'">
        <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
      </div>
      ';
    }
}
}

function getNewsPsyCamp($db_connect){
  $sql = "SELECT * FROM `news` as n LEFT JOIN `user` as u ON n.autorID = u.id WHERE n.category = 'psycamp'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $short_desc = addslashes($data['short_desc']);
      echo'
      <div class="newsItem">
      <img src="/images/'.$data['mainPhoto'].'" alt="" class="image">
      <div class="shortNewstext">
      <h3 class="whiteColor">'.$data['title'].'</h3>
          <p class="whiteColor">'.$short_desc.'</p>
          <a href="#" class="button">Կարդալ Ավելին</a>
      </div>
  </div>
      ';
    }
}
}
function getTopNewsPsytour($db_connect){
  $sql = "SELECT * FROM `news` as n LEFT JOIN `user` as u ON n.autorID = u.id WHERE n.category = 'psytour' AND n.top = 1";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $title = explode(',', $data['title']);
      $short_desc = addslashes($data['short_desc']);
      echo'
      <section class="u-align-center-xs u-clearfix u-image u-section-4 blocksColor-2" id="carousel_7f77" data-image-width="1000" data-image-height="1500" data-tourphoto="/images/test/'.$data['mainPhoto'].'">
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="tourTopNewsBlock">
          <h2 class="u-text u-text-body-alt-color u-text-3 textColor" style="margin: unset;">'.$data['title'].'</h2>
          <p class="u-text u-text-body-alt-color u-text-4 textColor" style="margin: unset;">'.$data['short_desc'].'</p>
          <p class="u-align-center-xs u-text u-text-black u-text-4" style="margin: unset; margin-top:20px;">'.$data['name'].'</p>
          <a href="#" class="u-active-white u-btn u-btn-rectangle u-button-style u-custom-font u-heading-font u-hover-grey-25 u-palette-3-base u-radius-0 u-btn-1" style="margin:unset; margin-top: 30px;">Կարդալ Ավելին</a>
        <div>
        </div>
       </section>
      ';
    }
}
}
function getTopNewsshuffle($db_connect){
  $sql = "SELECT * FROM `news` as n LEFT JOIN `user` as u ON n.autorID = u.id WHERE n.category = 'podcast' AND n.top = 1";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $title = explode(',', $data['title']);
      $short_desc = addslashes($data['short_desc']);
      echo'
      <div class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-42 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-center-xs u-text u-text-1 whiteColor">'.$data['title'].'</h2>
                  <p class="u-align-center-xs u-text u-text-2 whiteColor">'.$data['short_desc'].'</p>
                  <p class="u-align-center-xs u-text u-text-black u-text-3 whiteColor">'.$data['name'].'</p>
                  <a href="#" class="u-active-white u-btn u-btn-rectangle u-button-style u-custom-font u-heading-font u-hover-white u-palette-3-base u-radius-0 u-btn-1">Կարդալ Ավելին</a>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-18 u-image-1" id="shufflePhoto" data-campphoto="/images/'.$data['mainPhoto'].'">
                <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
              </div>
      ';
    }
}
}

function getStaff($db_connect){
  $sql = "SELECT * FROM `staff`";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      if($data['id']<=3){
      switch($data['id']){
        case($data['id']%2 != 0):
        echo'
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-0 card-block">
        <div class="card border-0 rounded-0">
            <img src="/images/ourTeam/'.$data['image'].'" class="card-img-top rounded-0" alt="...">
            <div class="card-body text-center cardInfoblock w-100 h-100">
                <h5 class="card-title membersName">'.$data['name'].'</h5>
                <p class="card-text position">'.$data['role'].'</p>
                <p class="card-text aboutMember">'.$data['info'].'</p>
                <div class="socialIcon">
                                    <a href="'.$data['fb'].'">
                                        <img src="/images/socialIcons/facebook.png" alt="">
                                    </a>
                                    <a href="'.$data['insta'].'">
                                        <img src="/images/socialIcons/instagram.png" alt="">
                                    </a>
                                    <a href="'.$data['telegram'].'">
                                        <img src="/images/socialIcons/telegram.png" alt="">
                                    </a>
                                </div>
            </div>
        </div>
        </div>
        ';
        break;
        case($data['id']%2 == 0):
        echo'
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-0 card-block">
        <div class="card border-0 rounded-0">
            <div class="card-body text-center cardInfoblock w-100 h-100">
                <h5 class="card-title membersName">'.$data['name'].'</h5>
                <p class="card-text position">'.$data['role'].'</p>
                <p class="card-text aboutMember">'.$data['info'].'</p>
                <div class="socialIcon">
                    <a href="'.$data['fb'].'">
                        <img src="/images/socialIcons/facebook.png" alt="">
                    </a>
                    <a href="'.$data['insta'].'">
                        <img src="/images/socialIcons/instagram.png" alt="">
                    </a>
                    <a href="'.$data['telegram'].'">
                        <img src="/images/socialIcons/telegram.png" alt="">
                    </a>
                </div>
            </div>
            <img src="/images/ourTeam/'.$data['image'].'" class="card-img-bottom rounded-0" alt="...">
        </div>
        </div>
        ';
        break;
      }
    }elseif($data['id']>3){
      switch($data['id']){
        case($data['id']%2 == 0):
        echo'
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-0 card-block">
        <div class="card border-0 rounded-0">
            <img src="/images/ourTeam/'.$data['image'].'" class="card-img-top rounded-0" alt="...">
            <div class="card-body text-center cardInfoblock w-100 h-100">
                <h5 class="card-title membersName">'.$data['name'].'</h5>
                <p class="card-text position">'.$data['role'].'</p>
                <p class="card-text aboutMember">'.$data['info'].'</p>
                <div class="socialIcon">
                                    <a href="'.$data['fb'].'">
                                        <img src="/images/socialIcons/facebook.png" alt="">
                                    </a>
                                    <a href="'.$data['insta'].'">
                                        <img src="/images/socialIcons/instagram.png" alt="">
                                    </a>
                                    <a href="'.$data['telegram'].'">
                                        <img src="/images/socialIcons/telegram.png" alt="">
                                    </a>
                                </div>
            </div>
        </div>
        </div>
        ';
        break;
        case($data['id']%2 != 0):
        echo'
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-0 card-block">
        <div class="card border-0 rounded-0">
            <div class="card-body text-center cardInfoblock w-100 h-100">
                <h5 class="card-title membersName">'.$data['name'].'</h5>
                <p class="card-text position">'.$data['role'].'</p>
                <p class="card-text aboutMember">'.$data['info'].'</p>
                <div class="socialIcon">
                    <a href="'.$data['fb'].'">
                        <img src="/images/socialIcons/facebook.png" alt="">
                    </a>
                    <a href="'.$data['insta'].'">
                        <img src="/images/socialIcons/instagram.png" alt="">
                    </a>
                    <a href="'.$data['telegram'].'">
                        <img src="/images/socialIcons/telegram.png" alt="">
                    </a>
                </div>
            </div>
            <img src="/images/ourTeam/'.$data['image'].'" class="card-img-bottom rounded-0" alt="...">
        </div>
        </div>
        ';
        break;
      }
    }
        
      }
     
    }
}

function getOurTeamBlockDesc($db_connect){
  $sql = "SELECT * FROM `block_description` WHERE category = 'Team'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $desc = addslashes($data['description']);
      echo'
     <h1 class="customTitle customToppaddingH1 whiteColor">'.$data['title'].'</h1>
     <p class="customDesc customToppaddingH2 whiteColor">'.$desc.'</p>
      ';
    }
}
}

function getTimelineDesc($db_connect){
  $sql = "SELECT * FROM `block_description` WHERE category = 'Timeline'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $desc = addslashes($data['description']);
      echo'
      <h3 class="customTitle customToppaddingH1 textColor h2Title">'.$data['title'].'</h3>
      <p class="customDesc customToppaddingH2 textColor">'.$desc.'</p>
      ';
    }
}
}

function getPartnersDesc($db_connect){
  $sql = "SELECT * FROM `block_description` WHERE category = 'partners'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $desc = addslashes($data['description']);
      echo'
      <h2 class="u-text u-text-1">'.$data['title'].'</h2>
      <p class="u-text u-text-2">'.$desc.'</p>
      ';
    }
}
}

function getProjectsDesc($db_connect){
  $sql = "SELECT * FROM `block_description` WHERE category = 'partners'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $desc = addslashes($data['description']);
      echo'
      <h2 class="u-text u-text-1 textColor">'.$data['title'].'</h2>
      <p class="u-text u-text-2 textColor">'.$desc.'</p>
      ';
    }
}
}

function getPsycampDesc($db_connect){
  $sql = "SELECT * FROM `block_description` WHERE category = 'psycamp'";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
      $desc = addslashes($data['description']);
      echo'
      <h1 class="customTitle customToppaddingH1 whiteColor">'.$data['title'].'</h1>
      <p class="customDesc customToppaddingH2 whiteColor" style="margin-bottom:40px;">'.$desc.'</p>
      ';
    }
}
}

function getpsycampAnnouncement($db_connect){
  $sql = "SELECT * FROM project_announcement LIMIT 6";
  $result = mysqli_query($db_connect, $sql);
  if (isset($result) and $result != NULL){
    while($data = mysqli_fetch_assoc($result)){
        if($data['id'] == "1" OR $data['id'] == "6"){
          echo'
          <div class="col-xl-6 announcement-item-big-tile p-0" id="announTilebg" data-background="/images/test/'.$data['announcement_mainPhoto'].'">
                <div class="announTitleBlock-big">
                    <h6 class="announTitle">'.$data['announcement_tilte'].'</h6>
                    <p>'.$data['announcement_short_desc'].'</p>
                </div>
          </div>
          ';
        }else{
          echo'
          <div class="col-xl-3 announcement-item p-0" id="announTilebg" data-background="/images/test/'.$data['announcement_mainPhoto'].'">
            <div class="announTitleBlock">
              <h6 class="announTitle">'.$data['announcement_tilte'].'</h6>
            </div>
          </div>
          ';
        }
    }
}
}
?>