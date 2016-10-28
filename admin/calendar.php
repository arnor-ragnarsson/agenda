<?php

include("inc/header.php");
/**
*@author  Xu Ding
*@email   thedilab@gmail.com
*@website http://www.StarTutorial.com
**/
class Calendar {


    //Constructor
    public function __construct(){
        $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
    }

    /********************* PROPERTY ********************/
private $dayLabels = array("MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN");
private $currentYear = 0;
private $currentMonth = 0;
private $currentDay = 0;
private $currentDate = null;
private $daysInMonth = 0;
private $naviHref = null;
/********************* PUBLIC **********************/

//print out the calendar

//This function calls each private function below to create the HTML calendar interface
public function show() {
$year = null;
$month = null;
if (null == $year && isset($_GET['year'])) {
$year = $_GET['year'];
} elseif (null == $year) {
$year = date("Y", time());
}
if (null == $month && isset($_GET['month'])) {
$month = $_GET['month'];
} elseif (null == $month) {
$month = date("m", time());
}
$this->currentYear = $year;
$this->currentMonth = $month;
$this->daysInMonth = $this->_daysInMonth($month, $year);
$content = '<div id="calendar">' . '<div class="box">' . $this->_createNavi() . '</div>' . '<div class="box-content">' . '<ul class="label">' . $this->_createLabels() . '</ul>';
$content .= '<div class="clear"></div>';
$content .= '<ul class="dates">';
$weeksInMonth = $this->_weeksInMonth($month, $year);
// Create weeks in a month
for ($i = 0; $i < $weeksInMonth; $i++) {
//Create days in a week
for ($j = 1; $j <= 7; $j++) {
$content .= $this->_showDay($i * 7 + $j);
}
}
$content .= '</ul>';
$content .= '<div class="clear"></div>';
$content .= '</div>';
$content .= '</div>';
return $content;
}
/********************* PRIVATE **********************/

//create the li element for ul

//This function will determine what value to put to the created cell. 
private function _showDay($cellNumber) {
if ($this->currentDay == 0) {
$firstDayOfTheWeek = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-01'));
if (intval($cellNumber) == intval($firstDayOfTheWeek)) {
$this->currentDay = 1;
}
}
if (($this->currentDay != 0) && ($this->currentDay <= $this->daysInMonth)) {
$this->currentDate = date('Y-m-d', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));
$cellContent = $this->currentDay;
$this->currentDay++;
} else {
$this->currentDate = null;
$cellContent = null;
}
$today_day = date("d");
$today_mon = date("m");
$today_yea = date("Y");
$class_day = ($cellContent == $today_day && $this->currentMonth == $today_mon && $this->currentYear == $today_yea ? "this_today" : "nums_days");
return '<li class="' . $class_day . '">' . $cellContent . '</li>' . "\r\n";
}
/**
** create navigation
**/
private function _createNavi() {
$nextMonth = $this->currentMonth == 12 ? 1 : intval($this->currentMonth)+1;
$nextYear = $this->currentMonth == 12 ? intval($this->currentYear)+1 : $this->currentYear;
$preMonth = $this->currentMonth == 1 ? 12 : intval($this->currentMonth)-1;
$preYear = $this->currentMonth == 1 ? intval($this->currentYear)-1 : $this->currentYear;
return '<div class="header">' . "\r\n" . '<span class="glyphicon glyphicon-chevron-left"></span>' . "\r\n" . '' . date('F Y', strtotime($this->currentYear . '-' . $this->currentMonth . '-1')) . '' . "\r\n" . '<span class="glyphicon glyphicon-chevron-right"></span>' . "\r\n" . '</div>';
}
/**
** create calendar week labels
**/
private function _createLabels() {
$content = '';
foreach ($this->dayLabels as $index => $label) {
$content .= '<li class="name_days">' . $label.'</li>' . "\r\n";
}
return $content;
}
/**
** calculate number of weeks in a particular month
**/
private function _weeksInMonth($month = null, $year = null) {
if (null == ($year)) {
$year = date("Y", time());
}
if (null == ($month)) {
$month = date("m", time());
}
// find number of days in this month
$daysInMonths = $this->_daysInMonth($month, $year);
$numOfweeks = ($daysInMonths % 7 == 0 ? 0 : 1) + intval($daysInMonths / 7);
$monthEndingDay = date('N',strtotime($year . '-' . $month . '-' . $daysInMonths));
$monthStartDay = date('N',strtotime($year . '-' . $month . '-01'));
if ($monthEndingDay < $monthStartDay) {
$numOfweeks++;
}
return $numOfweeks;
}
/**
** calculate number of days in a particular month
**/
private function _daysInMonth($month = null, $year = null) {
if (null == ($year)) $year = date("Y",time());
if (null == ($month)) $month = date("m",time());
return date('t', strtotime($year . '-' . $month . '-01'));
}
}
?>
