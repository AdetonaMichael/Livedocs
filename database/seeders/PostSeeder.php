<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ModifyForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use  ModifyForeignKey, TruncateTable;


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->DisableForeignKey();
      $this->truncate('posts');
      \App\Models\Post::factory(3)->state(['title'=>'untitled'])->create();
      $this->EnableForeignKey();
    }
}
