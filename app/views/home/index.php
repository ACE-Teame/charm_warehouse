<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>装配式仓库</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php echo css('main.css'); ?>
</head>
<body>
	<div class="container">
		<div class="img"><img src="<?php echo image('1.png') ?>" alt=""></div>
		<div class="img"><img src="<?php echo image('2.jpg') ?>" alt=""></div>
		<div class="tip">			
			<div class="img"><img src="<?php echo image('3.jpg') ?>" alt=""></div>
			<a href="#" class="btn">立即咨询</a>
		</div>
		<div class="banner">
			<div class="title">
				<div class="name">工程案例</div>
				<div class="line"></div>
			</div>
			<div class="img"><img src="<?php echo image('4.jpg') ?>" alt=""></div>
			<div class="text">
				<p>某500强企业移动加工厂房</p>
			</div>
			<ul class="clear">
				<li>
					<div class="img"><img src="<?php echo image('11.jpg') ?>" alt=""></div>
					<div class="text">
						<p>某保税物流中心周转仓库</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('12.jpg') ?>" alt=""></div>
					<div class="text">
						<p>某仓储集团临时仓库</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('13.jpg') ?>" alt=""></div>
					<div class="text">
						<p>苏州某日用品公司周转仓库</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('14.jpg') ?>" alt=""></div>
					<div class="text">
						<p>某物流园区卸货通道篷</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('15.jpg') ?>" alt=""></div>
					<div class="text">
						<p>某食品公司临时仓库</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('16.jpg') ?>" alt=""></div>
					<div class="text">
						<p>某电器公司临时仓库</p>
					</div>
				</li>
			</ul>
		</div>

		<div class="partner">
			<div class="title">
				<div class="name">合作企业</div>
				<div class="line"></div>
			</div>
			<ul class="clear">
				<li>
					<div class="img"><img src="<?php echo image('21.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('22.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('23.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('24.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('25.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('26.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('27.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('28.jpg') ?>" alt=""></div>
				</li>
				<li>
					<div class="img"><img src="<?php echo image('29.jpg') ?>" alt=""></div>
				</li>
			</ul>
		</div>

		<div class="about">
			<div class="title">
				<div class="name">关于雅上</div>
				<div class="line"></div>
			</div>
			<ul class="clear">
				<li>
					<div class="img"><img src="<?php echo image('31.jpg') ?>" alt=""></div>
					<div class="img"><img src="<?php echo image('32.jpg') ?>" alt=""></div>	
				</li>
				<li>
					<div class="img"><img src="<?php echo image('33.jpg') ?>" alt=""></div>	
				</li>
			</ul>
		</div>

		<div class="about">
			<div class="title">
				<div class="name">我们联系您</div>
				<div class="line"></div>
			</div>
			<div class="form">
				<form id="form_application">
			        <div class="entry clear">
			        	<label>姓名<span>*</span></label>
					    <input type="text" id="username" name="username" placeholder="请输入姓名">
					</div>
					<div class="entry clear">
						<label>电话<span>*</span></label>
					    <input type="text" id="phone" name="phone" placeholder="请输入手机号" maxlength="11">
					</div>
					<div class="entry clear">
						<label>需求<span>*</span></label>
					    <select name="need" id="">
					        <option value="购买">购买</option>
					        <option value="租赁">租赁</option>
					    </select>
					</div>
					<div class="entry clear">
						<label>用途<span>*</span></label>
					    <select name="used" id="">
					        <option value="工业仓储">工业仓储</option>
					        <option value="工业厂房">工业厂房</option>
					    </select>
					</div>
				</form>
				<a href="javaScript:;" class="btn btn-submit" onclick='submit()'>提交</a>
			</div>
		</div>
		<footer>
			<p>粤ICP备14044659号-1</p>
		</footer>
		
	</div>
	<?php echo js('jquery.min.js') ?>
	<script>
		function submit()
		{
			$.post('<?php echo base_url('index/submitContect') ?>', $('#form_application').serialize(), function(data) {
				if(data.status == 200) {
                    alert('提交成功！');
                    location.reload();
                }else {
                    alert(data.msg);
                }
			}, 'JSON');
		}
	</script>
</body>
</html>