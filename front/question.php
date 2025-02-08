<style>
	.question-list-item{
		padding:5px;
		margin: 10px auto;
		border-bottom: 1px solid #ccc;
	}
</style>

<div class="container vh-100 position-relative">
	<div class="row mx-5">
		<!-- 標題 -->
		<div class="fs-4 fw-bold border-bottom border-4 border-dark my-3" style="width:fit-content">
			常見問題
		</div>

		<!-- 列表 -->
		<div class="col-12">
			<ul class="questions">
				<?php
				$div = 10;
				$total = $QUESTION->count();
				$pages = ceil($total / $div);
				$now = $_GET['p'] ?? 1;
				$start = ($now - 1) * $div;
				$rows = $QUESTION->all(" limit $start,$div");
				// 數字從哪個開始
				echo "<ul class='question-list'>";
				foreach ($rows as $list) {
					echo "<li class='question-list-item'>";
					echo "<a href='?do=question&id={$list['id']}'>";
					echo $list['title'];
					echo "</a>";
					echo "</li>";
				}
				echo "</ul>";
				?>
			</ul>
		</div>
	</div>


	<!-- 切換頁 -->
	<div class="cent position-absolute bottom-0 start-50 translate-middles">
		<?php
		if (($now - 1) > 0) {
			$prev = $now - 1;
			echo "<a href='?do=$do&p=$prev'> < </a>";
		}
		for ($i = 1; $i <= $pages; $i++) {
			echo "<a href='?do=$do&p=$i' style='padding:0px 5px;'>";
			echo $i;
			echo "</a>";
		}

		if (($now + 1) <= $pages) {
			$next = $now + 1;
			echo "<a href='?do=$do&p=$next'> > </a>";
		}
		?>
	</div>
</div>