<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John&age=35

// var_dump($_GET);
// echo isset($_GET['name']) ? $_GET['name'] : '';
// echo isset($_GET['age']) ? $_GET['age'] : '';

echo htmlspecialchars($_GET['name'] ??  '');
