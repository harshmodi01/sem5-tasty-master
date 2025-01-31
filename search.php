<?php
// Connect to your database
// $pdo = new PDO("mysql:host=localhost;dbname=newproject", "root", "");

// $query = $_GET['query'];
// // Implement your search logic and query to fetch search results

// // Assuming you have a table 'search_results' with a column 'result'
// // $searchQuery = "SELECT uname FROM users WHERE fname = :query";
// // $stmt = $pdo->prepare($searchQuery);
// // $stmt->bindValue(':query', $query);
// // $stmt->execute();
// $searchQuery = "SELECT * FROM users WHERE uname LIKE :query OR fname LIKE :query";
// $stmt = $pdo->prepare($searchQuery);
// $stmt->bindValue(':query', '%' . $query . '%');
// $stmt->execute();

// // $searchResults = $stmt->fetchAll(PDO::FETCH_COLUMN);
// // echo implode("\n", $searchResults);
// $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($searchResults);
?>

<?php
$dbConnection = mysqli_connect('localhost','root','','newproject');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $query = $_POST['query'];

  $sql = "SELECT * FROM users WHERE uname LIKE '%$query%'"; 
  
  $result = mysqli_query($dbConnection, $sql);

  $suggestionsHTML = '';
  while ($row = mysqli_fetch_assoc($result)) {
    $suggestionsHTML .= '<div class="suggestion-item">' . $row['uname'] . '</div>';
  }

  echo $suggestionsHTML;

  mysqli_close($dbConnection);
}
?>

