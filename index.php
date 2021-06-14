<?
require_once ('config.php');
require_once ('function.php');
if($_POST['submit'] == 'submit'){
  $to      = 'psychologicalcamp@gmail.com';
  $subject = 'Նամակ կայքի օգտատերից';
  $message = $_POST['message'];
  $headers = 'From:'.$_POST['email'].''. "\r\n" .
               'Դիմող:'.$_POST['name'].''. "\r\n" .
               'X-Mailer: PHP/' . phpversion();
  
  mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="online training programs, Մեր նախագծերը, 1, 2, 3, 4, 5, 6, Life is Good, why us, Results &amp; Partnerships, ՄԵր գործընկերները, contact, Հետադարձ կապ, don't be shy">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Գլխավոր</title>
    <link rel="stylesheet" href="style/nicepage.css" media="screen">
    <link rel="stylesheet" href="style/main.css" media="screen">
    <link rel="stylesheet" href="style/mystyle.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="style/slider/flickity.css" media="screen">
        
    <script type="application/ld+json">{
        "@context": "http://creativepsy.am",
        "@type": "Organization",
        "name": "Creative Psychology LLC",
        "url": "index.php",
        "logo": "images/default-logo.png"
      }
    </script>
    <meta property="og:title" content="Գլխավոր">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
  </head>
  <body class="u-body">
    <?php 
      include("parts/navigation.php"); 
      include("parts/headSlider.php");
      include("parts/projectsBlock.php");
      include("parts/firstNewsblock.php");
      include("parts/secondNewsblock.php");
      include("parts/thirdNewsblock.php");
      include("parts/socialMedia.php");
      include("parts/partners.php");
      include("parts/contactUs.php");
      include("parts/footer.php");
    ?>
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      var campPhoto = document.getElementById("newsPhoto");
      var newCampPhoto = campPhoto.getAttribute('data-campphoto');
      document.getElementById("newsPhoto").style.backgroundImage = 'url('+newCampPhoto+')';

      var tourPhoto = document.getElementById("carousel_7f77");
      var newtourPhoto = tourPhoto.getAttribute('data-tourphoto');
      document.getElementById("carousel_7f77").style.backgroundImage = 'url('+newtourPhoto+')';
      
    </script>
  </body>
</html>