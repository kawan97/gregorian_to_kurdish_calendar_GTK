# Gregorian To Kurdish Calendar Laravel Package
[![Total Downloads](https://img.shields.io/packagist/dt/kawan/gregorian_to_kurdish_calendar)](https://packagist.org/packages/kawan/gregorian_to_kurdish_calendar)
[![Latest Version](https://img.shields.io/packagist/v/kawan/gregorian_to_kurdish_calendar)](https://packagist.org/packages/kawan/gregorian_to_kurdish_calendar)

This package allows you to convert dates from the Gregorian calendar to the Kurdish calendar.


## Installation

You can install the "kawan/gregorian_to_kurdish_calendar" package via Composer by running the following command:

   ```php
    composer require kawan/gregorian_to_kurdish_calendar
   ```
## Usage

After installation, you can use the `gregorian_to_kurdish($date,$format)` function to convert dates. The function accepts two parameters: the date to convert and the desired output format.
   - `$date`: The date you want to convert.
   - `$format`: The desired output format. You can use standard PHP date format letters (Y, y, m, d, l, F, a, G, g, H, h, i, s). Any other letter will be returned as is.
```php
$date = "2024-03-21";
$format = "Y-d-m";
echo gregorian_to_kurdish($date, $format);
```

## Local Documentation

Upon installation, this package creates a local documentation route. You can access it at `your_domain/gtk-test`.

## Examples

Here are some examples of using the package:

```php
// Example 1
$date = "2024-02-25";
$format = "d-m-Y | F";
echo gregorian_to_kurdish($date, $format);
//output:  "٥-١٢-٢٧٢٣ | ڕەشەمێ" 

// Example 2
$date = "2024-03-21 13:34:15";
$format = "Y - m - d | l | F | a |g:i:s";
echo gregorian_to_kurdish($date, $format);
//output: "٢٧٢٤ - ١ - ١ | ٥ شەمە | نەورۆز | د.ن |١:٣٤:١٥"

## License

This package is open-source software licensed under the [MIT License](LICENSE).


## Support

If you encounter any issues or have questions, feel free to open an issue on the [GitHub repository](https://github.com/kawan97/gregorian_to_kurdish_calendar_GTK/issues).

## Credits

This package is developed and maintained by:

- [Kawan Pshtiwan](https://github.com/kawan97)

And with contributions from our amazing community of open-source developers.

## Changelog

See the [CHANGELOG](CHANGELOG.md) file for information about the latest updates and changes.
