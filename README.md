# PHP JSON Decoding Error Handling

This example demonstrates a common issue in PHP when decoding JSON data: how to differentiate between valid JSON data that happens to be NULL and actual JSON decoding errors.

The file `bug.php` shows the problematic code, where a failure to decode will result in a silent error.  The file `bugSolution.php` offers a solution using `json_last_error()` to properly handle errors.