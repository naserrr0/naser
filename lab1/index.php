<?php
// الطباعة عن طريق echo
echo "مرحباً بك في تطبيق الأساسيات<br>";

// 1. تعريف المتغيرات
$number = 10;
$text = "لغة PHP";
$isTrue = true;

// طباعة المتغيرات
echo "المتغير الأول: $number<br>";
echo "المتغير الثاني: $text<br>";
echo "المتغير الثالث: " . ($isTrue ? "صحيح" : "خاطئ") . "<br>";

// 2. if statement
if ($number > 5) {
    echo "الرقم أكبر من 5<br>";
}

// 3. if-else statement
if ($number < 5) {
    echo "الرقم أقل من 5<br>";
} else {
    echo "الرقم ليس أقل من 5<br>";
}

// 4. for loop
echo "طباعة الأرقام من 1 إلى 5 باستخدام for:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "$i<br>";
}

// 5. switch statement
$day = 3;
echo "اليوم هو: ";
switch ($day) {
    case 1:
        echo "الأحد<br>";
        break;
    case 2:
        echo "الاثنين<br>";
        break;
    case 3:
        echo "الثلاثاء<br>";
        break;
    default:
        echo "يوم غير معروف<br>";
        break;
}

// 6. while loop
echo "طباعة الأرقام من 1 إلى 5 باستخدام while:<br>";
$i = 1;
while ($i <= 5) {
    echo "$i<br>";
    $i++;
}

// 7. do-while loop
echo "طباعة الأرقام من 1 إلى 5 باستخدام do-while:<br>";
$i = 1;
do {
    echo "$i<br>";
    $i++;
} while ($i <= 5);

// 8. معاملات المقارنة
$a = 5;
$b = 10;
echo "مقارنة القيم:<br>";
echo "$a == $b : " . ($a == $b ? "صحيح" : "خاطئ") . "<br>";
echo "$a != $b : " . ($a != $b ? "صحيح" : "خاطئ") . "<br>";
echo "$a > $b : " . ($a > $b ? "صحيح" : "خاطئ") . "<br>";
echo "$a < $b : " . ($a < $b ? "صحيح" : "خاطئ") . "<br>";

// 9. العمليات الحسابية
$x = 10;
$y = 3;
echo "العمليات الحسابية:<br>";
echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br>";

?>


