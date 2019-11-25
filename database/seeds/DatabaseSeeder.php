<?php

use Illuminate\Database\Seeder;
use App\User;
use App\model\Category;
use App\model\Question;
use App\model\Reply;
use App\model\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class,10)->create();
    	factory(Category::class,5)->create();
    	factory(Question::class,10)->create();
    	factory(Reply::class,50)->create()->each(function($reply){
    		return $reply->like()->save(factory(Like::class)->make());
    	});
    }
}
