<?php
// إذا كان الطلب من نوع POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // قراءة البيانات من الطلب
    $command = $_POST['command']; // نوع أمر Git الذي سيتم تنفيذه
    $branch = $_POST['branch'] ?? ''; // الفرع (في حالة pull)

    // متغير لتخزين الإخراج
    $output = "";

    // تنفيذ أوامر Git بناءً على الإدخال
    if ($command === 'status') {
        $output = shell_exec('git status 2>&1'); // تنفيذ git status
    } elseif ($command === 'pull' && !empty($branch)) {
        $output = shell_exec("git pull origin $branch 2>&1"); // تنفيذ git pull
    } else {
        $output = "الأمر غير مدعوم أو المدخلات غير صحيحة.";
    }

    // عرض الإخراج
    echo "<pre>$output</pre>";
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST and Git Integration</title>
</head>
<body>
    <h1>دمج POST مع أوامر Git</h1>
    <form method="POST" action="">
        <label for="command">اختر أمر Git:</label>
        <select name="command" id="command" required>
            <option value="status">git status</option>
            <option value="pull">git pull</option>
        </select>

        <label for="branch">اسم الفرع (في حالة pull):</label>
        <input type="text" name="branch" id="branch" placeholder="main">

        <button type="submit">تنفيذ</button>
    </form>
</body>
</html>