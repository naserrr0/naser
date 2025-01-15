<?php

// 1. استخدام preg_match للبحث عن رقم هاتف في النص
$pattern_phone = "/\d{3}-\d{3}-\d{4}/";
$text = "رقم الهاتف هو 123-456-7890";
if (preg_match($pattern_phone, $text)) {
    echo "تم العثور على رقم الهاتف!<br>";
} else {
    echo "لم يتم العثور على رقم الهاتف.<br>";
}

// 2. استخدام preg_match_all للبحث عن جميع الأرقام في النص
$pattern_numbers = "/\d+/";
$text_numbers = "الأرقام: 123، 456، 789";
preg_match_all($pattern_numbers, $text_numbers, $matches);
echo "جميع الأرقام في النص: ";
print_r($matches[0]); // سيتم طباعة الأرقام جميعها.<br>";

// 3. استخدام preg_replace لاستبدال رقم الهاتف بنص آخر
$pattern_replace = "/\d{3}-\d{3}-\d{4}/";
$replacement = "XXX-XXX-XXXX";
$text_replace = "رقم الهاتف هو 123-456-7890";
$new_text = preg_replace($pattern_replace, $replacement, $text_replace);
echo "النص بعد الاستبدال: $new_text<br>";

// 4. استخدام preg_split لتقسيم النص بناءً على المسافات أو الفواصل
$pattern_split = "/[\s,]+/"; // لتقسيم النص بناءً على المسافة أو الفاصلة
$text_split = "الأسماء: ناصر، محمد، علي";
$result_split = preg_split($pattern_split, $text_split);
echo "النص المقسم إلى كلمات: ";
print_r($result_split);
echo "<br>";

// 5. استخدام preg_replace_callback لاستبدال الأرقام المكونة من 3 أرقام بتعديل مخصص
$pattern_callback = "/\d{3}/";
$text_callback = "الأرقام: 123، 456، 789";
$callback = function($matches) {
    return "رقم: " . $matches[0]; // تعديل النص المستبدل
};
$new_text_callback = preg_replace_callback($pattern_callback, $callback, $text_callback);
echo "النص بعد استخدام callback: $new_text_callback<br>";

?>
