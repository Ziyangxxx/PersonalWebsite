<?php
/**
 * Page to add a project
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-9-28
 */

require __DIR__ . '/includes/admin_p.css.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body>
    
    <?php require __DIR__ . '/includes/admin_nav.php'; ?>

    <div class="container"><!-- start of title -->
        <div class="row">
            <h1 class="font-weight-bold">Editing</h1>
        </div>
        <?=dc($one_project);dc($edit_id);dc($_POST);dc($_SERVER['REQUEST_METHOD'])?>

        <form action="/admin_edit"
              method="post"
              autocomplete="off"
              novalidate>

            <div class="form-group">
                <label for="name">Project Name: </label>
                <input type="text" 
                        class="form-control" 
                        id="name" 
                        name="name"
                        required
                        placeholder="Enter project Name"
                        value="<?=$one_project['name'] ?? ''?>">
                <span class="text-danger"><?=$errors['name'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="image">Image: </label>
                <input type="text" 
                        class="form-control" 
                        id="image" 
                        name="image"
                        required
                        placeholder="Enter image Name"
                        value="<?=$one_project['image'] ?? ''?>">
                <span class="text-danger"><?=$errors['image'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="category">Select Category:</label>
                <select class="form-control" id="category" name="category">
                    <option value="1">Landscape</option>
                    <option value="2">Artwork</option>
                    <option value="3">Photo</option>
                    <option value="4">IT</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tools">Tools: </label>
                <input type="text" 
                        class="form-control" 
                        id="tools" 
                        name="tools"
                        required
                        placeholder="Enter tools Names"
                        value="<?=$one_project['tools'] ?? ''?>">
                <span class="text-danger"><?=$errors['tools'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <input type="text" 
                        class="form-control" 
                        id="description" 
                        name="description"
                        required
                        placeholder="Add some description"
                        value="<?=$one_project['discription'] ?? ''?>">
                <span class="text-danger"><?=$errors['description'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="created_year">Created Year: </label>
                <input type="number" 
                        class="form-control" 
                        id="created_year" 
                        name="created_year"
                        required
                        placeholder="Enter year number"
                        value="<?=$one_project['created_year'] ?? ''?>">
                <span class="text-danger"><?=$errors['created_year'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="created_location">Created Location: </label>
                <input type="text" 
                        class="form-control" 
                        id="created_location" 
                        name="created_location"
                        required
                        placeholder="Enter country abbreviation. eg: CN, CA..."
                        value="<?=$one_project['created_location'] ?? ''?>">
                <span class="text-danger"><?=$errors['created_location'][0] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="status">Select Project Status: </label>
                <select class="form-control" id="status" name="status">
                    <option value="Finished">Finished</option>
                    <option value="In Progress">In Progress</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Done</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>

  <?php require __DIR__ . '/includes/footer.inc.php';?>

</html>