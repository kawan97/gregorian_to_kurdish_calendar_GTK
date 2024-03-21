<?php

function gtk_test()
{
   return 'test';
}



function gregorian_to_kurdish($date, $format = 'Y-m-d')
{
   //convert $date to date format
   $date = date(($date));
  //  dd($date);
   $result = '';
   //foreach for $format
   // dd(str_split($format));
   foreach (str_split($format) as $char) {
      //cretea switch case for $char
      switch ($char) {
         case 'Y':
            //initialize kurdish year
            $kurdish_year = get_kurdish_year_number($date);
            $result .= translate_number_to_kurdish($kurdish_year);
            break;
         case 'y':
            //initialize kurdish year
            $kurdish_year = get_kurdish_year_number($date);
            //get last 2 digits of kurdish year
            $kurdish_year = substr($kurdish_year, -2);
            $result .= translate_number_to_kurdish($kurdish_year);
            break;
         case 'm':
            //initialize kurdish month number
            $kurdish_month_number = get_kurdish_month_nummber($date);
            $result .= translate_number_to_kurdish($kurdish_month_number);
            break;
         case 'd':
            //initialize kurdish day number
            $kurdish_day_number = get_kurdish_day_number($date);
            $result .= translate_number_to_kurdish($kurdish_day_number);
            break;
         case 'l':
            //initialize kurdish day name
            $kurdish_day_name = get_kurdish_day_name($date);
            $result .= $kurdish_day_name;
            break;
         case 'F':
            //initialize kurdish month name
            $kurdish_month_name = get_kurdish_month_nummber($date);
            //get kurdish month name
            $kurdish_month_name = get_kurdish_month_name($kurdish_month_name);
            $result .= $kurdish_month_name;
            break;
          case 'a':
            //initialize kurdish am and pm
            $kurdish_am_pm = get_kurdish_am_and_pm($date);
            $result .= $kurdish_am_pm;
            break;
          case 'G':
            //initialize kurdish hour
            $kurdish_hour = get_hour_24($date);
            $result .= translate_number_to_kurdish($kurdish_hour);
            break;
          case 'g':
            //initialize kurdish hour
            $kurdish_hour = get_hour_12($date);
            $result .= translate_number_to_kurdish($kurdish_hour);
            break;
          case 'h':
            //initialize kurdish hour
            $kurdish_hour = get_hour_12($date);
            $result .= translate_number_to_kurdish($kurdish_hour);
            break;
          case 'H'
            //initialize kurdish hour
            $kurdish_hour = get_hour_24($date);
            $result .= translate_number_to_kurdish($kurdish_hour);
            break;
          case 'i':
            //initialize kurdish minute
            $kurdish_minute = get_minute($date);
            $result .= translate_number_to_kurdish($kurdish_minute);
            break;
          case 's':
            //initialize kurdish second
            $kurdish_second = get_second($date);
            $result .= translate_number_to_kurdish($kurdish_second);
            break;
         default:
            $result .= $char;
            break;
      }
   }
   return $result;
}

function translate_number_to_kurdish($number)
{
  //convert number to integer
  $number = (int)$number;
  $kurdish_numbers = array(
    '0' => '٠',
    '1' => '١',
    '2' => '٢',
    '3' => '٣',
    '4' => '٤',
    '5' => '٥',
    '6' => '٦',
    '7' => '٧',
    '8' => '٨',
    '9' => '٩',
  );
  $number = str_split($number);
  $kurdish_number = '';
  foreach ($number as $num) {
    $kurdish_number .= $kurdish_numbers[$num];
  }
  return $kurdish_number;
}

function get_hour_24($date)
{
  //get hour only
  return date('G', strtotime($date));
}

function get_hour_12($date)
{
  //get hour only
  return date('g', strtotime($date));
}

function get_minute($date)
{
  //get minute only
  return date('i', strtotime($date));
}
function get_second($date)
{
  //get second only
  return date('s', strtotime($date));
}

function get_kurdish_am_and_pm($date)
{
  //get hour only
  $hour = date('H', strtotime($date));
  //if hour more than 12
  if ($hour >= 12) {
    //return pm
    return 'د.ن';
  }
  //if hour less than 12
  if ($hour < 12) {
    //return am
    return 'پ.ن';
  }

}

function get_kurdish_day_name($date)
{
   //initialize kurdish days name
   $kurdish_days_name = array(
      '6' => 'شەمە',
      '7' => '١ شەمە',
      '1' => '٢ شەمە',
      '2' => '٣ شەمە',
      '3' => '٤ شەمە',
      '4' => '٥ شەمە',
      '5' => 'هەینی',
   );
  
  //get day only
  $day = date('N', strtotime($date));
  //get kurdish day name
  return $kurdish_days_name[$day];
}

