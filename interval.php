<?php

class Interval
{
    private $date_one;
    private $date_two;
    public function __construct(Date $date1, Date $date2){
        $this->date_one = $date1;
        $this->date_two = $date2;
    }
    public function toDays(){
        // вернет разницу в днях
        $interval = date_diff(new DateTime($this->$date_one), new DateTime($this->$date_two));
        return $interval->d;
    }
    public function toMonths(){
        // вернет разницу в месяцах
        $interval = date_diff(new DateTime($this->$date_one), new DateTime($this->$date_two));
        return $interval->m;
    }
    public function toYears(){
        // вернет разницу в годах
        $interval = date_diff(new DateTime($this->$date_one), new DateTime($this->$date_two));
        return $interval->y;
    }
    public function __toString(){
        // выведет результат в виде массива
        // год - '', месяц - '', день - ''
        return "['years' => '".$this->toYears()."', 'months' => '".$this->toMonths()."', 'days' => '".$this->toDays()."']";
    }
}
?>