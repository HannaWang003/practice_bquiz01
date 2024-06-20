<!--正中央-->
<div style="text-align:center;">
	<?php
	$total = $News->count(['sh' => 1]);
	$div = 4;
	$now = ($_GET['p']) ?? "1";
	$start = ($now - 1) * $div;
	$pages = ceil($total / $div);
	$news = $News->all(['sh' => 1], "limit $start,$div");
	?>
	<ol start='<?= $start + 1 ?>' style="text-align:start;">
		<?php
		foreach ($news as $n) {
		?>
			<li class="sswww"><?= mb_substr($n['text'], 0, 20) ?>
				<div class="all" style="display:none"><?= $n['text'] ?></div>
			</li>
		<?php
		}
		?>
	</ol>
	<a class="bl" style="font-size:30px;" href="?do=meg&p=0">&lt;&nbsp;</a>
	<?php
	for ($i = 1; $i <= 2; $i++) {
	?>
		<a href="?do=news&p=<?= $i ?>"><?= $i ?></a>
	<?php
	}
	?>
	<a class="bl" style="font-size:30px;" href="?do=meg&p=0">&nbsp;&gt;</a>
</div>