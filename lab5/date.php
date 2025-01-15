<?php
// 1. عرض التاريخ والوقت بتنسيق معين باستخدام date()
echo "التاريخ والوقت بتنسيق Y-m-d H:i:s: " . date("Y-m-d H:i:s") . "<br>";

// 2. عرض الطابع الزمني باستخدام time()
echo "الطابع الزمني الحالي: " . time() . "<br>";

// 3. تحويل تاريخ نصي إلى طابع زمني باستخدام strtotime()
$timestamp = strtotime("2025-01-15 14:00:00");
echo "الطابع الزمني للتاريخ النصي '2025-01-15 14:00:00': " . $timestamp . "<br>";

// 4. إنشاء طابع زمني باستخدام mktime()
$timestamp_mktime = mktime(14, 0, 0, 1, 15, 2025);
echo "الطابع الزمني باستخدام mktime(): " . $timestamp_mktime . "<br>";

// 5. عرض تفاصيل التاريخ والوقت باستخدام getdate()
$date_details = getdate();
echo "اليوم: " . $date_details['weekday'] . "<br>";
echo "الشهر: " . $date_details['month'] . "<br>";
echo "السنة: " . $date_details['year'] . "<br>";

// 6. تعيين المنطقة الزمنية وعرض التاريخ والوقت الحالي
date_default_timezone_set("Asia/Aden");
echo "التاريخ والوقت مع المنطقة الزمنية 'Asia/Aden': " . date("Y-m-d H:i:s") . "<br>";


// 7. عرض السنة فقط باستخدام idate()
echo "السنة فقط باستخدام idate(): " . idate("Y", time()) . "<br>";

// 8. عرض التاريخ بتنسيق معين باستخدام strftime()
setlocale(LC_TIME, "ar_SA.UTF-8");
echo "التاريخ باللغة العربية باستخدام strftime(): " . strftime("%A, %d %B %Y") . "<br>";

// 9. استخدام DateTime لعرض التاريخ والوقت
$datetime = new DateTime();
echo "التاريخ والوقت باستخدام DateTime: " . $datetime->format('Y-m-d H:i:s') . "<br>";
?>
