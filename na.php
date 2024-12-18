<?php
// تعريف المصفوفة الأساسية
$array = [10, 20, 30, 40, 50];
$assocArray = ["a" => 1, "b" => 2, "c" => 3];
$multiArray = [
    ["id" => 1, "name" => "nasser"],
    ["id" => 2, "name" => "ibrahim"],
    ["id" => 3, "name" => "ali"],
];

// 1. إنشاء وتعديل المصفوفات
echo "Original Array:<br>";
print_r($array);

// تغيير حالة مفاتيح المصفوفة
print_r(array_change_key_case($assocArray, CASE_UPPER));

// تقسيم المصفوفة إلى أجزاء
print_r(array_chunk($array, 2));

// دمج مصفوفتين
$keys = ["name", "age"];
$values = ["John", 30];
print_r(array_combine($keys, $values));

// إنشاء مصفوفة مليئة بقيم
print_r(array_fill(0, 5, "value"));

// تصفية المصفوفة
print_r(array_filter($array, fn($value) => $value > 20));

// تطبيق دالة على المصفوفة
print_r(array_map(fn($value) => $value * 2, $array));

// دمج المصفوفات
$array2 = [60, 70];
print_r(array_merge($array, $array2));

// عكس ترتيب المصفوفة
print_r(array_reverse($array));

// حذف آخر عنصر
array_pop($array);
print_r($array);

// إضافة عنصر جديد
array_push($array, 100);
print_r($array);

// إزالة القيم المكررة
$arrayWithDuplicates = [10, 20, 10, 30, 20];
print_r(array_unique($arrayWithDuplicates));

// استخراج جزء من المصفوفة
print_r(array_slice($array, 1, 3));

// استخراج عمود من مصفوفة متعددة الأبعاد
print_r(array_column($multiArray, "name"));

// 2. البحث والفحص
echo "Key exists: " . (array_key_exists("a", $assocArray) ? "Yes" : "No") . "<br>";
echo "Value exists: " . (in_array(30, $array) ? "Yes" : "No") . "<br>";
print_r(array_keys($assocArray));
print_r(array_values($assocArray));
echo "Search Value: " . array_search(30, $array) . "<br>";

// 3. الحساب والإحصاءات
echo "Sum: " . array_sum($array) . "\n";
echo "Product: " . array_product($array) . "<br>";
echo "Count: " . count($array) . "<br>";

// 4. الفرز
sort($array);
echo "Sorted Array:<br>";
print_r($array);

rsort($array);
echo "Reverse Sorted Array:<br>";
print_r($array);

// 5. التعامل مع الاختلافات والتقاطع
$array3 = [10, 30, 50];
echo "Difference:<br>";
print_r(array_diff($array, $array3));

echo "Intersection:<br>";
print_r(array_intersect($array, $array3));

// 6. اختيار عناصر عشوائية
echo "Random Key:<br>";
print_r(array_rand($array, 2));

// 7. تطبيق الدوال
echo "Walk Function:<br>";
array_walk($array, fn(&$value) => $value *= 2);
print_r($array);

// 8. استبدال القيم
$array4 = ["name" => "Unknown"];
print_r(array_replace($assocArray, $array4));

?>
