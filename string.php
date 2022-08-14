<?php

//string//string//string//string//string


echo '<hr>';

//xxxx() XX 

//a

/* 
output

XX

*/ 

// addcslashes(); بین حروف مختلف اسلش می اندازد و جدا میکد و یک رشته را تکه تکه میکند.

$str = "Welcome to z my humble A Homepage!";
echo $str."<br>";
echo addcslashes($str,'A..Z')."<br>";
echo addcslashes($str,'e')."<br>";
echo addcslashes($str,'o');


/* 
output

Welcome to z my humble A Homepage!
\Welcome to z my humble \A \Homepage!
W\elcom\e to z my humbl\e A Hom\epag\e!
Welc\ome t\o z my humble A H\omepage!

*/

echo '<hr>';

//addslashes(); یک رشته را با کتیشن جدا میکند

$str = addslashes('What does "yolo" mean?');
echo($str); 

/* 
output

What does \"yolo\" mean?

*/

echo '<hr>';

//bin2hex کاراکتر های باینریرا به هگزاته سیما تبدیل میکنه و با پک میشه برعکس این عمل را انجام داد

$str = "Hello world!";
$hex =  bin2hex($str) ;
echo $hex . "<br>";
echo pack("H*",$hex) . "<br>";
echo hex2bin($hex);//دقیقا برعکسشه

/* 
output

48656c6c6f20776f726c6421
Hello world!

*/

echo '<hr>';

//chop(); از سمت راست استرینگ و متن یک زیررشته پاک میکند و یک قسمت از متن را از سمت راست پاک میکند
// ltrim(); یک زیررشته از سمت چپ رشته حذف و پاک میکند یعنی یک کلمه مشابه با رشته از سمت چپ حذف میشود
// trim(); حروف مشابه از سمت چپ و راس یک رشته متن استرینگ حذف و پاک میشود

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!"). "<br>";
echo ltrim($str,"Hello"). "<br>";
echo rtrim($str,"World!"). "<br>";
echo trim($str,"Held!");

/* 
output

Hello World!
Hello

*/

echo '<hr>';

// chunk_split به تعداد ثابت یک رشته را تیکه تیکه | جدا | تقسیم میکند

$str = "Hello world!";
echo chunk_split($str,2,"|");

/* 
output

He|ll|o |wo|rl|d!|

*/

echo '<hr>';

// convert_uuencode یک استرینگ را رمز گذاری و به اصطلاح کدگذاری میکند
// convert_uudecode یک استرینگ و متن رمز گذاری یا کدگذاری را به حالت اولش و حالت قابل خواندن تبدیل میکند

$str = "Hello world!";
echo $str.'<br>';
echo md5($str). "<br>";
echo sha1($str). "<br>";
// Encode the string
$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";
// $filename = "test.txt";
// $md5file = md5_file($filename);
// echo $md5file;

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;

/* 
output

Hello world!
86fb269d190d2c85f6e0468ceca42a20
d3486ae9136e7856bc42212385ea797094475802
,2&5L;&\@=V]R;&0A `
Hello world!

*/

echo '<hr>';

// count_chars(); حالت های مختلفی داره که با کاراکتر را بازی میکنه و جلئی هر کدوم توضیح دادم کارکردشوو ببم

$str = "mamad 012";
echo count_chars($str,3).'<br>';// تمام حروف انگلیسی و کاراکتر های تکراری را حذف و بصورت نامنظم حروف فیلتر شده را کنار هم میگذارد
echo count_chars($str,4);// تمام اعداد و حروف و کاراکتر هایی که استفاده نکردی رو برمیگردونه

/* 
output

012adm
  !"#$%&'()*+,-./3456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`bcefghij...

*/

echo '<hr>';

// explode(); ساخت یک ارایه از یک رشته | یک متن | استرینگ با یک حرف یا کاراکتر خاص

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

/* 
output

Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )

*/

echo '<hr>';

// implode(); | join(); اندیس های یک ارایه را به یک کاراکتر انتخابی پشت سر هم قرار میده

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr).'<br>';
echo join(" ",$arr);//like implode

/* 
output

Hello World! Beautiful Day!
Hello World! Beautiful Day!

*/

echo '<hr>';

// lcfirst(); حرف اول استرینگ یا متن رو به صورت کوچک برمیگردونه

echo lcfirst("Hello World!");

/* 
output

hello World!

*/

echo '<hr>';

// levenshtein(); اختلاف کاراکتر های متفاوت بین دو استرینگ متن رشته

echo levenshtein("Hello World","llo World");

