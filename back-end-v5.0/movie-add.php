<!DOCTYPE>
<html>
	<head>
		<title>管理系统 - Geek 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			function addMovieFunction(){
				var mid = $("#mid").val();
				var mname = $("#mname").val();
				var mtype = $("#mtype").val();
				var marea = $("#marea").val();
				var mscore = $("#mscore").val();
				var myear = $("#myear").val();
				var mstar = $("#mstar").val();
				var mdirector = $("#mdirector").val();
				var msumary = $("#msumary").val();
				var mimgurl = $("#mimgurl").val();
				var mplayurl = $("#mplayurl").val();
				$.post("./ajax_add.php?query_key=movie_add",{'mid': mid, 'mname': mname, 'mtype': mtype, 
					'marea': marea, 'mscore': mscore, 'myear': myear, 'mstar': mstar, 'mdirector': mdirector, 
					'msumary': msumary, 'mimgurl': mimgurl, 'mplayurl': mplayurl},
					function(data){
						if (data.isflag) {
							console.log(data.isflag);
							$("#flag").text('添加影片信息成功');
							$("#flag").attr("class", "success").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						}else{
							console.log(data.isflag);
							$("#flag").text('添加影片信息失败');
							$("#flag").attr("class","error").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						};
					},'json');
			};
			function resetMovieFunction(){
				$("input[type='text'], textarea").val("");
			}
		</script>
	</head>
	<body>
	<h1 id="head" align="center">影片信息管理</h1>
	<?php include('navigation.php') ?>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>添加影片信息</h2>
					<p id="flag"></p>
				</div>

				<div class="grid_2">
					<p>
						<label>ID <small>ID不可重复.</small></label>
						<input id="mid" type="text" name="mid" />
					</p>
				</div>
				<div class="grid_3">
					<p>
						<label>片名 </label>
						<input id="mname" type="text" name="mname" />
					</p>
				</div>
				<div class="grid_3">
					<p>
						<label>类型 </label>
						<input id="mtype" type="text" name="mtype" />
					</p>
				</div>
				<div class="grid_2">
					<p>
						<label>地区 </label>
						<input id="marea" type="text" name="marea" />
					</p>
				</div>
				<div class="grid_2">
					<p>
						<label>评分 </label>
						<input id="mscore" type="text" name="mscore" />
					</p>
				</div>
				<div class="grid_4">
					<p>
						<label>年份 </label>
						<input id="myear" type="text" name="myear" />
					</p>
				</div>
				<div class="grid_8">
					<p>
						<label for="title">主演</label>
						<input id="mstar" type="text" name="mstar">
					</p>
				</div>
				<div class="grid_8">
					<p>
						<label for="title">导演</label>
						<input id="mdirector" type="text" name="mdirector">
					</p>
				</div>
				<div class="grid_16">
					<p>
						<label>影片简介 <small>小于400个字符.</small></label>
						<textarea id="msumary"></textarea>
					</p>
				</div>
				<div class="grid_16">
					<p>
						<label>封面URL </label>
						<input id="mimgurl" type="text" name="mimgurl">
					</p>
				</div>
				<div class="grid_16">
					<p>
						<label>影片播放URL <small>u3m8格式.</small></label>
						<input id="mplayurl" type="text" name="mplayurl">
					</p>
					<p class="submit">
						<input type="reset" value="Reset" onclick="resetMovieFunction()" />
						<input type="submit" value="Post" onclick="modifyMovieFunction()" />
					</p>
				</div>
			</div>
		<?php include('page_foot.html') ?>
	</body>
</html>