<style>
	.news-list-item {
		padding: 5px;
		margin: 10px auto;
		border-bottom: 1px solid #ccc;
	}

	
	.cities{
		display:none;
	}
	.active{
		display:table-row;
	}
</style>
<!-- 天氣預報 -->
<div class="container mt-3">
	<div class="mb-3 text-left">
		<label for="citySelector" class="form-label">選擇城市顯示近七天天氣</label>
		<select class="form-select" id="citySelector" aria-label="Select a Taiwan city">
			<option value="" disabled selected>請選擇</option>
			<optgroup label="北部">
				<option value="13">基隆市</option>
				<option value="16">臺北市</option>
				<option value="18">新北市</option>
				<option value="21">桃園市</option>
				<option value="14">新竹市</option>
				<option value="3">新竹縣</option>
				<option value="2">宜蘭縣</option>

			<optgroup label="中部">
				<option value="4">苗栗縣</option>
				<option value="19">臺中市</option>
				<option value="5">彰化縣</option>
				<option value="7">雲林縣</option>
				<option value="6">南投縣</option>
			<optgroup label="南部">
				<option value="8">嘉義縣</option>
				<option value="15">嘉義市</option>
				<option value="20">臺南市</option>
				<option value="17">高雄市</option>
				<option value="9">屏東縣</option>
				<option value="12">澎湖縣</option>
			<optgroup label="東部">
				<option value="10">臺東縣</option>
				<option value="11">花蓮縣</option>
			<optgroup label="福建省">
				<option value="0">連江縣</option>
				<option value="1">金門縣</option>
		</select>
	</div>
	<table class="table table-hover" id="myTable">
		<thead>
			<tr>
				<th>城市</th>
				<th id="day1">day1</th>
				<th id="day2">day2</th>
				<th id="day3">day3</th>
				<th id="day4">day4</th>
				<th id="day5">day5</th>
				<th id="day6">day6</th>
				<th id="day7">day7</th>
			</tr>
		</thead>
		<tbody class="weatherList">
		</tbody>
	</table>
</div>


<div class="container vh-100 position-relative">
	<div class="row mx-5">
		<!-- 標題 -->
		<div class="fs-4 fw-bold border-bottom border-4 border-dark my-3" style="width:fit-content">
			最新消息
		</div>

		<!-- 列表 -->
		<div class="col-12">
			<ul class="news">
				<?php
				$div = 10;
				$total = $NEWS->count();
				$pages = ceil($total / $div);
				$now = $_GET['p'] ?? 1;
				$start = ($now - 1) * $div;
				$rows = $NEWS->all(" limit $start,$div");
				// 數字從哪個開始
				echo "<ul class='news-list'>";
				foreach ($rows as $list) {
					echo "<li class='news-list-item'>";
					echo "<span class='news-list-date'>{$list['date']} &nbsp;</span>";
					echo "<a href='?do=news&id={$list['id']}'>";
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


<script src="./info/info.js"></script>

<script>
	$(document).ready(function() {
		let pwd = pw;

		// 1.bind
		const myTable = $('#myTable');
		const myTbody = myTable.find('tbody');
		console.log('myTbody', myTbody);

		// 2.action
		let url = `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-091?Authorization=${pwd}&ElementName=%E6%9C%80%E9%AB%98%E6%BA%AB%E5%BA%A6,%E5%A4%A9%E6%B0%A3%E9%A0%90%E5%A0%B1%E7%B6%9C%E5%90%88%E6%8F%8F%E8%BF%B0,%E6%9C%80%E4%BD%8E%E6%BA%AB%E5%BA%A6&sort=time`;

		$.ajax({
			type: "get",
			url: url,
			dataType: "json",
			success: function(res) {
				console.log('res', res);
				// 只抓需要的資料
				let data = res.records.Locations[0].Location;
				console.log('data', data);

				// get date
				for (let i = 1; i <= 7; i++) {
					let date = data[0].WeatherElement[0].Time[2 * i - 1].EndTime;
					let dateText = date.substr(5, 5);
					// console.log(dateText);
					let place = '#day' + i;
					$(place).text(dateText);
				}

				// 生成城市天氣資料
				$.each(data, function(key, value) {
					let tmpLocationName = value.LocationName;
					let tmpLocationID = key;
					let tmpWeatherElement = value.WeatherElement;

					// min temp
					let minT = [];
					for (let i = 1; i < 14; i += 2) {
						let tmpMinT = tmpWeatherElement[1].Time[i].ElementValue[0].MinTemperature;
						minT.push(tmpMinT);
					}

					// max temp
					let maxT = [];
					for (let i = 0; i < 14; i += 2) {
						let tmpMaxT = tmpWeatherElement[0].Time[i].ElementValue[0].MaxTemperature;
						maxT.push(tmpMaxT);
					}
					checkActive = '';
					if (tmpLocationID == 16) {
						checkActive = 'active';
					}

					// 生成表格行
					let temText = ` 
                            <tr class='cities city${tmpLocationID} ${checkActive}'> 
                                <td>${tmpLocationName}</td> 
                                <td>${minT[0]} ~ ${maxT[0]}°C</td> 
                                <td>${minT[1]} ~ ${maxT[1]}°C</td> 
                                <td>${minT[2]} ~ ${maxT[2]}°C</td> 
                                <td>${minT[3]} ~ ${maxT[3]}°C</td> 
                                <td>${minT[4]} ~ ${maxT[4]}°C</td> 
                                <td>${minT[5]} ~ ${maxT[5]}°C</td> 
                                <td>${minT[6]} ~ ${maxT[6]}°C</td> 
                            </tr> 
                        `;
					$(myTbody).append(temText);
				});
			}
		});

		// 監聽城市選擇
		$('#citySelector').change(function() {
			let selectedCity = $(this).val(); // 獲取選中的城市 ID
			console.log('選擇的城市 ID:', selectedCity);
			let cityChose = '.city' + selectedCity;
			$('.cities').removeClass('active')
			$(cityChose).addClass('active');
		});
	});
</script>