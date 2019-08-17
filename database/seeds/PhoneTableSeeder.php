<?php

use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "slug" => "blackberry_keyone_64gb_black",
                "name" => "BlackBerry KEYone 4/64GB - Black",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/Blackberry_KEYone_64GB_DualSIM.jpg",
                "price" => 559000,
                "dimension" => 4.5,
                "memory" => "4GB RAM, 64 GB Storage",
                'manufacturer_id' => 1
            ],
            [
                "slug" => "galaxy_a10_32gb_red",
                "name" => "Galaxy A10 2/32 - Red",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/Galaxy_A10_Red.jpg",
                "price" => 189000,
                "dimension" => 6.2,
                "memory" => "2GB RAM, 32 GB Storage",
                'manufacturer_id' => 2
            ],
            [
                "slug" => "galaxy_note9_128gb_alpine_white",
                "name" => "Galaxy Note9 6/128GB Alpine White",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/Galaxy_Note9_Alpine_White.jpg",
                "price" => 1499000,
                "dimension" => 6.4,
                "memory" => "6GB RAM, 128 GB Storage",
                'manufacturer_id' => 2
            ],
            [
                "slug" => "oneplus_6t_256gb_mclaren_edition",
                "name" => "OnePlus 6T 10/256GB McLaren Edition",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/One_Plus_6T_McLaren.jpg",
                "price" => 1219000,
                "dimension" => 6.41,
                "memory" => "10GB RAM, 256 GB Storage ",
                'manufacturer_id' => 3
            ],
            [
                "slug" => "google_pixel_3_xl_128gb_clearly_white",
                "name" => "Google Pixel 3 XL 4/128GB Clearly White",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/Pixel_3_XL_white.jpg",
                "price" => 1490000,
                "dimension" => 6.3,
                "memory" => "4GB RAM, 128 GB Storage",
                'manufacturer_id' => 5
            ],
            [
                "slug" => "iphone_xr_128gb_yellow_dual_xim",
                "name" => "iPhone XR 128GB Yellow (Dual SIM)",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/iPhone_XR_Yellow.jpg",
                "price" => 1430000,
                "dimension" => 6.5,
                "memory" => "3GB RAM, 128 GB Storage",
                'manufacturer_id' => 4
            ],
            [
                "slug" => "iphone_xs_max_256gb_space_gray_dual_sim",
                "name" => "iPhone XS Max 256GB Space Gray (Dual SIM)",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/iPhone_XS_Max_Space_Gray.jpg",
                "price" => 2170000,
                "dimension" => 6.5,
                "memory" => "4GB RAM, 256 GB Storage",
                'manufacturer_id' => 4
            ],
            [
                "slug" => "iphone_x_256gb_space_gray",
                "name" => "iPhone X 256GB Space Gray",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/iPhone_X_Space_Gray.jpg",
                "price" => 1630000,
                "dimension" => 5.8,
                "memory" => "3GB RAM, 256 GB Storage",
                'manufacturer_id' => 4
            ],
            [
                "slug" => "galaxy_note10_256gb",
                "name" => "Galaxy Note10 8/256GB",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/note10.png",
                "price" => 1499000,
                "dimension" => 6.3,
                "memory" => "8GB RAM, 256 GB Storage",
                'manufacturer_id' => 2
            ],
            [
                "slug" => "galaxy_note10_plus_256gb",
                "name" => "Galaxy Note10+ 12/256GB",
                "image" => "https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/note10_plus.png",
                "price" => 1699000,
                "dimension" => 6.8,
                "memory" => "12GB RAM, 256 GB Storage",
                'manufacturer_id' => 2
            ]
        ];

        DB::table('phones')->insert($data);
    }
}
