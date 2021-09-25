<?php

namespace Database\Seeders;

use App\Models\tbbarang;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Rionaldo Tio';
        $user->email = 'rionaldo.6639@ski.sch.id';
        $user->password = bcrypt('rionaldo1');
        $user->image = 'user-image\ECYLiFFXp89QKcqiasOkHri6lhHqTiDmbcrB0bmq.png';
        $user->save();

        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Pen';
        $tbbarang->stock = '100';
        $tbbarang->harga = '5000';
        $tbbarang->img_barang = 'img-barang\ytqOBhto5gkSQpSf4FbfuM9sJD8x8Z4BMVmBmRMV.jpg';
        $tbbarang->save();

        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Pen Putih';
        $tbbarang->stock = '100';
        $tbbarang->harga = '5000';
        $tbbarang->img_barang = 'img-barang\ytqOBhto5gkSQpSf4FbfuM9sJD8x8Z4BMVmBmRMV.jpg';
        $tbbarang->save();

        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Buku';
        $tbbarang->stock = '100';
        $tbbarang->harga = '10000';
        $tbbarang->img_barang = 'img-barang\jHXQvfbQiAKV2GbyUftsuV6FVnydjBus3jTP4Wqh.jpg';
        $tbbarang->save();

        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Buku Kamus';
        $tbbarang->stock = '100';
        $tbbarang->harga = '10000';
        $tbbarang->img_barang = 'img-barang\jHXQvfbQiAKV2GbyUftsuV6FVnydjBus3jTP4Wqh.jpg';
        $tbbarang->save();

        $tbbarang = new tbbarang();
        $tbbarang->namabarang = 'Tip X';
        $tbbarang->stock = '100';
        $tbbarang->harga = '10000';
        $tbbarang->img_barang = 'img-barang\Zp7mxMGLdQm3IAGnbslDrkswEmH7Sk4MffsMXZ6g.jpg';
        $tbbarang->save();
    }
}
