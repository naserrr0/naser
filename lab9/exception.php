<?php

// تعريف Exceptions مخصصة
class DivideByZeroException extends Exception {}
class DatabaseConnectionException extends Exception {}
class QueryExecutionException extends Exception {}

// دالة تقوم بالقسمة وترمي exception إذا كان المقام صفرًا
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new DivideByZeroException("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

// دالة تحاكي فشل الاتصال بقاعدة البيانات
function connectToDatabase() {
    throw new DatabaseConnectionException("Could not connect to the database.");
}

// دالة تحاكي فشل تنفيذ استعلام قاعدة البيانات
function executeQuery() {
    throw new QueryExecutionException("Query execution failed.");
}

// استخدام try-catch-finally للتعامل مع Exceptions
try {
    // محاولة إجراء قسمة
    echo divide(10, 0) . "<br>";
} catch (DivideByZeroException $e) {
    echo "Caught DivideByZeroException: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Caught Generic Exception: " . $e->getMessage() . "<br>";
} finally {
    echo "This will always be executed after try-catch. <br>";
}

// استخدام try-catch-finally للتعامل مع Exceptions في قاعدة البيانات
try {
    connectToDatabase();
    executeQuery();
} catch (DatabaseConnectionException $e) {
    echo "Caught DatabaseConnectionException: " . $e->getMessage() . "<br>";
} catch (QueryExecutionException $e) {
    echo "Caught QueryExecutionException: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Caught Generic Exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Database cleanup operations here.\n";
}

// مثال على تسلسل Exceptions
try {
    try {
        echo divide(10, 0) . "\n";
    } catch (DivideByZeroException $e) {
        throw new Exception("Custom error message", 0, $e);
    }
} catch (Exception $e) {
    echo "Caught Chained Exception: " . $e->getMessage() . "<br>";
    echo "Previous Exception: " . $e->getPrevious()->getMessage() . "<br>";
}

?>