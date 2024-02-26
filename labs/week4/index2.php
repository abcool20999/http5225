<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-2 mt-3 mb-3">
                        PHP loops
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php
               function getUsers(){
                    $url = 'https://pixelr.io/wp-content/themes/pixelrio/humber/users.php';
                    $data = file_get_contents($url);
                    return $data;
                }

                $users = getUsers();

               
                for ($i = 0; $i < count ($users); $i++)
                {
                    echo '<h1>'. $users .'</h1>';
            
                }

               

                ?>
            </div>
        </div>
    </div>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-2 mt-3 mb-3">
            PHP Loops
          </h1>
        </div>
      </div>
      <div class="row">
        <?php
        function getUsers(){
          $url = 'https://pixelr.io/wp-content/themes/pixelrio/humber/users.php';
          $data = file_get_contents($url);
          return json_decode($data, true); // Assuming your users data is in JSON format
        }

        $users = getUsers();

        foreach ($users as $user) {
          ?>
          <div class="col-4 mb-3">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="User Image">
              <div class="card-body">
                <h5 class="card-title"><?php echo $user['name']; ?></h5>
                <p class="card-text"><?php echo $user['description']; ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
