<?php
// 5cs045-task1-2412988.php
include("db.php"); // real file on the server

$sql = "SELECT book_name, genre, price, date_of_release FROM books ORDER BY book_name";
$results = $mysqli->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Books list</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 100%; max-width: 900px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f2f2f2; }
  </style>
</head>
<body>
  <h1>Books</h1>
  <table>
    <tr><th>Book name</th><th>Genre</th><th>Price</th><th>Date of release</th></tr>
    <?php if ($results && $results->num_rows > 0): ?>
      <?php while ($row = $results->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['book_name']) ?></td>
          <td><?= htmlspecialchars($row['genre']) ?></td>
          <td>£<?php echo number_format($row['price'], 2); ?></td>
          <td><?php echo date("d/m/Y", strtotime($row['date_of_release'])); ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="4">No books found.</td></tr>
    <?php endif; ?>
  </table>
</body>
</html>
