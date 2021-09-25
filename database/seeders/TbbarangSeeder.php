<?php

namespace Database\Seeders;

use App\Models\tbbarang;
use App\Models\User;
use Illuminate\Database\Seeder;

class TbbarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Pen';
        $tbbarang->stock = '100';
        $tbbarang->harga = '5000';
        $tbbarang->image = 'img-barang\ytqOBhto5gkSQpSf4FbfuM9sJD8x8Z4BMVmBmRMV.jpg';
        $tbbarang->save();

        $tbbarang->namabarang = 'Buku';
        $tbbarang->stock = '100';
        $tbbarang->harga = '10000';
        $tbbarang->img_barang = 'img-barang\jHXQvfbQiAKV2GbyUftsuV6FVnydjBus3jTP4Wqh.jpg';
        $tbbarang->save();

        $tbbarang->namabarang = 'Tip X';
        $tbbarang->stock = '100';
        $tbbarang->harga = '10000';
        $tbbarang->img_barang = 'img-barang\Zp7mxMGLdQm3IAGnbslDrkswEmH7Sk4MffsMXZ6g.jpg';
        $tbbarang->save();
    }
}
