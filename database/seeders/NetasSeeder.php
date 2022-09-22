<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class NetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('netas')->insert([
            'name'=>'アルファベット',
            'combination_id'=>1,
            'genre_id'=>1,
            'overview'=>'鰻がきらきら星に合わせてアルファベットを言う',
            'anker'=>'https://www.youtube.com/watch?v=5XjKIV6dFH4',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'デリバリー',
            'combination_id'=>2,
            'genre_id'=>2,
            'overview'=>'伊達がピザを注文し、変な店員に会う',
            'anker'=>'https://www.youtube.com/watch?v=CKv96a36_OI&list=PLPriM7CIOSETp8AVEuvku74DXJfdSVXG3&index=37',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'ガソリンスタンド',
            'combination_id'=>2,
            'genre_id'=>2,
            'overview'=>'伊達がガソリンスタンドに給油しに行くと変な店員に絡まれる',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'睡眠',
            'combination_id'=>1,
            'genre_id'=>1,
            'overview'=>'鰻が睡眠で大事なことを橋本に話していくが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),

        ]);
        DB::table('netas')->insert([
            'name'=>'ドレミの歌',
            'combination_id'=>1,
            'genre_id'=>1,
            'overview'=>'鰻がドレミの歌の統一性のなさに疑問を感じ新しいドレミの歌を提案していくが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'パソコン教室',
            'combination_id'=>2,
            'genre_id'=>2,
            'overview'=>'伊達がパソコンを習いにパソコン教室に訪れるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'紳士服店',
            'combination_id'=>2,
            'genre_id'=>2,
            'overview'=>'伊達がスーツを買いに紳士服店を訪れるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'不動産屋',
            'combination_id'=>2,
            'genre_id'=>2,
            'overview'=>'伊達が部屋を探しに不動産屋を訪れるが・・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'オレオレ詐欺',
            'combination_id'=>3,
            'genre_id'=>1,
            'overview'=>'水田がオレオレ詐欺の対策を水谷と考えてみるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'旅館の仲居',
            'combination_id'=>3,
            'genre_id'=>1,
            'overview'=>'水田が旅館の仲居が苦手というので川西に相談してみるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'狼男',
            'combination_id'=>4,
            'genre_id'=>1,
            'overview'=>'井上が石田に１番可愛そうな生物は狼男と言うが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'ホラー英語',
            'combination_id'=>4,
            'genre_id'=>1,
            'overview'=>'井上が石田にホラー映画が好きだと言い話が広がっていく・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'野田ミュージカル',
            'combination_id'=>6,
            'genre_id'=>1,
            'overview'=>'野田が村上に野田ミュージカルを開催すると宣言するが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'天然おバカさんキャラ',
            'combination_id'=>6,
            'genre_id'=>1,
            'overview'=>'野田が村上に自分は天然お馬鹿さんキャラだったとカミングアウトしいろんな再現をしていくが',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'アンパンマン',
            'combination_id'=>7,
            'genre_id'=>1,
            'overview'=>'せいやが粗品に好きなアニメはアンパンマンだと言うが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'小学校',
            'combination_id'=>7,
            'genre_id'=>1,
            'overview'=>'せいやが粗品に小さい頃が懐かしいと言って昔を振り返るが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'進研ゼミ',
            'combination_id'=>8,
            'genre_id'=>2,
            'overview'=>'秋山が学校の成績に悩んでいるところに岡部が進研ゼミを勧めるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'天空龍',
            'combination_id'=>8,
            'genre_id'=>2,
            'overview'=>'秋山が公演でカードバトルをしている人たちを見つけるが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'裁判',
            'combination_id'=>9,
            'genre_id'=>2,
            'overview'=>'痴漢の容疑で逮捕された児島と弁護士の渡部が法廷での被告人質問の答弁準備をするが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        DB::table('netas')->insert([
            'name'=>'旅行の写真',
            'combination_id'=>8,
            'genre_id'=>2,
            'overview'=>'社員旅行に行けなかった児島に上司の渡部が写真をメールで送り写真とともに旅行を振り返るが・・・',
            'anker'=>NULL,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
}
