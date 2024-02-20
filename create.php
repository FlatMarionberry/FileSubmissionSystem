<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>File Submission System</title>
  </head>
    <body>
            <div class="container mt-5">
                <?php
                include("alert.php");
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Add File
                                    <a href="index.php " class="btn btn-danger float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST">
                                <div class="mb-3">
                                        <label>File Name</label>
                                        <input type="text" name="filename" class="form-control">
                                    </div><div class="mb-3">
                                        <label>Deadline</label>
                                        <input type="date" name="deadline" class="form-control">
                                    </div><div class="mb-3">
                                        <div class="mb-3">
                                            <button type="submit" name="post" class="btn btn-primary">Post File Resquest</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>