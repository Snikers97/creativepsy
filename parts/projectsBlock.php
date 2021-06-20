<section class="u-align-center u-clearfix u-section-2 blocksColor-2" id="carousel_68e0">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
       <? getProjectsDesc($db_connect); ?>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <? getProjects($db_connect);  ?>
          </div>
        </div>
      </div>
    </section>