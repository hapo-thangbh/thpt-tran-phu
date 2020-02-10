<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Page::create([
            'name' => 'THPT Trần Phú – Hoàn Kiếm',
            'banner' => '',
            'address' => '8 Hai Bà Trưng, Tràng Tiền, Hoàn Kiếm, Hà Nội',
            'phone' => '02438257303',
            'email' => 'bbtwebsitetranphuhoankiem@gmail.com',
            'description' => 'Trường Trung học Phổ thông Trần Phú – Hoàn Kiếm, tiền thân là Trường Petit Lycée, rồi Trường Albert Sarraut. Là một trong các trường trung học phổ thông công lập hệ không chuyên nổi tiếng với lịch sử lâu đời và chất lượng giáo dục hàng đầu được đánh giá cao trong số các trường trung học phổ thông của thủ đô.Trường thuộc quận Hoàn Kiếm, Hà Nội.'
        ]);
    }
}
