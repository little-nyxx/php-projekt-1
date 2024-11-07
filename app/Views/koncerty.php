<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <h1 class="text-center text-uppercase">Mortal joy tour</h1>
      <table class="table table-dark table-striped table-bordered">
        <tr class="row table-danger">
          <th class="col-2">Datum</th>
          <th class="col-6">Město</th>
          <th class="col-4">Místo konání</th> 
        </tr>
        <tr class="row">
          <td class="col-2">20.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb"></span> Sheffield</td>
          <td class="col-4">The Foundry</td>
        </tr>
        <tr class="row">
          <td class="col-2">21.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb-sct"></span> Glasgow</td>
          <td class="col-4">Saint Luke's</td>
        </tr>
        <tr class="row">
          <td class="col-2">22.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb"></span> Manchester</td>
          <td class="col-4">New Century Hall</td>
        </tr>
        <tr class="row">
          <td class="col-2">27.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb"></span> Bristol</td>
          <td class="col-4">SWX</td>
        </tr>
        <tr class="row">
          <td class="col-2">28.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb"></span> Brighton</td>
          <td class="col-4">CHALK</td>
        </tr>
        <tr class="row">
          <td class="col-2">29.9. 2024</td>
          <td class="col-6"><span class="fi fi-gb"></span> Birmingham</td>
          <td class="col-4">The Crossing</td>
        </tr>
      </table>
      </div>




    <?=$this->endSection(); ?>