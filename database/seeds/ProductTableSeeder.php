<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $product = new Product();
        $product->name = "Pc Gamer Alto Rendimiento Ideal Diseño Vfx Y Animacion 3d";
        $product->reference = "intel1234";
        $product->stock = "5";
        $product->details = "Marca: CoolerMaster MSI INTEL 
        Modelo: PC GAMER DISEÑO 2021 16 NUCLEOS 
        Procesador: Intel Core i7 10Ma Generacion! 12 NUCLEOS 
        Disco duro: 4.5 TB
        RAM: 32 GB 
        Sistema operativo: Windows 10";
        $product->description = "TORRE + MONITOR + TECLADO/MOUSE + CONECTIVIDAD +FUNKO-POP 3 Ventiladores RGB EN CHASIS FRONTAL DETALLES TECNICOS *Procesador: Core i7 10Th Generación! 
        ---- *REFRIGERACION LIQUIDA COOLER MASTER 360 ESPEJO RGB *Board: MSI Z490 TORPEDO *MEMORIA RAM: 32GB 3600MHZ *TARJETA DE VIDEO DEDICADA: RTX 3060TI 8GB DEDICADOS GDDR6 4 PUERTOS DE VIDEO, MULTIPLES PANTALLAS";
        $product->price = 15389700;
        $product->shipping_cost = 10000;
        $product->save();

        $product = new Product();
        $product->name = "Pc Gamer Ryzen 5/16gb Ram/500gb Ssd M.2/gtx 1650 4gb Video";
        $product->reference = "asus1234";
        $product->stock = "7";
        $product->details = "Marca: ASUS TUF GAMIN
        Modelo: GTX 1650
        Procesador: RYZEN 5 
        Disco duro: 500 GB 
        RAM: 16 GB 
        Sistema operativo: Windows 10";
        $product->description = "- MEMORIA RAM: 16GB PC DDR4 3200MHZ RGB.
        - BOARD PLACA : MSI B450 GAMING PLUS
        - DISCO SOLIDO: 500 GB ADATA SATA 3.0.
        - FUENTE DE PODER: 600W REDRAGON CERTIFICADA 80 PLUS BRONZE
        - CHASIS REDRAGON ATX 4 VENTILADORES RGB + CONTROL
        -TARJETA DE VIDEO: ASUS TUF GAMING GTX 1650 DE 4GB DDR6
        - COMBO TECLADO, MOUSE Y DIADEMA GAMER RGB JYR.
        - SISTEMA OPERATIVO: WINDOWS 10.
        - Monitor Samsung 22 Ips Ref F22t350fhl 1920 X 1080 5ms 75hz";
        $product->price = 5629900;
        $product->shipping_cost = 10000;
        $product->save();
    }
}
