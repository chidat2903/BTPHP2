<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .row{
            margin: 10px;
        }
        button{
            float: right;
            margin-right: 20px;
            margin-bottom: 15px;
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #fff;
            background: #6699cc;
        }
        .product-type{
            background: #0099cc;
            height: 50px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            color: white;
            
        }
        .product-type i{
            font-size: 20px;
            margin: 5px;
        }
        .product-type h3{
            padding: 0 5px;
        }
        .show-product{
            display: flex;
            margin: 20px 0;
        }
        .card{
            padding: 10px;
        }
        .product_img{
            display: inline;
        }
        .img-phone{
            width: 300px;
            height: 300px;
            margin-top: 15px;
            background-size: cover;
        }
        .product_name{
            font-size: 20px;
            margin-left: 15px;
            margin-top: 15px;
            padding: 10px 0;
        }
        .product_price{
            color: red;
            font-size: 20px;
            margin-left: 15px;
        }
        .product_evaluate{
            font-size: 15px;
            margin-left: 15px;
            justify-content: space-between;
        }
    </style>
    <title>Bài 2</title>
</head>
<body>
    <?php
    $product = array(
        'Điện thoại Samsung' => array(
            'SS01' => array(
                'img' => 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_31155/samsung-galaxy-_main_668_1020.png.webp',
                'name' => 'Samsung Zflip 4',
                'price' => '28.000.000',
                'evaluate' => '45'

            ),
            'SS02' => array(
                'img' => 'https://cdn2.cellphones.com.vn/x358,webp,q100/media/catalog/product/s/a/samsung_galaxy_z_fold_4-12.jpg',
                'name' => 'Samsung Zfold 4',
                'price' => '40.000.000',
                'evaluate' => '104'
            ),
            'SS03' => array(
                'img' => 'https://images.samsung.com/is/image/samsung/p6pim/vn/2302/gallery/vn-galaxy-s23-s918-sm-s918bzgbxxv-534859398?$650_519_PNG$',
                'name' => 'Samsung Galaxy s23',
                'price' => '29.000.000',
                'evaluate' => '65'
            ),
            'SS04' => array(
                'img' => 'https://images.samsung.com/vn/smartphones/galaxy-s22-ultra/buy/S22_Ultra_ProductKV_Green_MO.jpg',
                'name' => 'Samsung Galaxy s22 Ultra',
                'price' => '25.000.000',
                'evaluate' => '34'
            ),
        ),
        'Điện thoại Iphone' => array(
            'IP01' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-den-thumb-600x600.jpg',
                'name' => 'Iphone 14 Promax',
                'price' => '37.000.000',
                'evaluate' => '20'
            ),
            'IP02' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-den-thumb-600x600.jpg',
                'name' => 'Iphone 14 Pro',
                'price' => '32.000.000',
                'evaluate' => '78'
            ),
            'IP03' => array(
                'img' => 'https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2022/09/08/2222.png',
                'name' => 'Iphone 14',
                'price' => '28.000.000',
                'evaluate' => '200'
            ),
            'IP04' => array(
                'img' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/s/e/se_2020_0001_layer_2_3_1_4_3.jpg',
                'name' => 'Iphone SE',
                'price' => '23.000.000',
                'evaluate' => '49'
            ),
        )
        );
?>
    <div class="row">
        <div class="product-type">
            <i class="fa-solid fa-mobile-screen"></i>
            <h2>ĐIỆN THOẠI SAMSUNG</h2>
            <i class="fa-solid fa-mobile-screen"></i>
        </div>
        <div class="show-product">
            <?php 
                foreach($product['Điện thoại Samsung'] as $key => $products){
                    echo '
                    <div class="card">
                        <div class="product_img">
                            <img class="img-phone" src="'.$products['img'].'" alt="Điện thoại Samsung">
                        </div>           
                        <div class="product_name">
                            <span><b>'.$products['name'].'</b></span>
                        </div>
                        <div class="product_price">
                            <b class="price">'.$products['price'].'</b>
                        </div>
                        <div class="product_evaluate">
                            <button><i class="fa fa-plus"></i>Xem thêm</button>
                            <button><i class="fa fa-cart-shopping"></i></button>
                            <span>'.$products['evaluate'].' Đánh giá</span>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="product-type">
            <i class="fa-brands fa-apple"></i>
            <h2>ĐIỆN THOẠI IPHONE</h2>
            <i class="fa-brands fa-apple"></i>
        </div>
        <div class="show-product">
            <?php 
                foreach($product['Điện thoại Iphone'] as $key => $products){
                    echo '
                    <div class="card">
                        <div class="product_img">
                            <img class="img-phone" src="'.$products['img'].'" alt="Điện thoại Samsung">
                        </div>           
                        <div class="product_name">
                            <span><b>'.$products['name'].'</b></span>
                        </div>
                        <div class="product_price">
                            <b class="price">'.$products['price'].'</b>
                        </div>
                        <div class="product_evaluate">
                            <button><i class="fa fa-plus"></i>Xem thêm</button>
                            <button><i class="fa fa-cart-shopping"></i></button>
                            <span>'.$products['evaluate'].' Đánh giá</span>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
</body>
</html>