/* 
output

hello World!

*/

echo '<hr>';

// metaphone(); کلمه های انگلیسی رو مخفف میکنه و با حروف بزرگ مینویسه

$str = "iran";
$str2 = "Assistants";

echo metaphone($str);
echo "<br>";
echo metaphone($str2);

/* 
output

IRN
ASSTNTS

*/

echo '<hr>';

// nl2br(); هرجا که ان باشه خط جدید ایجاد میکنه و میره خط بعد 

echo nl2br("One line.\nAnother line.");

/* 
output

One line.
Another line.

*/

echo '<hr>';

// number_format(); در ارقام فرمت زیبا تعمال میکنه و اعداد و ارقام را به شکل زیباتر نمایش میده

echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");

/* 
output

1,000,000
1,000,000.00
1.000.000,00

*/

echo '<hr>';

//ord(); کد کاراکتر حرف اول را بصورت عدد برمیگردونه

echo ord("س")."<br>";
echo ord("a")."<br>";
echo ord("ali")."<br>";

/* 
output

216
97
97

*/

echo '<hr>';

// parse_str(); متن با فرمت یو ار ال ادرس وب بصورت گت رو بصورت ارایه در میاره || GET URL Array 

parse_str("name=James&age=23",$array);
echo $array['name']."<br>";
echo $array['age'];

/* 
output

216
97
97

*/

echo '<hr>';

// print برای پرینت و چاپ استرینگ متن و تکست و رشته

$str = "Hello world!";
print $str;
print "<br>What a nice day!";
$number = 123;
vprintf("With 2 decimals: %.2f <br> With no decimals: %u <br> ",array($number,$number));
vprintf("There are %u million bicycles in %s.",array($number,$str));
echo '<br>';
$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2
echo "num1 : $num1".'<br>';
echo "num2 : $num2".'<br>';
echo "char : $char".'<br>';
// Note: The format value "%%" returns a percent sign
printf("%%b num1 = %b <br>",$num1); // Binary number
printf("%%c char = %c <br>",$char); // The ASCII Character
printf("%%d num1 = %d <br>",$num1); // Signed decimal number
printf("%%d num2 = %d <br>",$num2); // Signed decimal number
printf("%%e num1 = %e <br>",$num1); // Scientific notation (lowercase)
printf("%%E num1 = %E <br>",$num1); // Scientific notation (uppercase)
printf("%%u num1 = %u <br>",$num1); // Unsigned decimal number (positive)
printf("%%u num2 = %u <br>",$num2); // Unsigned decimal number (negative)
printf("%%f num1 = %f <br>",$num1); // Floating-point number (local settings aware)
printf("%%F num1 = %F <br>",$num1); // Floating-point number (not local settings aware)
printf("%%g num1 = %g <br>",$num1); // Shorter of %e and %f
printf("%%G num1 = %G <br>",$num1); // Shorter of %E and %f
printf("%%o num1 = %o <br>",$num1); // Octal number
printf("%%s num1 = %s <br>",$num1); // String
printf("%%x num1 = %x <br>",$num1); // Hexadecimal number (lowercase)
printf("%%X num1 = %X <br>",$num1); // Hexadecimal number (uppercase)
printf("%%+d num1 = %+d <br>",$num1); // Sign specifier (positive)
printf("%%+d num2 = %+d <br>",$num2); // Sign specifier (negative)

$str1 = "Hello";
$str2 = "Hello world!";
echo '<br>';
echo "str1 : $str1".'<br>';
echo "str2 : $str2  ".'<br>';

vprintf("str1 : [%s]<br>",array($str1));
vprintf("str1 : [%8s]<br>",array($str1));
vprintf("str1 : [%-8s]<br>",array($str1));
vprintf("str1 : [%08s]<br>",array($str1));
vprintf("str1 : [%'*8s]<br>",array($str1));
vprintf("str2 : [%8.8s]<br>",array($str2));

/* 
output

Hello world!
What a nice day!With 2 decimals: 123.00
With no decimals: 123
There are 123 million bicycles in Hello world!.
num1 : 123456789
num2 : -123456789
char : 50
%b num1 = 111010110111100110100010101
%c char = 2
%d num1 = 123456789
%d num2 = -123456789
%e num1 = 1.234568e+8
%E num1 = 1.234568E+8
%u num1 = 123456789
%u num2 = 18446744073586094827
%f num1 = 123456789.000000
%F num1 = 123456789.000000
%g num1 = 1.23457e+8
%G num1 = 1.23457E+8
%o num1 = 726746425
%s num1 = 123456789
%x num1 = 75bcd15
%X num1 = 75BCD15
%+d num1 = +123456789
%+d num2 = -123456789

str1 : Hello
str2 : Hello world!
str1 : [Hello]
str1 : [ Hello]
str1 : [Hello ]
str1 : [000Hello]
str1 : [***Hello]
str2 : [Hello wo]

*/

