<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<?php 
    $allhell = array(
        'src' => 'obrazky/allhell.jpeg',
        'alt' => 'All Hell',
        'class' => 'w-100 img-fluid mw-100'
    );
    $hellosadness = array(
        'src' => 'obrazky/hellosadness.jpg',
        'alt' => 'Hello Sadness',
        'class' => 'w-100 img-fluid mw-100'
    );
    $rib = array(
        'src' => 'obrazky/rib.jpg',
        'alt' => 'Romance Is Boring',
        'class' => 'w-100 img-fluid mw-100'
    );
    $wabwad = array(
        'src' => 'obrazky/wabwad.jpg',
        'alt' => 'We Are Beautiful, We Are Doomed',
        'class' => 'w-100 img-fluid mw-100'
    );
    ?>
    
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="row g-0">
                  <div class="col-6">
                    <?php echo img($allhell); ?>
                  </div>
                  <div class="col-6">
                    <div class="card-body w-100 bg-danger h-100 pt-3 ps-5">
                      <h4 class="card-title" style="font-weight: bold
                      ;">Holy Smoke (2005)</h5>
                      <h5 class="card-title pb-2">All Hell</h6>
                      <a href="https://music.youtube.com/watch?v=QD9AYQ8dyvs&si=65h8ZmQrQxg2cLiy" class="btn btn-dark" target="_blank">Poslechnout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="row g-0">
                  <div class="col-6">
                    <?php echo img($hellosadness);?>
                  </div>
                  <div class="col-6">
                    <div class="card-body w-100 bg-primary h-100 pt-3 ps-5">
                      <h4 class="card-title" style="font-weight: bold
                      ;">Baby I Got the Death Rattle</h5>
                      <h5 class="card-title pb-2">Hello Sadness</h6>
                      <a href="https://music.youtube.com/watch?v=78HYOK3R0Eo&si=N3PagFrFevDsjzhP" class="btn btn-dark" target="_blank">Poslechnout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="row g-0">
                  <div class="col-6">
                    <?php echo img($rib); ?>
                  </div>
                  <div class="col-6">
                    <div class="card-body w-100 bg-warning h-100 pt-3 ps-5">
                      <h4 class="card-title" style="font-weight: bold
                      ;">A Heat Rash In The Shape Of The Show Me State; or, Letters from Me to Charlotte</h5>
                      <h5 class="card-title pb-2">Romance Is Boring</h6>
                      <a href="https://music.youtube.com/watch?v=GE_6mdh2imw&si=w0qqmfGJVeUap7BO" class="btn btn-dark" target="_blank">Poslechnout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="row g-0">
                  <div class="col-6">
                    <?php echo img($wabwad); ?>
                  </div>
                  <div class="col-6">
                    <div class="card-body w-100 bg-info h-100 pt-3 ps-5">
                      <h4 class="card-title" style="font-weight: bold
                      ;">Miserabilia</h5>
                      <h5 class="card-title pb-2">We Are Beautiful, We Are Doomed</h6>
                      <a href="https://music.youtube.com/watch?v=C54gb535NL4&si=Y2tRiOXk64-7nhTH" class="btn btn-dark" target="_blank">Poslechnout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="row g-0">
                  <div class="col-6">
                    <?php echo img($wabwad); ?>
                  </div>
                  <div class="col-6">
                    <div class="card-body w-100 bg-info h-100 pt-3 ps-5">
                      <h4 class="card-title" style="font-weight: bold
                      ;">Ways To Make It Through The Wall</h5>
                      <h5 class="card-title pb-2">We Are Beautiful, We Are Doomed</h6>
                      <a href="https://music.youtube.com/watch?v=5jaOAWBIX70&si=cyBaAm_roX5ImqrQ" class="btn btn-dark" target="_blank">Poslechnout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>




    <?=$this->endSection(); ?>