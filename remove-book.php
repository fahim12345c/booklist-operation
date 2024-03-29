<?php
// If id is set then remove book from file.
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $books = json_decode(file_get_contents('books.json'), true);

    // Remove book from array
    unset($books[$id]);

    // Update books.json
    $updatedBooksData = json_encode(array_values($books), JSON_PRETTY_PRINT);
    file_put_contents('assets/books.json', $updatedBooksData);

    // Redirect to index.php
    header('Location: index.php');
}
