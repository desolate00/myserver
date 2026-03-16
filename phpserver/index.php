<?php
//session_start();
//$param1 = $_GET['param1'];
//$param2 = $_GET['param2'];
//$res = $param1 + $param2;
//$res1 = $param1 - $param2;
//$res2 = $param1 / $param2;
//$res3 = $param1 * $param2;
//$data = array('p1' => $param1, 'p2' => $param2, 'res' => $res, 'res1' => $res1, 'res2' => $res2, 'res3' => $res3);
//$jsonString = json_encode($data);
//echo $jsonString;

//$data = array('p1'=>345,'p2'=>346,'res'=>345);
//
//$s = 0;
//foreach ($data as $key => $value) {
//    echo $key. ":".$value, "<br>";
//}
//
//$arr = array(1,2,3,4,5,6,7,8,9);
//for ($i=0;$i<count($arr);$i++){
//    echo $arr[$i]. "<br>";
//}
//
//$a = 23;
//$b = 34;
//$c = 12;

/**
 * Задача 1
 * Создать функцию вычисления квадрата числа,без использования встроенной функции
 *
 * Задача 2
 * Создать функцию которая определяет наибольшее значение из двух чисел без использования встроенной функции
 *
 * Задача 3
 *
 * Создать функцию которая принимает в аргументе массив определяет максимальный элемент и возвращает его
 *
 * Задача 4
 *
 * Создать функцию которая вычисляет площадь круга или квадрата по заданным параметрам
 *
 * Задача 5
 *
 * Создать функцию которая определяет длину ассоциативного массива
 */
//
//
//
///* Задача 1 */
//print('Первая Задача<br>');
//function myfanc($num)
//{
//    return $num * $num;
//}
//
//echo myfanc(5) . "<br>";
//
//
///* Задача 2 */
//print('Вторая Задача<br>');
//function myfancc($a, $b)
//{
//    if ($a >= $b) {
//        return $a;
//    } else {
//        return $b;
//    }
//}
//
//echo myfancc(5, 10) . "<br>";
//
//
///* Задача 3 */
//
//print('Третья Задача<br>');
//function maxel($arr)
//{
//    $max = $arr[0];
//    foreach ($arr as $num) {
//        if ($num > $max) {
//            $max = $num;
//        }
//    }
//    return $max;
//}
//
//$numbers = [1, 4, 12, 8, 10];
//echo maxel($numbers) . "<br>";
//
//
///* Задача 4 */
//
//print('Четвёртая Задача<br>');
//
//$diameter = 4;
//$pi = 3.14;
//
//function plosh($diameter, $pi)
//{
//    $area = $diameter * $pi;
//    return $area;
//}
//echo plosh ($diameter,$pi) . "<br>";
//
//
///* Задача 5 */
//
//print('Пятая Задача<br>');
//
//function dan($asc_arr)
//{
//    if (is_array($asc_arr)){
//        $col = 0;
//        foreach ($asc_arr as $v){
//            $col+=1;
//        }
//        return $col;
//
//        print dan(array());
//
//    }
//
//
//}
//
//
//
//
//class Person
//{
//    public $name;
//    public $fam;
//    public $otch;
//    public $age;
//    public $rost;
//    public $mass;
//    public $i;
//
//    public function __construct($name, $fam, $otch, $age, $rost, $mass)
//    {
//        $this->name = $name;
//        $this->fam = $fam;
//        $this->otch = $otch;
//        $this->age = $age;
//        $this->rost = $rost;
//        $this->mass = $mass;
//        $this->i= $this->mass/((($this->rost/100)*($this->rost/100)));
//    }
//    public function dan(){
//        print "Меня зовут $this->fam $this->name $this->otch, мне $this->age, мой рост $this->rost см, а вес $this->mass кг ";
//
//    }
//}
//$obj = new Person('Алексей', 'Петров', 'Иванович', 21, 179, 80);
//
//print $obj->dan() . "<br>";
//
//
//
//print $obj->i;
//

//class Krug{
//    public $r;
//    const pi = 3.14;
//
//    public function __construct($r){
//        $this->r = $r;
//    }
//    public function plo(){
//        return self::pi * ($this->r*$this->r);
//    }
//}
//
//$obj = new Krug(12);
//print $obj->plo();
//
//class Person {
//    public $name;
//    public $HP;
//    public $settlement;
//    function property($name,$settlement)
//    {
//       $this->name = $name;
//       $this->settlement = $settlement;
//       $this->HP = 100;
//    }
//
//    public function loss($damage) {
//        $this->HP -= $damage;
//        if ($this->HP < 0) {
//            $this->HP = 0;
//        }
//    }
//    public function treatment() {
//            $this->HP +=5;
//        if ($this->HP > 100) {
//            $this->HP = 100;
//        }
//    }
//}
//
//class Citizen extends Person {
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//    function attack($hit){
//        if ($hit->HP>0){
//            $this->loss(15);
//        }
//    }
//
//}
//class Warrior extends Person{
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//    function attack($hit){
//        if ($hit->HP>0){
//            $this->loss(10);
//        }
//    }
//
//}
//
//class Healer extends Person{
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//
//}

try {
    $host = '127.0.0.1';
    $db = 'test';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);
    var_dump($pdo);
    echo "<br/>";

    $stmt = $pdo->query('SELECT * FROM product');
    var_dump($stmt);
    echo "<br/>";

    while ($row = $stmt->fetch()) {
        echo $row['name'] . " " . $row['ves'] . " " . $row['sort_id'];
        echo "<br/>";
    }

    $deleteId = 3;
    $deleteStmt = $pdo->prepare('DELETE FROM product WHERE id = :id');
    $deleteStmt->execute([':id' => $deleteId]);
    echo "Запись с id = $deleteId удалена.<br/>";

    $updateId = 4;
    $newName = 'test';
    $newVes = 150;

    $updateStmt = $pdo->prepare('UPDATE product SET name = :name, ves = :ves WHERE id = :id');
    $updateStmt->execute([
        ':name' => $newName,
        ':ves' => $newVes,
        ':id' => $updateId
    ]);
    echo "Запись с id = $updateId обновлена.<br/>";

    $sql = "SELECT product.name, product.ves, sort.sort AS sort_name
            FROM product
            JOIN sort ON product.sort_id = sort.id";

    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch()) {
        echo " " . $row['name'] . "," . $row['ves'] . ",  " . $row['sort_name'] . "<br/>";
    }

} catch (PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}










?>
















































