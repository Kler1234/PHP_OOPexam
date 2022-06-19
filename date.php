<?php

class Date
{
    private $ru_namemonth = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    private $month_en = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
    private $ru_nameweek = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    private $en_nameweek = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

    private $date;

    public function __construct($d = null) {
        if ($d == null) {
            echo "null";
            $this->date = date_create(date('y-m-j'));
        } else {
            $this->date = date_create($d);
        }
    }
    public function getDay(){
        // возвращает день
        return date_format($this->date, 'j');
    }
    public function getMonth($lang = null){
        // возвращает месяц
        if ($lang == 'ru') return $this->ru_namemonth[date_format($this->date, 'm')];
        else if ($lang == 'en') return $this->en_namemonth[date_format($this->date, 'm')];
        else return date_format($this->date, 'm');
    }
    public function getYear(){
        // возвращает год
        return date_format($this->date, 'Y');
    }
    public function getWeekDay($lang = null){
        // возвращает день недели
        if ($lang == 'ru') return $this->ru_nameweek[date_format($this->date, 'w')];
        else if ($lang == 'en') return $this->en_nameweek[date_format($this->date, 'w')];
        else return date_format($this->date, 'w');
    }
    public function addDay($value){
        // добавляет значение $value к дню
        date_modify($this->date, '+'.$value.' day');
    }
    public function subDay($value){
        // отнимает значение $value от дня
        date_modify($this->date, '-'.$value.' day');
    }
    public function addMonth($value){
        // добавляет значение $value к месяцу
        date_modify($this->date, '+'.$value.' month');
    }
    public function subMonth($value){
        // отнимает значение $value от месяца
        date_modify($this->date, '-'.$value.' month');
    }
    public function addYear($value){
        // добавляет значение $value к году
        date_modify($this->date, '+'.$value.' year');
    }
    public function subYear($value){
        // отнимает значение $value от года
        date_modify($this->date, '-'.$value.' year');
    }
    public function format($format){
        // выведет дату в указанном формате
        return date_format($this->date, $format);
    }
    public function __toString(){
        // выведет дату в формате 'год-месяц-день'
        return date_format($this->date, 'Y-m-j');
    }
}
?>