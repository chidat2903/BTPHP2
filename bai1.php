<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $schools = array(
        'Students' => array(
            'SV01' => array(
                'name' => 'Phan Văn Cường',
                'birth' => '10/11/1988',
                'gender' => 'Nam'
            ),
            'SV02' => array(
                'name' => 'Nguyễn Văn Hoàng',
                'birth' => '04/12/1990',
                'gender' => 'Nam'
            ),
            'SV03' => array(
                'name' => 'Trần Thị Hằng',
                'birth' => '01/07/1992',
                'gender' => 'Nữ'
            ),
            'SV04' => array(
                'name' => 'Võ Khánh Linh',
                'birth' => '01/07/1994',
                'gender' => 'Nữ'
            ),
        ),
        'Teacher' => array(
            'GV01' => array(
                'name' => 'Trần Thiện Thanh',
                'birth' => '04/06/1982',
                'gender' => 'Nam'
            ),
            'GV02' => array(
                'name' => 'Nguyễn Văn Hiếu',
                'birth' => '05/10/1981',
                'gender' => 'Nam'
            ),
            'GV03' => array(
                'name' => 'Nguyễn Thị Lệ',
                'birth' => '04/12/1981',
                'gender' => 'Nữ'
            ),
        )
        );
?>
    <div id="content">
        <?php
            foreach($schools as $k => $v){
                ?>
                <h1 class="list_title"><?php echo $k; ?></h1>
                <ul class="list_schools">
                    <?php foreach($v as $k1 => $v1){
                        ?>
                        <li>
                            <p><span>Mã SV: </span><?php echo $k1; ?></p>
                            <p><span>Tên: </span><?php echo $v1['name'] ?></p>
                            <p><span>Ngày sinh: </span><?php echo $v1['birth'] ?></p>
                            <p><span>Giới tính: </span><?php echo $v1['gender'] ?></p>
                        </li>
                    <?php }
                    ?>
                </ul>
                <?php
            }
        ?>
    </div>
</body>
</html>
