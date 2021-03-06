<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Sepeda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bikes = [
            [
                'merk' => 'Mongoose Legion', 
                'jenis' => 'BMX',
                'no_rangka' => '12A20', 
                'warna' => 'Biru abu-abu',
                'gambar' => 'bmx-mongoose-legion.jpg', 
                'deskripsi' => 'sepeda bmx biru abu dengan rangka 4130 chromoly, rem U-brakes removable mounts, dan roda berukuran 20 inch. Cocok untuk pemula dari segala usia.',
                'jml_sepeda' => '15', 
                'harga_sewa' => '60000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Kross Evox', 
                'jenis' => 'BMX',
                'no_rangka' => '12A21', 
                'warna' => 'Biru Hitam',
                'gambar' => 'bmx-kross-evox.jpg', 
                'deskripsi' => 'sepeda bmx biru hitam dengan rangka MIG welded dan rem V-Brake, cocok untuk anak-anak yang ingin beratraksi dengan bmx.',
                'jml_sepeda' => '50', 
                'harga_sewa' => '50000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Kross 20T', 
                'jenis' => 'BMX',
                'no_rangka' => '12A25', 
                'warna' => 'Hijau',
                'gambar' => 'bmx-kross-20T.jpg', 
                'deskripsi' => 'sepeda bmx hijau dengan rangka MIG welded dan rem V-Brake, cocok untuk anak-anak yang ingin beratraksi dengan bmx.',
                'jml_sepeda' => '15', 
                'harga_sewa' => '50000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Pacific', 
                'jenis' => 'Gunung',
                'no_rangka' => '13B01', 
                'warna' => 'merah',
                'gambar' => 'mountain-pacific.jpg', 
                'deskripsi' => 'sepeda gunung merah dengan suspensi 27,5 dan gigi Shimano 2x10 speed. Cocok untuk travelling dan berpetualang ke berbagai medan.',
                'jml_sepeda' => '5', 
                'harga_sewa' => '60000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Raleigh', 
                'jenis' => 'Gunung',
                'no_rangka' => '13B02', 
                'warna' => 'hitam',
                'gambar' => 'mountain-raleigh.jpg', 
                'deskripsi' => 'sepeda gunung hitam merah dengan rangka hydroformed alumunium frame, ban berukuran 27,5 inch dan rem tektro mechanical disc. Cocok untuk berpetualang di tempat lembab.',
                'jml_sepeda' => '10', 
                'harga_sewa' => '50000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Reid', 
                'jenis' => 'Gunung',
                'no_rangka' => '13B03', 
                'warna' => 'Biru Hitam',
                'gambar' => 'mountain-reid.jpg', 
                'deskripsi' => 'sepeda gunung biru hitam dengan suspensi fork dan rangka hydroformed alloy yang dirancang khusus untuk wanita. Cocok untuk berpetualang di tempat luas seperti hutan dan pegunungan.',
                'jml_sepeda' => '40', 
                'harga_sewa' => '50000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'London Taxi', 
                'jenis' => 'Kasual',
                'no_rangka' => '14C20', 
                'warna' => 'Hitam Coklat',
                'gambar' => 'casual-london-taxi.jpg', 
                'deskripsi' => 'sepeda kasual dengan desain klasik. Dilengkapi dengan rangka Hi-ten steel dan ban berukuran 700x38 inch. Cocok untuk bersepeda di jalan perkotaan.',
                'jml_sepeda' => '25', 
                'harga_sewa' => '80000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Sixthreezero', 
                'jenis' => 'Kasual',
                'no_rangka' => '14C21', 
                'warna' => 'Abu-abu',
                'gambar' => 'casual-sixthreezero.jpg', 
                'deskripsi' => 'sepeda kasual abu-abu dengan rangka 19 inch steel dan ban berukuran 26 inch. Cocok untuk bersepeda mengelilingi pantai.',
                'jml_sepeda' => '30', 
                'harga_sewa' => '40000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Townie', 
                'jenis' => 'Kasual',
                'no_rangka' => '14C22', 
                'warna' => 'Merah muda',
                'gambar' => 'casual-townie.jpg', 
                'deskripsi' => 'sepeda kasual merah muda dengan gigi Shimano 7-speed derailleur dan ban berukuran 26 inch. Cocok untuk berkeliling disekitar kota atau perumahan.',
                'jml_sepeda' => '35', 
                'harga_sewa' => '30000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'PK Ripper', 
                'jenis' => 'Fixie',
                'no_rangka' => '15F11', 
                'warna' => 'Biru Hitam',
                'gambar' => 'fixie-pk-ripper.jpg', 
                'deskripsi' => 'sepeda fixie (fixed gear) biru hitam dengan kustomisasi tampilan yang memukau. Cocok untuk dipakai di segala tempat.',
                'jml_sepeda' => '15', 
                'harga_sewa' => '70000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'Polygon', 
                'jenis' => 'Fixie',
                'no_rangka' => '15F12', 
                'warna' => 'Putih',
                'gambar' => 'fixie-polygon.jpg', 
                'deskripsi' => 'sepeda fixie (fixed gear) putih dengan cat metallic. Cocok untuk dipakai di segala tempat',
                'jml_sepeda' => '5', 
                'harga_sewa' => '50000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'merk' => 'United Soloist', 
                'jenis' => 'Fixie',
                'no_rangka' => '15F13', 
                'warna' => 'Merah kuning hijau',
                'gambar' => 'fixie-united-soloist.jpg', 
                'deskripsi' => 'sepeda fixie (fixed gear) dengan kustomisasi cat merah kuning hijau yang memukau. Cocok untuk dipakai di segala tempat.',
                'jml_sepeda' => '10', 
                'harga_sewa' => '40000',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('bikes')->insert($bikes);
    }
}
