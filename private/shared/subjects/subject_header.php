<?php if( !isset( $page_title )) { $page_title = "Subject Area"; } ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Globe Bank International Staff Portal - Secure banking management system">
  <title><?php echo hsc($page_title); ?></title>
  <link rel="stylesheet" href="<?php echo url_for("/stylesheets/staff.css"); ?> " media="all">
</head>
<body>
<header>
  <h1>
    <span class="logo-icon">🌐</span>
    <span class="brand-name">Globe Bank</span>
  </h1>
</header>

<navigation class="staff-nav">
  <ul>
    <li><a href="<?php echo url_for('index.php');?>">Home</a></li>
    <li><a href="<?php echo url_for('/about.php');?> ">Service List</a></li>
    <li><a href="<?php echo url_for('/docs.php')?>">Docs</a></li>
    <li><a href="<?php echo url_for('/staff/pages/index.php')?>">Staff</a></li>
  </ul>
</navigation>