function get_kurdish_day_number($date)
{
   //convert to date format
   $date = date('Y-m-d', strtotime($date));
  //get how many days in month-1 of $date variable
  $days_in_previous_month = date('t', strtotime('-1 month', strtotime($date)));

  //get day only
  $day = date('d', strtotime($date));
  $kurdish_day = 1;
  //if day more than 20
  if ($day > 20) {
    //kursih_day = day - 20
    $kurdish_day = $day - 20;
  }
  //if day less than 21
  if ($day < 21) {
    //plus_days = days_in_previous_month - 20
    $plus_days = $days_in_previous_month - 20;
    //kursih_day = day + days_in_previous_month
    $kurdish_day = $day + $plus_days;
  }
  //return kurdish day
  return $kurdish_day;
}

function get_kurdish_year_number($date)
{
  // $date = Carbon::parse($date);
  //convert to date format without useing carbon
  $date = date('Y-m-d', strtotime($date));
  //get day
  $day = date('d', strtotime($date));
  //get month
  $month = date('m', strtotime($date));
  //get year
  $year = date('Y', strtotime($date));
  //if day lees than 21 and month is 03
  if ($day < 21 && $month == 03 || $month < 03) {
    //add 700 to year
    $year = $year + 699;
  }
  //if day more than 20 and month is equal or more than 03
  if ( ($day > 20 && $month == 03) || $month > 03) {
    //add 700 to year
    $year = $year + 700;
  }
  //return kurdish year
  return $year;
}

function get_kurdish_month_name($month)
{
  //convert month to integer
  $month = (int)$month;
  //if month less than 1 or month more than 12
  if ($month < 1 || $month > 12) {
    $month = 01;
  }
  //initialize kurdish month name
  $kurdish_months = array(
    '1' => 'نەورۆز',
    '2' => 'گوڵان',
    '3' => 'جۆزەردان',
    '4' => 'پوشپەڕ',
    '5' => 'خەرمانان',
    '6' => 'گەلاوێژ',
    '7' => 'ڕەزبەر',
    '8' => 'خەزەڵوەر',
    '9' => 'سەرماوەز',
    '10' => 'بەفرانبار',
    '11' => 'ڕێبەندان',
    '12' => 'ڕەشەمێ',
  );
  //return kurdish month name
  return $kurdish_months[$month];
}

function get_kurdish_month_nummber($date)
{
   //convert to date format
   $date = date('Y-m-d', strtotime($date));
   //get month only
   $month = date('m', strtotime($date));
   //get day only
   $day = date('d', strtotime($date));
  //if date more than 20 and month is 03 or month is 04 and day less than 21
  if (($day > 20 && $month == 03) || ($month == 04 && $day < 21)) {
    //return kurdish date
    return '01';
  }
  //if date more than 20 and month is 04 or month is 05 and day less than 21
  if (($day > 20 && $month == 04) || ($month == 05 && $day < 21)) {
    //return kurdish date
    return '02';
  }
  //if date more than 20 and month is 05 or month is 06 and day less than 21
  if (($day > 20 && $month == 05) || ($month == 06 && $day < 21)) {
    //return kurdish date
    return '03';
  }
  //if date more than 20 and month is 06 or month is 07 and day less than 21
  if (($day > 20 && $month == 06) || ($month == 07 && $day < 21)) {
    //return kurdish date
    return '04';
  }
  //if date more than 20 and month is 07 or month is 08 and day less than 21
  if (($day > 20 && $month == 7) || ($month == 8 && $day < 21)) {
    //return kurdish date
    return '05';
  }
  //if date more than 20 and month is 08 or month is 09 and day less than 21
  if (($day > 20 && $month == 8) || ($month == 9 && $day < 21)) {
    //return kurdish date
    return '06';
  }
  //if date more than 20 and month is 09 or month is 10 and day less than 21
  if (($day > 20 && $month == 9) || ($month == 10 && $day < 21)) {
    //return kurdish date
    return '07';
  }
  //if date more than 20 and month is 10 or month is 11 and day less than 21
  if (($day > 20 && $month == 10) || ($month == 11 && $day < 21)) {
    //return kurdish date
    return '08';
  }
  //if date more than 20 and month is 11 or month is 12 and day less than 21
  if (($day > 20 && $month == 11) || ($month == 12 && $day < 21)) {
    //return kurdish date
    return '09';
  }
  //if date more than 20 and month is 12 or month is 01 and day less than 21
  if (($day > 20 && $month == 12) || ($month == 01 && $day < 21)) {
    //return kurdish date
    return '10';
  }
  //if date more than 20 and month is 01 or month is 02 and day less than 21
  if (($day > 20 && $month == 01) || ($month == 02 && $day < 21)) {
    //return kurdish date
    return '11';
  }
  //if date more than 20 and month is 02 or month is 03 and day less than 21
  if (($day > 20 && $month == 02) || ($month == 03 && $day < 21)) {
    //return kurdish date
    return '12';
  }
}
