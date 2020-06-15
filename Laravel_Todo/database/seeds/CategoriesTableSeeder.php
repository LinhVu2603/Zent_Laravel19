<!-- <?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			'name' => 'Balo, cặp, túi bóng rổ',
			'slug' => 'balo-cap-tui-bong-ro',
			'parent_id' => '4',
			'depth' => '1',
		]);
		DB::table('categories')->insert([
			'name' => 'Tất bóng rổ',
			'slug' => 'tat-bong-ro',
			'parent_id' => '4',
			'depth' => '1',
		]);
		DB::table('categories')->insert([
			'name' => 'Băng tay, chân',
			'slug' => 'bang-tay-chan',
			'parent_id' => '4',
			'depth' => '1',
		]);
		DB::table('categories')->insert([
			'name' => 'Quả bóng rổ ',
			'slug' => 'qua-bong-ro',
			'parent_id' => '4',
			'depth' => '1',
		]);
    }
}
 -->