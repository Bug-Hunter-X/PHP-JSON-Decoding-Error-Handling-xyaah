```php
$data = file_get_contents('data.txt');
$decoded = json_decode($data, true);

if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
    // Handle JSON decoding errors gracefully
    $errorMessage = 'Error decoding JSON: ' . json_last_error_msg();
    // Log the error, display a user-friendly message, or take other appropriate action.
    error_log($errorMessage);
    echo 'There was an error processing the data.'; // User friendly message
} else {
    // Access data only if decoding was successful
    if (isset($decoded['name'])) {
        echo $decoded['name'];
    } else {
        echo "'name' key not found";
    }
}
```