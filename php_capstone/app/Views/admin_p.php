<?php
/**
 * Admin Projects page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-9-28
 */

require __DIR__ . '/includes/admin_p.css.php';
require __DIR__ . '/includes/flash.php';
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
        <h1 class="font-weight-bold">Projects</h1>
      </div>

      <div class="row">
        <a href="admin_add" class="btn btn-success">Add New Project</a>
        </form>  
        
        
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Project ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created Year</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($projects as $value) :?>
                        <tr>
                            <th scope="row"><?=e($value['id'])?></th>
                            <td><?=e($value['name'])?></td>
                            <?php if(e($value['category_id']) === '1') :?>
                                <td>Landscape</td>
                            <?php elseif(e($value['category_id']) === '2') :?>
                                <td>Artwork</td>
                            <?php elseif(e($value['category_id']) === '3') :?>
                                <td>Photo</td>
                            <?php elseif(e($value['category_id']) === '4') :?>
                                <td>IT</td>
                            <?php endif ;?>
                            <td><?=e($value['created_year'])?></td>
                            <td>
                                <form action="/admin_edit" method="get">
                                    <input type="hidden" name="project_id" value="<?=e($value['id'])?>">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>

                                <form action="/admin_p" method="POST">
                                  <input type="hidden" name = "delete_id" value = "<?=e($value['id'])?>">
                                  <button type="submit" 
                                          class="btn btn-danger"
                                          onclick="return confirm('Are you sure you want to delete this project?');">Delete</button>
                                </form>                                
                            </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>      
      </div>

    </div><!-- end of title -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>

  <?php require __DIR__ . '/includes/footer.inc.php';?>

</html>