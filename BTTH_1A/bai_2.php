<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai_2</title>
    <style>
    body {
        background-color: #ccc;
        font-size: 32px;
    }
    </style>
</head>

<body>
    <?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];

/*
    Cho mảng $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:
    “Màu đỏ là màu yêu thích của Anh, xanh là màu yêu thích của Sơn, cam là màu yêu
         thích của Thắng, còn màu yêu thích của tôi là màu trắng "
*/

echo "Màu <span style=\"color: red\">" . $arrs[0] . "</span> là màu yêu thích của Anh, <span style=\"color: green\">" . $arrs[1] . "</span> là màu yêu thích của Sơn, <span style=\"color: orange\">" . $arrs[2] . "</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <span style=\"color: white\">" . $arrs[3] . "</span>";
?>
</body>

</html>