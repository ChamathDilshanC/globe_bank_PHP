<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Staff Management'; ?>

<?php include(SHARED_STAFF_PATH . '/staff_header.php'); ?>
<?php include(SHARED_STAFF_PATH . '/staff_content.php'); ?>


<div id="content">
  <h2>Main Menu</h2>
  <ul>
    <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Staff Home</a></li>
    <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
  </ul>
</div>

<?php include(SHARED_STAFF_PATH . '/staff_footer.php'); ?>


