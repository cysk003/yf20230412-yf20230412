$image_directory = "https://ghproxy.net/raw.githubusercontent.com/yf20230412/master/main/TvBox/img/"; //�趨ͼƬĿ¼

$image_type = array(".jpg",".gif",".png"); //�趨ͼƬ����

header("location:$image_directory./".image_rand_output($image_directory,$image_type)."");

function image_rand_output($image_directory,$image_type) //������ͼƬ����

{

$dh = dir($image_directory);

while (false !== ($image = $dh -> read()))

{

if(in_array(strtolower(strrchr($image,".")),$image_type))

$image_array[] = $image;

}

$dh -> close();

$key = array_rand($image_array);

return $image_array[$key];

}

?>