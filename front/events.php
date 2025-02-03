<style>
	.events-list-item {
		padding: 5px;
		margin: 10px auto;
		border-bottom: 1px solid #ccc;
	}

	.pic{
		max-width: 100%;
		height:auto;
	}
</style>

<div class="container">
	<div class="row mx-5">
		<!-- 標題 -->
		<div class="fs-4 fw-bold border-bottom border-4 border-dark my-3" style="width:fit-content">
			活動資訊
		</div>

		<!-- 列表 -->
		<div class="col-12">
			<div class="events-list d-flex flex-wrap">

				<?php
				$events = $EVENT->all(['sh' => 1]);
				foreach ($events as $event):
				?>
					<div class='news-list col-lg-4 col-md-6 col-sm-12'>
						<div class="pic w-100">
							<img src="./upload/<?=$event['img'];?>" alt="圖片" style="">
						</div>
						<div class='events-list-date'> <?= $event['ondate']; ?> &nbsp;</div>
						<a href='?do=events&id=<?= $event['id'] ?>'>
							<?= $event['title']; ?>
						</a>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>