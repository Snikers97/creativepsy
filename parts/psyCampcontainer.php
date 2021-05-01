<section class="container-fluid blocksColor">
    <div class="container" style="display: flex; flex-direction: column; max-width: 1164px;">
        <h1 class="customTitle customToppaddingH1 whiteColor">Հոգեբանական ճամբար</h1>
        <p class="customDesc customToppaddingH2 whiteColor" style="margin-bottom:40px;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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