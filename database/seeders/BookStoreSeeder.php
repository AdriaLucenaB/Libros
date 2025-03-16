<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookStore;

class BookStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookStores = [
            // 4º Fila
            [
                'name' => 'agapea',
                'url' => 'https://www.agapea.com/',
                'fila' => '4º Fila',
            ],
            [
                'name' => 'llardelllibre',
                'url' => 'https://www.llardelllibre.cat',
                'fila' => '4º Fila',
            ],
            // 3º Fila
            [
                'name' => 'carrefour',
                'url' => 'https://www.carrefour.es',
                'fila' => '3º Fila',
            ],
            [
                'name' => 'abacus',
                'url' => 'https://www.abacus.coop',
                'fila' => '3º Fila',
            ],
            // 2º Fila
            [
                'name' => 'lacentral',
                'url' => 'https://www.lacentral.com/',
                'fila' => '2º Fila',
            ],
            [
                'name' => 'fnac',
                'url' => 'https://www.fnac.es/',
                'fila' => '2º Fila',
            ],
            // 1º Fila
            [
                'name' => 'casadellibro',
                'url' => 'https://www.casadellibro.com/',
                'fila' => '1º Fila',
            ],
            [
                'name' => 'llibreriablanquerna',
                'url' => 'https://www.llibreriablanquerna.cat/',
                'fila' => '1º Fila',
            ],
            // Extra stores without fila (if needed)
            [
                'name' => 'elcorteingles',
                'url' => 'https://www.elcorteingles.es/',
                'fila' => null,
            ],
            [
                'name' => 'amazon',
                'url' => 'https://www.amazon.com',
                'fila' => null,
            ],
        ];

        foreach ($bookStores as $bookStore) {
            BookStore::create($bookStore);
        }
    }
}
