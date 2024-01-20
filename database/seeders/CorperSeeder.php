<?php

namespace Database\Seeders;

use App\Models\Corper;
use App\Models\users\Corper as UsersCorper;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorperSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('corpers');
        $user = UsersCorper::factory(5)->create();
        $this->enableForeignKeys();
    }
}
