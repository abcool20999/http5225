<?php 
      $connect = mysqli_connect('localhost', 'root', 'root', 'TrendySongs');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM students';

      $students = mysqli_query($connect, $query);
      // echo '<pre>';
      // echo print_r($students);
      // echo '</pre>';
    ?>

 <section class="position-relative bg-dark py-24 py-md-40">
  <div class="container pb-24 border-bottom">
    <div class="table-responsive mb-20">
      <table class="table table-dark table-borderless" style="min-width: max-content;">
        <thead>
          <tr><th class="pb-12 text-secondary-light">Title</th><th class="pb-12 text-secondary-light">Artist</th><th class="pb-12 text-secondary-light">ReleaseDate</th><th class="pb-12 text-secondary-light">GrammyAwards</th><th class="pb-12 text-secondary-light">BillboardAwards</th></tr>
        </thead>
        <tbody>
     <?php 
      $connect = mysqli_connect('localhost', 'root', 'root', 'TrendySongs');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM Songs JOIN Rankings ON Songs.SongID = Rankings.SongID JOIN Awards ON Songs.ArtistID = Awards.ArtistID;';

      $result = mysqli_query($connect, $query);
      ?>
      <div class="row">
      <?php
      foreach($result as $song){      
      echo      
      '<td class="py-4 bg-secondary">' . $song['Title'] .'</td>
      <td class="py-4 bg-secondary">'. $song['Artist'] .'</td>
      <td class="py-4 bg-secondary">'. $song['ReleaseDate'] .'</td>
      <td class="py-4 bg-secondary">'. $song['GrammyAwards'] .'</td>
      <td class="py-4 bg-secondary">'. $song['BillboardAwards'] .'</td>

    

    </tr> ';
      
       } ?> 