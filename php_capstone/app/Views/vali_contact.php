<?php

/**
 * Contact Validation page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */


if('POST' !== $_SERVER['REQUEST_METHOD']) {
    die('Unsupported request method.');
  }

if('POST' === $_SERVER['REQUEST_METHOD']) {
  require __DIR__ . '/../Controllers/contact_post_controller.php';
  die;
}