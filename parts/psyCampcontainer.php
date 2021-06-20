<section class="container-fluid blocksColor">
    <div class="container" style="display: flex; flex-direction: column; max-width: 1164px;">
        <? getPsycampDesc($db_connect); ?>
        <h1 class="customWidgetitle customToppaddingH1 whiteColor">Հայտարարություններ</h1>
        <?php 
            include("./widgets/announcement.php"); 
        ?>
          <h1 class="customWidgetitle customToppaddingH1 whiteColor">Նորություններ</h1>
        <?php 
            include("./widgets/news.php"); 
        ?>
    </div>
</section>