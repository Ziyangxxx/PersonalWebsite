<?php

/**
 * Vali_contact Page
 * @file vali_contact.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-08-25
 * 
 */

if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/contact_post_controller.php';
    die;
}

// variables
$title = 'Validation';
$slug = 'vali';

/* require __DIR__ . '/../Views/vali_contact.php'; */