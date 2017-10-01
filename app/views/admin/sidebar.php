		<div class="sidebar fl">
			<div class="title">
				<!-- <img src="images/logo.png" alt="logo"> -->
				<a href="admin.php">
					<i class="iconfont icon-system"></i>
					<span>后台管理</span>
				</a>
			</div>
			<div class="nav-toggle">
		        <a class="open active" href="#"><i class="iconfont icon-menu"></i></a>
		        <a class="close" href="#"><i class="iconfont icon-close"></i></a>
		    </div>
			<div class="personInfo">
				<div class="name"><?php session_start(); echo $_SESSION['name'] ?>欢迎您</div>
				<div class="logout">
					<a href="<?php echo base_url('common/logout') ?>" class="btn btn-logout" onClick="return confirm('确定退出？');">退出</a>
				</div>
			</div>
			<div class="menu">
				<ul>
					<li>
						<div class="menu-title">账号管理</div>
						<ul>
							<li>
								<a href="<?php echo base_url('user') ?>" id="user" class="menu-name"><i class="iconfont icon-user"></i>用户管理</a>
							</li>
						</ul>
					</li>
					<li>
						<div class="menu-title">申请管理</div>
						<ul>
							<li>
								<a href="<?php echo base_url('admin/orderList') ?>" id="orderList" class="menu-name"><i class="iconfont icon-link"></i>申请列表</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="copyright">
				<p>版权所有</p>
			</div>
		</div>