echo '<hr>';

// similar_text(); تعداد حروف مشابه بین دو رشته استرینگ متن را بر میگردونه

echo similar_text("Hello World","Hello Peter");

/* 
output

7

*/

echo '<hr>';

// sscanf(); استرینگ چاپ میکنه ولی بصورت داینامیک و با گرفتن مقدار ....
// فیلد ها رو پر و رشته رو بر میگردونه ب عبارتی چاپ میکنه

$str = "age:30 weight:60kg";
sscanf($str,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);

echo '<br>';

$str = "If you divide 4 by 2 you'll get 2";
sscanf($str,"%s you divide %d ",$f,$s);
echo $f."<br>";
echo $s."<br>";

$str = "If you divide 4 by 2 you'll get 2";
$format = sscanf($str,"%s %s %s %d %s %d %s %s %c");
print_r($format);

/* 
output

int(30) int(60)
If
4
Array ( [0] => If [1] => you [2] => divide [3] => 4 [4] => by [5] => 2 [6] => you'll [7] => get [8] => 2 )

*/

echo '<hr>';

// str_ireplace(); یک کلمه را در متن رشته استرینگ جست و جو میکنه و جای او کلمه ای که تعریف کردیم
// را میگذارد و تعداد جایگزین کردن ها را نیز بر میگردونه

$arr = array("blue","red","green","red");
print_r(str_ireplace("RED","pink",$arr,$i)); // Case-insensitive
echo "<br>" . "Replacements: $i";

/* 
output

Array ( [0] => blue [1] => pink [2] => green [3] => pink )
Replacements: 2

*/

echo '<hr>';

// str_pad(); به اندازه مشخص و محدود مجوز چاپ کاراکتر رو میده و اگه کمتر از مقدار مشخص بود
// از مقداری که تریف کردیم استفاده میکه تا به تعداد کاراکتر مدنظر برسذ

$str = "Hello World";
echo str_pad($str,20,".");

/* 
output

Hello World.........

*/

echo '<hr>';

// str_repeat(); به تعداد مشخص استرینگ متن و رشته رو تکرار میکنه

echo str_repeat("Ali ",10);


/* 
output

Ali Ali Ali Ali Ali Ali Ali Ali Ali Ali

*/

echo '<hr>';

// str_replace(); یک کلمه را در یک استرینگ جست و جو میکنه و با یک کلمه دیگه جایگزین میکنه

echo str_replace("world","Peter","Hello world!");

/* 
output

Hello Peter!

*/

echo '<hr>';

// str_split(); یک ارایه از رشته به طول مشخص میسازه

print_r(str_split("alireza",3));

/* 
output

Array ( [0] => ali [1] => rez [2] => a )

*/

echo '<hr>';

// str_word_count(); کلمات را از جمله رشته استرینگ جدا و ارایه میسازه ازش و تعداد کلمات نیز برمیگردونه

print_r(str_word_count("Hello world & good morning!",1));
print "<br>";
print_r(str_word_count("Hello world & good morning!",1,"&"));
echo '<br>';
print_r(str_word_count("Hello world!",2));
echo '<br>';
echo str_word_count("Hello world!");

// 0 - Default. Returns the number of words found
// 1 - Returns an array with the words from the string
// 2 - Returns an array where the key is the position of the word in the string, and value is the actual word

/* 
output

Array ( [0] => Hello [1] => world [2] => good [3] => morning )
Array ( [0] => Hello [1] => world [2] => & [3] => good [4] => morning )
Array ( [0] => Hello [6] => world )
2

*/

echo '<hr>';

// strchr(); از یک قسمت مشخص شده در استرینگ رشته متن شروع به برگردوندن متن میکنه..
// یک کلمه رو جست و جو میکنه از اون بعدش رو برمیگردونه

echo strchr("Hello good world!","ood").'<br>';
echo stristr("Hello world!","LLO");

/* 
output

ood world!
llo world!

*/

echo '<hr>';

// strip_tags(); تگ و المنت های استرینگ رو حذف و غیرفعال میکنه 

echo strip_tags("Hello <b>world!</b>").'<br>';
echo "Hello <b>world!</b>";

