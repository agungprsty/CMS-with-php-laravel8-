<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'), // password
            'address' => $this->faker->address,
            'remember_token' => Str::random(10),
        ];
    }
}

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence;
        return [
            'posts_id' => random_int(1,9),
            'category_id' => random_int(1,9),
            'user_id' => random_int(1,9),
            'title' => $title,
            'subtitle' => $this->faker->sentence, // password
            'slug' => str_slug($title, '-'),
            'preview' => $this->faker->paragraph,
            'content' => $this->faker->paragraph,
            'created_at' => now(),
            'update_at' => now(),
        ];
    }
}

class CategoryPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => random_int(1,9),
            'posts_id' => random_int(1,9),
        ];
    }
}

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name_category = $this->faker->unique()->sentence;
        return [
            'category_id' => random_int(1,9),
            'name_category' => $name_category,
            'slug_category' => str_slug($name_category, '-'),
        ];
    }
}

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name_comment = $this->faker->unique()->sentence;
        return [
            'comments_id' => random_int(1,9),
            'posts_id' => random_int(1,9),
            'name_comment' => str_slug($name_comment, '-'),
            'comment' => $this->faker->paragraph,
            'date_comment' => now(),
        ];
    }
}

// $factory->define(User::class, function(Faker $faker){
//     return [
//         'username' => $faker->username,
//         'name' => $faker->real_name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => bcrypt('1234567890'), // password
//         'address' => $faker->address,
//         'gender' => $faker->gender,
//         'joined' => $faker->joined,
//         'remember_token' => Str::random(10),
//     ];
// });

// $factory->define(Posts::class, function(Faker $faker){
//     $title = $faker->unique()->sentence;
//     $isPublished = ['1', '0'];
//     return [
//         'posts_id' => random_int(1,9),
//         'category_id' => random_int(1,5),
//         'user_id' => random_int(1,9),
//         'title' => $title,
//         'subtitle' => $faker->sentence,
//         'slug' => str_slug($title, '-'),
//         'preview' => $faker->paragraph,
//         'content' => $faker->paragraph,
//         'is_published' => $isPublished[rand(0, 1)],
//         'created_at' => now(),
//         'update_at' => now(),
//     ];
// });

// $factory->define(Category::class, function(Faker $faker){
//     $name = $faker->unique()->sentence;
//     return [
//         'category_id' => random_int(1,5),
//         'name_category' => $name,
//         'slug_category' => str_slug($name, '-'),
//     ];
// });

// $factory->define(CategoryPost::class, function(){
//     return [
//         'category_id' => random_int(1,5),
//         'posts_id' => random_int(1,5),
//     ];
// });

// $factory->define(Comment::class, function(Faker $faker){
//     $name_comment = $faker->unique()->sentence;
//     return [
//         'comments_id' => random_int(1,200),
//         'posts_id' => random_int(1,10),
//         'name_comment' => str_slug($name_comment, '-'),
//         'comment' => $faker->paragraph,
//         'date_comment' => now(),
//     ];
// });
