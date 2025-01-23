<?php
header("Content-Type: text/html;charset=utf-8");
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1024000)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		//echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// 判断当期目录下的 images 目录是否存在该文件
		// 如果没有 images 目录，你需要创建它，upload 目录权限为 777
		if (file_exists("../tuku/" . $_FILES["file"]["name"]))
		{
			//echo $_FILES["file"]["name"] . " 文件已经存在。 ";
			move_uploaded_file($_FILES["file"]["tmp_name"], "../tuku/" . $_FILES["file"]["name"]);
			echo "文件存储在: " . "../tuku/" . $_FILES["file"]["name"];
			echo "<script>alert('上传成功,文件名和地址是：" . "tuku/" . $_FILES["file"]["name"]."');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		}
		else
		{
			// 如果 images 目录不存在该文件则将文件上传到 images 目录下
			move_uploaded_file($_FILES["file"]["tmp_name"], "../tuku/" . $_FILES["file"]["name"]);
			echo "文件存储在: " . "../tuku/" . $_FILES["file"]["name"];
			echo "<script>alert('上传成功,文件名和地址是：" . "tuku/" . $_FILES["file"]["name"]."');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
		}
	}
}
else
{
	echo "非法的文件格式";
}
?>