<?php
/**
 * Admin page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-9-27
 */

require __DIR__ . '/includes/admin.css.php';

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

    <div class="container title"><!-- start of title -->
      <div class="row">
        <h1 class="font-weight-bold">Dashboard</h1>
      </div>
    </div><!-- end of title -->

    <div class="container brief"><!-- start of brief -->
      <div class="row">
        <h2>Briefing</h2>
      </div>
      
      <div class="row">
        
        <div class="col font-weight-bold border border-right-0 th">Overview</div>
        <div class="col font-weight-bold border th">Projects</div>
      </div>

      <div class="row">
        <div class="col border-left border-right">
          <strong>Total Projects: </strong><?=$t_projects['COUNT(*)'];?>
        </div>

        <div class="col border-right">
          <strong>Project Categories: </strong><?=$t_cats['COUNT(*)'];?>
        </div>

      </div>

      <div class="row">
        <div class="col border-left border-right">
          <strong>Total Users: </strong><?=$t_users['COUNT(*)'];?>
        </div>

        <div class="col border-right">
          <strong>Lasted Project From: </strong><?=$l_date['MAX(created_year)'];?>
        </div>

      </div>

      <div class="row">
        <div class="col border border-top-0 border-right-0">
          <strong>Total Comments Received: </strong><?=$t_comments['COUNT(*)'];?>
        </div>
        <div class="col border border-top-0">
        <strong>Earliest Project From: </strong><?=$e_date['MIN(created_year)'];?>
        </div>

      </div>

    </div><!-- end of brief -->

    <div class="container log"><!-- start of log event -->

      <div class="row">
        <h2>Recent Log Events</h2>
      </div>

      <div class="row tc bg font-weight-bold border border-secondary">Log Entries</div>
      <div class="row tc border-left border-right"><?=e($log_events[0]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[1]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[2]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[3]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[4]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[5]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[6]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[7]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[8]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[9]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[10]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[11]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[12]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[13]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[14]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[15]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[16]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[17]['event'])?></div>
      <div class="row tc border-left border-right"><?=e($log_events[18]['event'])?></div>
      <div class="row tc bg"><?=e($log_events[19]['event'])?></div>

    </div><!-- end of log event -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>

  <?php require __DIR__ . '/includes/footer.inc.php';?>

</html>