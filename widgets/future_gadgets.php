<?php
class FG_Widget extends WP_Widget {

	private $phrase = array(
		array(1, '世の中には二種類のウソがあって、ダメなウソと優しいウソがあるんだぞぅ！'),
		array(1, '変態じゃないよ、変態紳士だよ！'),
		array(0, '俺は狂気のマッドサイエンティスト……、鳳凰院凶真だ!!'),
		array(2, '忘れないで。あなたはどの世界線にいてもひとりじゃない。私がいる。'),
		array(0, '自分の夢を叶えたいなら、自分自身で道を切り拓くがいい。俺たちがしてやれるのは、その露払い程度のことだけだ。'),
		array(0, '一見意味のないこと、無駄と思えることこそ、より大きなことを成し遂げるための礎石足り得るのだ！'),
		array(0, '弱音を吐くのはいい。吐きたければいくらでも吐け。俺が聞いてやる。だが諦めるようなことだけは言うな！'),
		array(0, '物事を考える際は、一定の方向からだけでなく多面的に思考を巡らせる必要がある。覚えておくがいい。'),
		array(0, '寂しさはあった。罪悪感だってある。その全ては、俺の胸の奥に刻まれている。忘れない。忘れてはならない。この長くて短かった夏の日々のことを。'),
		array(2, 'これまでの自分を否定したくないの。例え失敗ばかりだったとしても、それを含めて今の自分があるんだから。'),
		array(2, 'すごくなんてないわ。どんなことでも興味を持ってやれば上手くいくものよ。「好きこそものの上手なれ」って言うでしょ。'),
		array(2, '時間は人の意識によって、長くなったり短くなったりする。相対性理論って、とてもロマンチックで、とても切ないものだね。'),
		array(3, '証明‥‥自分が今日、どこを歩いて、何を見たか'),
		array(3, 'IBM5100‥見せて‥'),
		array(4, '僕も過去にメールを送らせてほしいんです！'),
		array(5, '楽しい時間は早く過ぎるし、辛いときは時間が過ぎるのが遅く感じるニャ。'),
		array(5, 'フェイリスは過去は振り返らないニャ'),
		array(5, 'もう、夢から覚めなくちゃね‥‥'),
		array(6, '巡り巡って人は誰かに親身にしてもらうことになってる、だから君もいずれ誰かに親身にしてあげなさい。'),
		array(6, 'でも……それでも、私はいく　素晴らしい未来が待っているという未知の可能性にかける！'),
		array(6, '未来にはさ、希望が満ちてるって信じられるような世界が、待ってるよ。')
	);

	private $members = array(
		'岡部倫太郎/オカリン・鳳凰院凶真',
		'橋田至（ダル）',
		'牧瀬紅莉栖',
		'桐生萌郁',
		'漆原るか',
		'フェイリス・ニャンニャン',
		'阿万音鈴羽（バイト戦士）'
	);

	function __construct()
	{
		parent::__construct(
			'fg_widget',
			'シュタインズ・ゲートの選択',
			array('description' => '未来ガジェット研究所による偉大なる名言集')
		);
	}

	function form($instance)
	{
		echo "el psy congroo.";
	}

	function update($new_instance, $old_instance)
	{
		return $new_instance;
	}

	function widget($args, $instance)
	{
		$i = mt_rand(0, count($this->phrase)) - 1;

		echo '<section id="steinsgate" class="widget"><h2 class="widget-title">steins; gate</h2>';
		echo '<span class="phrase">'. $this->phrase[$i][1]. '</span>';
		echo '<br>';
		echo '<span class="labmember"> - '. $this->members[$this->phrase[$i][0]]. '</span>';
		echo '</section>';
	}

}

add_action('widgets_init', function()
{
	register_widget('FG_Widget');
});

?>
