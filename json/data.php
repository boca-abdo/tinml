<?php
class stdObject {
    public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }

    public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}
$math1 = new stdObject();
$math1->week1 = array('تصنيف الخطوط', 'التخوم والجهات');
$math1->week2 = array('التواصل حدا بحد', 'اﻷعداد 1،2 و 3');
$math1->week3 = array('', '');
$math1->week4 = array('', '');
$math1->week5 = array('', '');
$math1->week6 = array('', '');
$math1->week7 = array('', '');
$math1->week8 = array('', '');
$math1->week9 = array('', '');
$math1->week10 = array('', '');
$math1->week11 = array('', '');
$math1->week12 = array('', '');
$math1->week13 = array('', '');
$math1->week14 = array('', '');
$math1->week15 = array('', '');
$math1->week16 = array('', '');
$math1->week17 = array('', '');
$math1->week18 = array('', '');
$math1->week19 = array('', '');
$math1->week20 = array('', '');
$math1->week21 = array('', '');
$math1->week22 = array('', '');
$math1->week23 = array('', '');
$math1->week24 = array('', '');
$math1->week25 = array('', '');
$math1->week26 = array('', '');
$math1->week27 = array('', '');
$math1->week28 = array('', '');
$math1->week29 = array('', '');
$math1->week30 = array('', '');
$math1->week31 = array('', '');
$math1->week32 = array('', '');
$math1->week33 = array('', '');
$math1->week34 = array('', '');

?>
