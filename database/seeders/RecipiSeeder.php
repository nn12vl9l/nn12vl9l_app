<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipis')->insert([
            [
                'name' => '秋刀魚の味噌煮',
                'category_id' => 3,
                'meterial' => "秋刀魚:2匹\n生姜:少々",
                'seasoning' => "酒:大さじ2\n 醤油:大さじ2\n 味噌:大さじ3\n みりん:大さじ2",
                'recipi' => "1.秋刀魚は頭、尾を切リ3等分にします。\n2.酒・醤油・味噌・みりん・生姜を入れ沸騰したら秋刀魚を入れます。\n3.蓋を取り全体的に絡めて完成です。",
                'img_path' => 'https://img.cpcdn.com/recipes/6959177/m/4f3bb26d1a97ef9ea4df86f32918c881?u=14753809&p=1632647307',
                'comment' => '食欲の秋に欠かせない1品です。魚料理苦手な私でも美味しくできました！',
            ],
            [
                'name' => 'ささみの磯辺焼き',
                'category_id' => 2,
                'meterial' => "鶏ささみ:2本\n焼き海苔:1/2枚\n片栗粉:適量\nサラダ油:大さじ1",
                'seasoning' => "醤油:大さじ2\n酒:大さじ2\nみりん:大さじ1/2\n砂糖:小さじ1",
                'recipi' => "1.ささみの筋を取り縦半分に切ってから長さを半分に切る。\n2.ささみに片栗粉をまぶす。\n3.ささみにのりを巻く。\n4.海苔の巻き終わりを下にするようにささみを並べて焼き調味料を加える。\n5.汁気がなくなってきたら完成。",
                'img_path' => 'https://img.cpcdn.com/recipes/6959616/840x1461s/e024efb1dd7eb5ad67544d06298df079?u=14587116&p=1632664214',
                'comment' => '子供も大好き！おつまみにもおすすめです★',
            ],
            [
                'name' => '味付け生ニラ丼',
                'category_id' => 5,
                'meterial' => "ニラ:1束\n卵の黄身:4個分\n刻み海苔:大さじ1\nご飯:4膳分",
                'seasoning' => "ごま油:大さじ1\n鶏ガラスープの素:中さじ1",
                'recipi' => "1.ニラ1束をみじん切りにする。\n2.ごま油と鶏ガラスープの素を入れて混ぜる。\n3.炊きたてご飯にニラ・黄身・のりをトッピングして完成。",
                'img_path' => 'https://img.cpcdn.com/recipes/6966534/840x1461s/3c1f039e0eec50042457d714b79bd2f6?u=3312742&p=1633156411',
                'comment' => '自粛期間中のお昼ごはんに迷ったらこれです。',
            ],
        ]);
    }
}
