<?php

class Product {

    public function getProducts() {

        return [
            "lipstik" => [
                "nama" => "Velvet Matte Lipstick",
                "deskripsi" => "Hasil akhir matte premium dengan tekstur lembut.",
                "gambar" => "lipstik.png",
                "wa" => "Velvet Matte Lipstick"
            ],
            "cushion" => [
                "nama" => "Glow Perfect Cushion",
                "deskripsi" => "Coverage natural dengan efek glowing.",
                "gambar" => "cushion.png",
                "wa" => "Glow Perfect Cushion"
            ],
            "blush" => [
                "nama" => "Silk Touch Blush",
                "deskripsi" => "Warna lembut untuk tampilan fresh dan elegan.",
                "gambar" => "blush.png",
                "wa" => "Silk Touch Blush"
            ]
        ];
    }
}