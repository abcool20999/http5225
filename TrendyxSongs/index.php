<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrendyxSongs</title>
  <link rel="stylesheet" href="./css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <?php include('inc/nav.php') ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5 mt-3 mb-5">
          RnB Songs Catalog
        </h1>
      </div>
    </div>
    <section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Artist</th>
                        <th scope="col">ReleaseDate</th>
                        <th scope="col">GrammyAwards</th>
                        <th scope="col">BillboardAwards</th>
                        <th scope="col">Ranking</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758290', 'UncSEka123W6pa', 'if0_35758290_songs');
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
                      '<td class="">' . $song['Title'] .'</td>
                      <td class="">'. $song['Artist'] .'</td>
                      <td class="">'. $song['ReleaseDate'] .'</td>
                      <td class="">'. $song['GrammyAwards'] .'</td>
                      <td class="">'. $song['BillboardAwards'] .'</td>
                      <td class="">'. $song['Ranking'] .'</td>
                      </tr> ';
                      
                      } ?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
    </div>

  </div>
  
</body>
</html>


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2024, All Right Reserved - Abraham Awotunde</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>
