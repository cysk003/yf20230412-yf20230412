<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ҳ��ÿˢ��һ�Σ����ز�ͬ�ı���ͼƬ</title>
	<style>
	#changebg{width: 964px;height: 460px;margin: 0 auto;}
    </style>
</head>

<body>

<div id="changebg"></div>

<script>
//����������ͼƬ·����ÿ��·����""��������ÿ��·��֮���ö��ŷֿ���Ҫ��Ӣ��״̬��������š�

var bg_img=[

    "https://ghproxy.net/raw.githubusercontent.com/yf20230412/master/main/TvBox/img/12.jpg",

    "https://ghproxy.net/raw.githubusercontent.com/yf20230412/master/main/TvBox/img/13.jpg",

    "https://ghproxy.net/raw.githubusercontent.com/yf20230412/master/main/TvBox/img/14.jpg",

    "https://ghproxy.net/raw.githubusercontent.com/yf20230412/master/main/TvBox/img/15.jpg"
    
] 

document.getElementById("changebg").style.background="url("+bg_img[Math.floor(Math.random()*(bg_img.length))]+")";  

</script>
</body>
</html>