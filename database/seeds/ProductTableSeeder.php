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
        $product->price = 4499.99;
        $product->shipping_cost = 0.99;
        $product->image_path = "pc-gamer-1.png";
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
        $product->price = 1899.99;
        $product->shipping_cost = 0.99;
        $product->image_path = "pc-gamer-2.png";
        $product->save();

        $product = new Product();
        $product->name = "Pc Gamer Amd Ryzen 5 Disc Ssd 240 + 1tb Ram 16gb Monitor 22";
        $product->reference = "amd2413";
        $product->stock = "10";
        $product->details = "Marca: AMD
        Modelo: RYZEN 5
        Procesador: AMD RYZEN 5 3400G
        Disco duro: 1 TB
        RAM: 16 GB
        Sistema operativo: Windows 10";
        $product->description = "- PROCESADOR AMD RYZEN 5 3400G RELOJ DE AUMENTO MAX: 4.2GHz
        N.º DE NUCLEOS DE CPU: 4 N.º DE SUBPROCESOS 8.
        - TARJETA DE VIDEO : VEGA 11 DE 2GB !
        N.º DE NUCLEOS DE GPU: 11
        - MEMORIA RAM :PC DDR4 16GB (2X8) 3000MHZ ADATA XPG RGB
        - TIPO DE PLACA O BOARD : B450 PRO4 AM4 AMD
        - DISCO SOLIDO : M.2 240GB KINGSTON
        - DISCO HHD: 1000GB MECANICO.
        - CAJA & CHASIS : POOWER GROUP RGB EN VIDRIO
        - MONITOR SAMSUNG O LG : 22 FULL HD CON HDMI
        - FUENTE DE PODER: 450W REAL CERTIFICADA.
        - ACCESORIOS :TECLADO Y MOUSE GAMER RGB.
        - SISTEMA OPERATIVO: WINDOWS 10";
        $product->price = 1199.99;
        $product->shipping_cost = 0.99;
        $product->image_path = "pc-gamer-5.png";
        $product->save();

        $product = new Product();
        $product->name = "Pc Gamer Clx Con Procesador Intel Core I9-7900x Memoria";
        $product->reference = "clx1243";
        $product->stock = "2";
        $product->details = "Procesador Intel Core i97900X
        RAM 32Gb
        tarjeta gráfica Nvidia GeForce GTX 1080 Ti
        SSD 480Gb HDD 3Tb";
        $product->description = "Experiencia impresionante escenas realistas con la NVIDIA GeForce RTX tarjeta gráfica de este CLX escritorio de juego bundle.. Windows 10 64bitVR ReadyNVIDIA GeForce RTX 2070 8GB dedicado graphicsTechnical detalles: 9 de Generación de los procesadores Intel Core i79700K de procesador memoria de 16 gb; 960GB; unidad de estado sólido duro de 3 tb drive";
        $product->price =3399.99;
        $product->shipping_cost = 0.99;
        $product->image_path = "pc-gamer-3.png";
        $product->save();

        $product = new Product();
        $product->name = "NextComputing EDGE XT2i Creative Pro Workstation";
        $product->reference = "asd1243";
        $product->stock = "2";
        $product->details = "3.0 GHz Intel Core i9-10980XE 18-Core
        128GB of 2666 MHz DDR4 RAM
        NVIDIA GeForce RTX 3090 (24GB GDDR6X)
        1TB M.2 NVMe SSD + 512GB M.2 NVMe SSD";
        $product->description = "Diseñada para aplicaciones que incluyen Blackmagic DaVinci Resolve, Adobe Premiere Pro y After Effects, FXhome HitFilm, MAGIX Vegas Pro, Grass Valley EDIUS, Assimilate SCRATCH y The Foundry NUKE, la estación de trabajo EDGE XT2i Creative Pro de NextComputing proporciona un equilibrio de hardware para permitir los usuarios aprovechan al máximo su software de edición de video y se enfocan en crear contenido avanzado.";
        $product->price =8999.99;
        $product->shipping_cost = 0.99;
        $product->image_path = "pc-gamer-4.png";
        $product->save();
    }
}
