<?php
	
	$xmlFile = pathinfo($_POST['image']);

function filePathParts($arg1) {
echo "Gửi file có tên là ".$arg1['filename']. "<br>";
echo "Kích cỡ file ".filesize($_POST['image'])." bytes<br>";
echo "Kiểu file là ".$arg1['extension']. "<br>";

}
function myRename()
{
	$xmlFile = pathinfo($_POST['image']);
	//echo $fullpath;
    $oldDirectory = $_POST['image'];
    $newDirectory = $xmlFile['dirname']."/upload/".date('Ymd')."_Irename.".$xmlFile['extension'];
    rename($oldDirectory, $newDirectory);
}

filePathParts($xmlFile);
myRename();
?>