<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Subject Management'; ?>

<?php include(SHARED_SUBJECT_PATH . '/subject_header.php'); ?>
<?php include(SHARED_SUBJECT_PATH . '/subject_content.php'); ?>

<div id="content">
  <h2>Main Menu</h2>
  <ul>
    <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subject Home</a></li>
    <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Staff</a></li>
  </ul>
</div>

<?php include(SHARED_SUBJECT_PATH . '/subject_footer.php'); ?>

