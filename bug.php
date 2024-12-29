```php
$data = file_get_contents('data.txt');
$decoded = json_decode($data, true);

if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
    // Handle JSON decoding errors
    echo 'Error decoding JSON: ' . json_last_error_msg();
}

// Access data
echo $decoded['name'];
```