<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Acer Nitro 5',
                'price' => 200,
                'category' => 'Laptop',
                'description' => 'Acer Nitro nổi tiếng là một thiết kế phá cách diện mạo cùng hiệu năng mạnh mẽ ấn tượng, chiếc laptop này có ấn tượng mạnh từ ngoài vào trong.',
                'gallery' => 'https://images.acer.com/is/image/acer/Nitro-5-AN515-54-Bl1-01a-1?:Visual-Filter-L$',
            ],
            [
                'name' => 'Lenovo Ideapad Gaming 3',
                'price' => 300,
                'category' => 'Laptop',
                'description' => 'Laptop Lenovo Ideapad Gaming 3 15ARH7 rất được ưa chuộng bởi cộng đồng game thủ.',
                'gallery' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/2/_/2_193.png'
            ],
            [
                'name' => 'ASUS TUF Gaming F15 FX506HC-HN144W',
                'price' => 150,
                'category' => 'Laptop',
                'description' => 'Laptop Asus TUF Gaming F15 FX506HC-HN144W sở hữu thiết kế táo bạo và độc đáo bậc nhất trên thị trường với gam màu Graphite black nổi bật mà cực huyền bí.',
                'gallery' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/0/_0008_21163_laptop_asus_tuf_gaming_f15.jpg',
            ],
            [
                'name' => 'iPhone 14 Pro Max 128GB',
                'price' => 250,
                'category' => 'Smartphone',
                'description' => 'iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh ',
                'gallery' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/x/_/x_m_24.png'
            ],
            [
                'name' => 'OPPO Reno8 T 5G (8GB - 128GB)',
                'price' => 140,
                'category' => 'Smartphone',
                'description' => 'OPPO Reno8 T sở hữu thông số hiệu năng mạnh mẽ khi được trang bị bộ vi xử lý thế hệ mới của Snapdragon 695. Điện thoại OPPO mới này sở hữu tấm nền AMOLED 6.7 inch thế hệ mới.',
                'gallery' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/p/oppo-reno8t-den1-thumb-600x600.jpg',
            ],
            [
                'name' => 'Samsung Galaxy Watch5',
                'price' => 180,
                'category' => 'Smartwatch',
                'description' => 'Đồng hồ Galaxy Watch5 là thế hệ đồng hồ đeo tay thông minh tiếp theo được Samsung ra mắt trong năm nay. Với thiết kế đột phá cùng các công nghệ mới nhất thì đây là lựa chọn tuyệt vời cho những ai yêu thích sự trẻ trung và sang trọng.',
                'gallery' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/2/_/2_167.png',
            ]
        ]);
    }
}
