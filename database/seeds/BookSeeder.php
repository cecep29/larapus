<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::create(['name'=>'Cecep Efendi']);
        $author2 = Author::create(['name'=>'Gifahri Razqa Efendi']);
        $author3 = Author::create(['name'=>'Raffasya Pradipta Efendi']);

        //sample buku
        $book1 = Book::create(['title'=>'Belajar Laravel', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Kesatria Baja Putih', 'amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Pangeran Melawan Naga', 'amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Sang Pemberani', 'amount'=>3, 'author_id'=>$author3->id]);

    }
}
