<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <?php
    $hony = array(
        'src' => 'obrazky/hony.jpg',
        'alt' => 'Hold On Now, Youngster!',
        'class' => 'img-fluid rounded-start'
    );
    $wabwad = array(
        'src' => 'obrazky/wabwad.jpg',
        'alt' => 'We Are Beautiful, We Are Doomed',
        'class' => 'img-fluid rounded-start'
    );
    $rib = array(
        'src' => 'obrazky/rib.jpg',
        'alt' => 'Romance Is Boring',
        'class' => 'img-fluid rounded-start'
    );
    $hellosadness = array(
        'src' => 'obrazky/hellosadness.jpg',
        'alt' => 'Hello Sadness',
        'class' => 'img-fluid rounded-start'
    );
    $noblues = array(
        'src' => 'obrazky/noblues.png',
        'alt' => 'No Blues',
        'class' => 'img-fluid rounded-start'
    );
    $sickscenes = array(
        'src' => 'obrazky/sickscenes.jpg',
        'alt' => 'Sick Scenes',
        'class' => 'img-fluid rounded-start'
    );
    $allhell = array(
        'src' => 'obrazky/allhell.jpeg',
        'alt' => 'All Hell',
        'class' => 'img-fluid rounded-start'
    ); 

    ?>
    <div class="my-2 mx-5">
        <h1 style="text-align: center;" class="my-3 text-uppercase">Alba</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($hony); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">Hold on Now, Youngster...</h5>
                  <p class="card-text">První album. Rok vydání 2008. Remaster 2018. Singly: Death to Los Campesinos!, My Year in Lists</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_kCcXhk7EeekNgBlkRQpNyTh0YPCzXFPE8&si=rABusvsE3Dy1p5vc" class="btn btn-danger" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($wabwad); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">We Are Beautiful, We Are Doomed</h5>
                  <p class="card-text">Druhé album. Rok vydání 2008. Vyšlo pár měsíců po prvním albu a má 32 minut.</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_m7EKbOco-dnOxhMDT_6JLITCTvOmXA_Ek&si=lpC51aNhaDBmpmqR" class="btn btn-info" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($rib); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">Romance Is Boring</h5>
                  <p class="card-text">Třetí album. Rok vydání 2010. Dle mého názoru nejlepší album. K albu vyšla "deluxe" verze s názvem All's well that ends s akustickými remixy 4 písniček. Singly: The Sea Is a Good Place to Think of the Future, There Are Listed Buildings, Romance Is Boring</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_m4UR9kPT7mqOGClkaGVX7oyeMCfDSoQ7I&si=nUkTc47nysOy9R-6" class="btn btn-warning" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($hellosadness); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">Hello Sadness</h5>
                  <p class="card-text">Čtvrté album. Vyšlo v roce 2011. Ve stejné době píšou písničky, co později vyšly v roce 2021 jako EP Whole Damn Body. Singly: By Your Hand, Hello Sadness, Songs About Your Girlfriend</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_ml_D6uKGqUoSn7bM9TJyHSD9-pROUJDgI&si=3pWSOdNh0qiSsKfN" class="btn btn-primary" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($noblues); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">NO BLUES</h5>
                  <p class="card-text">Páté album. Vyšlo v roce 2013. Je celkem mid. Singly: What Death Leaves Behind, Avocado Baby</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_mmEkvWYBwtghjF4V2J6CxQmxdhZyPIUJQ&si=r8Ebt2Jrx7giIDpE" class="btn btn-success" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($sickscenes); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">Sick Scenes</h5>
                  <p class="card-text">Šesté album. Vyšlo v roce 2017. Má docela epické písničky. Singly: I Broke Up in Amarante, 5 Flucloxacilin, The Fall of Home, Renato Dall'Ara (2008)</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_kh9LnCAVAuYeseIbKAIzk5PVd-S80iR8Y&si=vngsAdUbIPTv1M2f" class="btn btn-light" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="row g-0">
              <div class="col-6">
                <span class="fi fi-gb" style="z-index: 4; position: absolute; width: 50px; height: 50px;"></span>
                <?= img($allhell); ?>
              </div>
              <div class="col-6">
                <div class="card-body ps-3 pt-3">
                  <h5 class="card-title" style="font-weight: bold
                  ;">All Hell</h5>
                  <p class="card-text">Sedmé album. Vyšlo v roce 2024. Kompletně vytvořené a vydané kapelou na jejich vlastní record label Heart Swells. V Británii bylo první týden v tabulkách 14. Singly: Feast of Tongues, Psychic Wound, 0898 HEARTACHE, kms</p>
                  <a href="https://music.youtube.com/playlist?list=OLAK5uy_mCUQbZsEGcWu5VSd_PZm-xKXwqxDInUbI&si=Mw0wyL0NL9SRVZ9T" class="btn btn-danger" target="_blank">Poslechnout</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>

    <?=$this->endSection(); ?>