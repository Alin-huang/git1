<?php
$file = $_FILES['data'];
    if ($file['error'] > 0)  {
        echo 'Error:', $file['error'], '<br/>';
    }
    else {
        echo '文件名称:', $file['name'], '<br/>';
        echo '文件类型:', $file['type'], '<br/>';
        echo '文件大小:', ($file['size'] / 1024), ' Kb<br/>';
        echo '临时文件:', $file['tmp_name'];
        $filePath = 'upload/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $filePath);
        echo '文件保存在:',  $filePath;
        echo "<p><img src=\"{$filePath}\"/></p>";
}
