<?php
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "Điện thoại",
    )
    2 => array(
        'id' => 2,
        'cat_title' => "Macbook"
    ),
    3 => array(
        'id' => 3,
        'cat_title' => "Laptop"
    ),
);

$list_product => array(
    1 => array(
        'id' => 1,
        'product_title' =>  'realme 12 8GB/512GB',
        'price' =>  6790000,
        'code' => 'UNI1',
        'product_desc' => 'realme 12 512GB kết hợp hài hòa giữa thiết kế đẹp mắt và công nghệ hiện đại.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/322956/TimerThumb/realme-12-512gb-(34).jpg',
        'product_content' => "<p>Cụm camera tròn lạ mắt, màn hình 120 Hz mượt mà và chip Snapdragon 685 mạnh mẽ, cùng với pin 5000 mAh và sạc nhanh 67W, mang đến trải nghiệm toàn diện, đáp ứng cả về hiệu suất và thẩm mỹ cho người dùng.</p>",
        'cat_id' => 1 //vì đây là điện thoại
    ),
    2 => array(
        'id' => 2,
        'product_title' =>  'Samsung Galaxy A26 5G 8GB/256GB',
        'price' =>  7690000,
        'code' => 'UNI2',
        'product_desc' => 'Samsung Galaxy A26 là smartphone tầm trung nổi bật với màn hình 120 Hz mượt mà',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/334777/samsung-galaxy-a26-5g-hong-thumbn-600x600.jpg',
        'product_content' => "<p>chip Exynos 1380 mạnh mẽ và camera 50 MP OIS sắc nét. Thiết kế thời thượng, pin 5000 mAh sạc nhanh 25W cùng IP67 bền bỉ giúp máy đáp ứng tốt mọi nhu cầu. Với hiệu năng ổn định và nhiều tính năng thông minh, đây là lựa chọn đáng cân nhắc cho người dùng hiện đại.</p>",
        'cat_id' => 1 //vì đây là điện thoại
    ),
    3 => array(
        'id' => 3,
        'product_title' =>  'OPPO Reno13 F 5G 8GB/256GB',
        'price' =>  9390000,
        'code' => 'UNI3',
        'product_desc' => 'OPPO Reno13 F 5G, một thành viên mới toanh của nhà OPPO đã đổ bộ đến Việt Nam.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/332936/TimerThumb/oppo-reno13-f-5g-(24).jpg',
        'product_content' => "<p>Sở hữu khả năng kháng nước cao, chip Snapdragon mạnh mẽ, dung lượng pin lớn cùng các tính năng AI tiện ích và thiết kế đẹp mắt, tất cả sẽ mang đến cho người dùng yêu thích chụp ảnh hoặc thường xuyên đi du lịch có một người bạn đồng hành đúng điệu.</p>",
        'cat_id' => 1 //vì đây là điện thoại
    ),
    4 => array(
        'id' => 4,
        'product_title' =>  'MacBook Air 13 inch M4 16GB/256GB',
        'price' =>  26990000,
        'code' => 'UNI4',
        'product_desc' => 'Không làm người dùng thất vọng, Apple đã cho ra mắt MacBook Air M4 16GB',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/335362/macbook-air-13-inch-m4-xanh-den-600x600.jpg',
        'product_content' => "<p>Bộ vi xử lý Apple M4 được sản xuất trên tiến trình tiên tiến của Apple, giúp tối ưu hiệu suất và tiết kiệm năng lượng vượt trội. Với 10 nhân CPU, con chip này mang lại khả năng xử lý nhanh chóng và mượt mà cho mọi tác vụ, từ công việc văn phòng, lập trình, chỉnh sửa ảnh đến biên tập video.</p>",
        'cat_id' => 2 //vì đây là Macbook
    ),
    5 => array(
        'id' => 5,
        'product_title' =>  'MacBook Air 13 inch M1 8GB/256GB',
        'price' =>  17490000,
        'code' => 'UNI5',
        'product_desc' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/231244-600x600.jpg',
        'product_content' => "<p>Chiếc MacBook này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tiến trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc.</p>",
        'cat_id' => 2 //vì đây là Macbook
    ),
    6 => array(
        'id' => 6,
        'product_title' =>  'MacBook Air 13 inch M2 16GB/256GB',
        'price' =>  21490000,
        'code' => 'UNI6',
        'product_desc' => 'Với sức mạnh bùng nổ đến từ bộ vi xử lý M2 cùng thiết kế của một chiếc laptop cao cấp - sang trọng.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-vang-1-600x600.jpg',
        'product_content' => "<p>Tiếp nối sự thành công của M1, thế hệ M2 sử dụng quy trình sản xuất 5 nm hiện đại với CPU 8 nhân, GPU 8 nhân cho các tác vụ thiết kế đồ họa, chỉnh sửa hình ảnh hay render video trên các ứng dụng như Photoshop, Adobe Illustrator, Adobe Premiere,... chưa bao giờ dễ dàng hơn đến thế.</p>",
        'cat_id' => 2 //vì đây là Macbook
    ),
)

?>