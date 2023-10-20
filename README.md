# Http Response Status Code PHP Package

## Description

The `HttpResponseStatusCode` PHP package is a utility for managing HTTP response status codes. It provides an enumeration of standard HTTP status codes along with convenient methods for working with them.

## Features

- Enumerates standard HTTP response status codes with both their names and values.
- Provides methods to retrieve codes, names, and options for HTTP status codes.
- Offers methods to check if a given code is a success (in the 200-299 range).

## Installation

You can install this package via Composer:

```bash
composer require intenave/http-response-status-codes
```

## Usage

Using the `HttpResponseStatusCode` package is straightforward. You can access the predefined HTTP status codes, check for success, and retrieve code information as needed.

### Getting a Specific Status Code

You can easily obtain a specific HTTP status code using the package:

```php
$status = HttpResponseStatusCode::OK(); // Get the "OK" (200) status code
```

### Checking if a Code is a Success

You can use the isSuccess() method to check if a code is a success (in the 200-299 range):

```php
$isSuccess = $status->isSuccess(); // Check if it's a success code (in the 200-299 range)

if ($isSuccess) {
    // Handle a successful response.
} else {
    // Handle a non-successful response.
}
```

### Retrieving Codes, Names, and Options

You can also retrieve information about the available status codes:

+ To get an array of all status codes (values only):
```php
$codes = HttpResponseStatusCode::codes();
```
+ To get an array of all status code names:
```php
$names = HttpResponseStatusCode::names();
```
+ To get an associative array of code names and values:
```php
$options = HttpResponseStatusCode::options();
```
These methods provide flexibility and ease of use when working with HTTP status codes in your PHP applications.


## Contributing
This package is maintained under the Intenave organization. If you'd like to contribute or report issues, please visit the [GitHub repository](https://github.com/intenave/http-response-status-codes).

## License
This package is open-source and available under the MIT License. See the [LICENSE](https://github.com/intenave/http-response-status-codes/blob/main/LICENSE.md) file for more information.