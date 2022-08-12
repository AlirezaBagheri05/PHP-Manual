<?php

//Array//Array//Array//Array//Array

//

echo '<hr>';

//xxxxx() XX 

//a

/* 
output

XX

*/ 

echo '<hr>';

//array_change_key_case() اندیس ها رو با حروف بزرگ مینویسه

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

/* 
output

Array ( [PETER] => 35 [BEN] => 37 [JOE] => 43 )

*/ 

echo '<hr>';

//array_chunk() اندیس های یک ارایه رو دوتا دوتا به زیرارایه تبدیل میکنه

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

/* 
output

Array ( [0] => Array ( [0] => Volvo [1] => BMW ) [1] => Array ( [0] => Toyota [1] => Honda ) [2] => Array ( [0] => Mercedes [1] => Opel ) )

*/ 

echo '<hr>';

//array_column() اندیس های خاصی رو در یک ارایه مجزا با اندیس های دیفالت یا با شماره اندیس دلخواه ایجاد میکنه 

$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $last_names = array_column($a, 'last_name', 'id');
  print_r($last_names);

/* 
output

Array ( [5698] => Griffin [4767] => Smith [3809] => Doe )

*/ 

echo '<hr>';

//array_combine() دو ارایه را به هم متصل و ترکیب میکند 

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);

/* 
output

Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

*/

echo '<hr>';

//array_count_values() مقدار های تکراری یک ارایه رو میشماره و یک ارایه جدید از تعداد مقدار های تکراری ایجاد میکند    

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));

/* 
output

Array ( [A] => 2 [Cat] => 1 [Dog] => 2 )

*/

echo '<hr>';

//array_diff() مقدار متفاوت در ارایه اول با دیگر ارایه ها رو برمیگردونه و یک ارایه جدید میسازه

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);

/* 
output

Array ( [b] => green [c] => blue )

*/

echo '<hr>';

//array_diff_assoc() مقدار و اندیس متفاوت در ارایه اول با ارایه های دیگر رو بصورت ارابه جدید برمیگردونه 

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","b"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);

/* 
output

Array ( [c] => blue [d] => yellow )

*/

echo '<hr>';

//array_diff_key()  اندیس متفاوت در ارایه اول با ارایه های دیگر رو بصورت ارایه جدید برمیگردونه   

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"black","s"=>"green","e"=>"brown");
$a3=array("a"=>"purple","s"=>"green","c"=>"red");

$result=array_diff_key($a1,$a2,$a3);
print_r($result);

/* 
output

Array ( [b] => green )

*/

echo '<hr>';

//array_diff_uassoc() حالت پیشرفته : متفاوت یا مشابه و متشابه شباهت مقدار یا ولیو در ارایه اول با ارایه های دیگر رو برمیگردونه ینی بصورت یک ارایه جدید در میاره 

function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction1");
print_r($result);

/* 
output

Array ( [a] => red [c] => blue )

*/

echo '<hr>';

//array_diff_ukey() حالت پیشرفته : متفاوت یا مشابه و متشابه شباهت اندیس در ارایه اول با ارایه های دیگر رو برمیگردونه ینی بصورت یک ارایه جدید در میاره  

function myfunction2($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_diff_ukey($a1,$a2,"myfunction2");
print_r($result);

/* 
output

Array ( [c] => blue )

*/

echo '<hr>';

//xxxxx() XX 

//a

/* 
output

XX

*/

echo '<hr>';

//xxxxx() XX 

//a

/* 
output

XX

*/