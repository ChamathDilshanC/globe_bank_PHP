<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET["id"]) ? $_GET["id"] : '1';

$id = $_GET["id"] ?? "1"; // PHP > 7.0
?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_STAFF_PATH . '/staff_header.php'); ?>

<div id="content">
  <h2>Page Details</h2>
  <p><strong>Page ID:</strong> <?php echo $id; ?></p>

  <h3>URL Encoding Examples:</h3>
  <a href="show.php?name=<?php echo u('John Doe'); ?>">Link with Name</a><br />
  <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link with Company</a><br />
  <a href="show.php?query=<?php echo u('!#*?'); ?>">Link with Special Characters</a><br />

  <br/>
  <a href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo;Back to Pages List</a>
</div>

<?php include(SHARED_STAFF_PATH . '/staff_footer.php'); ?>
