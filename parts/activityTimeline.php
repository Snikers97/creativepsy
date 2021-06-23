<section class="container-fluid">
<div class="container" style="display: flex; flex-direction: column; max-width: 1164px;">
<? getTimelineDesc($db_connect); ?>
  <div id="jtimeline-demo" class="jtimeline">
    <ul class="jtimeline-events" id="timeLineUl">
      <? getactivityTimelinedots($db_connect); ?>
    </ul>
  </div>
</div>
<div id="prop"></div>

  <div id="popUp1" class="scroll mainPopup">
        <section class="container-fluid">
            <div class="container" style="display: flex; flex-direction: column; max-width: 1164px;">
                    <h1 class="customTimelineTitle">Անձնային աճ։ Ճանաչիր և ակտիվացրու ներքին ռեսուրսներդ</h1>
                    <button type="button" id="close_button" title="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
                        <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                      </svg>
                    </button>
                    <div class="col-xxl-12">
                        <img class="inPopupImage"src="/images/pexels-photo-3906049.jpeg" alt="">
                    </div>
                    <div class="col-xxl-12 inPopupText">
                      <p>
                      What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                      <p>
                      What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                    </div>
                    <div class="fotorama col-xxl-12" data-nav="thumbs" data-loop="true">
                        <img src="https://s.fotorama.io/1.jpg">
                        <img src="https://s.fotorama.io/2.jpg">
                        <img class="inPopupImageScroll"src="/images/pexels-photo-3906049.jpeg" alt="">
                        <img class="inPopupImageScroll"src="/images/pexels-photo-3906049.jpeg" alt="">
                        <img class="inPopupImageScroll"src="/images/pexels-photo-3906049.jpeg" alt="">
                        <img class="inPopupImageScroll"src="/images/pexels-photo-3906049.jpeg" alt="">
                    </div>
                    <div class="col-xxl-12 inPopupText">
                      <p>
                      What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                    </div>
            </div>
        </section>
    </div>
  </div>
</section>