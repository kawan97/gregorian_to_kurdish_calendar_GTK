<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gregorian To Kurdish Calendar Laravel Package</title>
    <style>
        body {
            margin: 20px;
            background-color: #212124;
            color: white;
        }
        a {
            color: white;
            font-weight: bold;
        }
        pre {
            background-color: black;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
        }  
    </style>
</head>
<body >

<h1>Gregorian To Kurdish Calendar Package ساڵنامەی زاینی بۆ ساڵنامەی کوردی</h1>
<p>
    <a href="https://packagist.org/packages/kawan/gregorian_to_kurdish_calendar">
        <img src="https://img.shields.io/packagist/dt/kawan/gregorian_to_kurdish_calendar" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/kawan/gregorian_to_kurdish_calendar">
        <img src="https://img.shields.io/packagist/v/kawan/gregorian_to_kurdish_calendar" alt="Latest Version">
    </a>
</p>

<h2>کوردی</h2>

<p>ئەم پاکێجە ڕێگەت پێدەدات بەروارەکان لە ساڵنامەی زاینیەوە بگۆڕیت بۆ ساڵنامەی کوردی.</p>

<h2>دامەزراندن</h2>

<p>دەتوانیت لە ڕێگەی کۆمپۆزەر پاکێجەکە دابمەزرێنیت بە جێبەجێکردنی ئەم فرمانەی خوارەوە:</p>

<pre><code>composer require kawan/gregorian_to_kurdish_calendar
</code></pre>

<h2>بەکارهێنان</h2>

<p>دوای دامەزراندن، دەتوانیت فەنکشنی <code>gregorian_to_kurdish($date,$format)</code> بەکاربهێنیت بۆ گۆڕینی بەروارەکان.فەنکشنەکە دوو پارامێتەر وەرئەگرێت: بەرواری گۆڕین و فۆرماتەکەی دەرچوونی خوازراو. </p>

<ul>
    <li><code>$date</code>: ئەو بەروارەی کە دەتەوێت بیگۆڕیت.</li>
    <li><code>$format</code>:</li>
    <li>   دەتوانیت پیتە ستانداردەکانی فۆرمات بەرواری پی ئێچ پی بەکاربهێنیت </li>
    <li>   (Y, y, m, d, l, F, a, G, g, H, h, i, s).</li>
    <li>   هەر پیتێکی تر وەک خۆی دەگەڕێتەوە.</li>
</ul>

<pre><code>$date = "2024-03-21";
$format = "Y-d-m";
echo gregorian_to_kurdish($date, $format);
</code></pre>

<h2>دیکۆمێنتەیشنی ناوخۆیی</h2>

<p>لە کاتی دامەزراندندا، ئەم پاکێجە ڕاوتی دیکۆمێنتەیشنی ناوخۆیی دروست دەکات. دەتوانن لەم لینکەدا دەستتان پێ بگات 
`your_domain/gtk-test`.</p>

<h2>نموونە</h2>

<p>لێرەدا چەند نموونەیەک لە بەکارهێنانی پاکێجەکە دەخەینەڕوو:</p>

<pre><code>// Example 1
$date = "2024-02-25";
$format = "d-m-Y | F";
echo gregorian_to_kurdish($date, $format);
//output:  "٥-١٢-٢٧٢٣ | ڕەشەمێ" 

// Example 2
$date = "2024-03-21 13:34:15";
$format = "Y - m - d | l | F | a |g:i:s";
echo gregorian_to_kurdish($date, $format);
//output: "٢٧٢٤ - ١ - ١ | ٥ شەمە | نەورۆز | د.ن |١:٣٤:١٥"
</code></pre>

<h2>English</h2>

<p>This package allows you to convert dates from the Gregorian calendar to the Kurdish calendar.</p>

<h2>Installation</h2>

<p>You can install the "kawan/gregorian_to_kurdish_calendar" package via Composer by running the following command:</p>

<pre><code>composer require kawan/gregorian_to_kurdish_calendar
</code></pre>

<h2>Usage</h2>

<p>After installation, you can use the <code>gregorian_to_kurdish($date,$format)</code> function to convert dates. The function accepts two parameters: the date to convert and the desired output format.</p>

<ul>
    <li><code>$date</code>: The date you want to convert.</li>
    <li><code>$format</code>: The desired output format. You can use standard PHP date format letters (Y, y, m, d, l, F, a, G, g, H, h, i, s). Any other letter will be returned as is.</li>
</ul>

<pre><code>$date = "2024-03-21";
$format = "Y-d-m";
echo gregorian_to_kurdish($date, $format);
</code></pre>

<h2>Local Documentation</h2>

<p>Upon installation, this package creates a local documentation route. You can access it at <code>your_domain/gtk-test</code>.</p>

<h2>Examples</h2>

<p>Here are some examples of using the package:</p>

<pre><code>// Example 1
$date = "2024-02-25";
$format = "d-m-Y | F";
echo gregorian_to_kurdish($date, $format);
//output:  "٥-١٢-٢٧٢٣ | ڕەشەمێ" 

// Example 2
$date = "2024-03-21 13:34:15";
$format = "Y - m - d | l | F | a |g:i:s";
echo gregorian_to_kurdish($date, $format);
//output: "٢٧٢٤ - ١ - ١ | ٥ شەمە | نەورۆز | د.ن |١:٣٤:١٥"
</code></pre>

<h2>License</h2>

<p>This package is open-source software licensed under the <a href="https://github.com/kawan97/gregorian_to_kurdish_calendar_GTK/blob/main/LICENSE">MIT License</a>.</p>

<h2>Support</h2>

<p>If you encounter any issues or have questions, feel free to open an issue on the <a href="https://github.com/kawan97/gregorian_to_kurdish_calendar_GTK/issues">GitHub repository</a>.</p>

<h2>Credits</h2>

<p>This package is developed and maintained by:</p>

<ul>
    <li><a href="https://github.com/kawan97">Kawan Pshtiwan</a></li>
</ul>

<p>And with contributions from our amazing community of open-source developers.</p>

<h2>Changelog</h2>

<p>See the <a href="https://github.com/kawan97/gregorian_to_kurdish_calendar_GTK/blob/main/CHANGELOG.md">CHANGELOG</a> file for information about the latest updates and changes.</p>

</body>
</html>