/* 
output/second sentenses is bold and here we can not see the difrent between them

Hello world!
Hello world!

*/

echo '<hr>';

// stripcslashes(); بک اسلش یا فوروارداسلش رو از رشته حذف میکنه

echo stripcslashes("Hello \World!").'<br>';
echo stripslashes("Who\'s Peter Griffin?").'<br>';
echo "Hello \World!";

/* 
output/second sentenses is bold and here we can not see the difrent between them

Hello World!
Who's Peter Griffin?
Hello \World!

*/

echo '<hr>';

// stripos(); موقعیت کاراکتر در رشته استرینگ را برمیگردونه

echo stripos("I love php, I love php too!","PHP");

// strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
// strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
// strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)

/* 
output

7

*/

echo '<hr>';

// Return the length of the string "Hello": طول رشته رو برمیگردونه

echo strlen("Hello");   

/* 
output

5

*/ 

echo '<hr>';

// strrev(); جمله رو برعکس میکنه

echo strrev("Hello World!");

/* 
output

!dlroW olleH

*/ 

echo '<hr>';

// strrev(); مقدار کاراکتر های شبیه در دو رشته رو برمیگردونه

echo strspn("Hello world!","kHlleo");

/* 
output

5

*/ 

echo '<hr>';

//  تمام کلمات رو بزرگ یا کوچیک مینویسه

echo strtolower("Hello WORLD.").'<br>';
echo strtoupper("Hello WORLD!");

/* 
output

hello world.
HELLO WORLD!

*/ 

echo '<hr>';

//strtr()  بصورت پیشرفته در رشته میگرده و کلمات مشابه رو با کلمات از پیش تعرریف شده جایگزین میکند

echo strtr("Hilla Warld","ia","eo").'<br>';
$arr = array("Hello" => "Hi", "world" => "earth");
echo strtr("Hello world",$arr);

/* 
output

Hello World
Hi earth

*/ 

echo '<hr>';

//substr()  برای حذف یک قسمت از رشته متن استرینگ با طول و پوزیشن موقعیت مدنظر

echo substr("Hello world",0,10)."<br>";
echo substr("Hello world",1,8)."<br>";
echo substr("Hello world",0,5)."<br>";
echo substr("Hello world",6,6)."<br>";
echo "<br>";

// Negative numbers:
echo substr("Hello world",0,-1)."<br>";
echo substr("Hello world",-10,-2)."<br>";
echo substr("Hello world",0,-6)."<br>";

/* 
output

Hello worl
ello wor
Hello
world

Hello worl
ello wor
Hello

*/ 

echo '<hr>';

//substr_count() میزان تکرار شدن یک کلمه در رشته رو برمیگردونه

$str = "This is nice";
echo strlen($str)."<br>"; // Using strlen() to return the string length
echo substr_count($str,"is")."<br>"; // The number of times "is" occurs in the string
echo substr_count($str,"is",2)."<br>"; // The string is now reduced to "is is nice"
echo substr_count($str,"is",3)."<br>"; // The string is now reduced to "s is nice"
echo substr_count($str,"is",3,3)."<br>"; // The string is now reduced to "s i"

/* 
output

12
2
2
1
0

*/ 

echo '<hr>';

//substr_replace() جایگزین کردن کلمه با دادن عدد و موقعیت و طول

echo substr_replace("world","hi",1,4).'<br>';
echo substr_replace("world","hi",2,0).'<br>';
echo substr_replace("world","hi",0,-2);

/* 
output

whi
wohirld
hild

*/ 

echo '<hr>';

//ucfirst()حرف اول رو بزرگ میکنه 

echo ucfirst("hello world!");

/* 
output

Hello world!

*/ 

echo '<hr>';

//ucwords() حرف اول هر کلمه رو یا حرف بعد از هر کاراکتری که تعریف کردیم بزرگ میکنه 

echo ucwords("hello world").'<br>';
echo ucwords("hello|world", "|");

/* 
output

Hello World
Hello|World

*/ 

echo '<hr>';

//wordwrap() از یک رشته به اندازه و طول مشخص جدا و یک خط لاین جدید میسازه 

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");

/* 
output

An example of a
long word is:
Supercalifragulistic

*/ 



//it is the end of this lesson and i hope that i can do every thing that i want to do and have .. i love you world!

//ALIREZA BAGHERI
//Site : https://alirezabagheri05.ir
//Github : https://github.com/AlirezaBagheri05
//Telegram : @alirezabagheri05
//Instagram : @alirezabagheri05