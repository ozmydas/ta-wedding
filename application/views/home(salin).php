<!DOCTYPE html>
<html>
<head>
	<title>Sewa Alat Pesta</title>


	<link rel="stylesheet" href="<?=base_url('assets/semantic/semantic.min.css')?>">
	<script src="<?=base_url('assets/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/semantic/semantic.min.js')?>"></script>

</head>
<body>

	<div class="ui sidebar inverted vertical menu">
		<a class="item">
			Halaman Satu
		</a>
		<a class="item">
			Halaman Dua
		</a>
		<a class="item">
			Halaman Tiga
		</a>
	</div>
	<div class="pusher">

		<!-- Following Menu -->
		<div class="ui large menu">
			<div class="active item" id="muncul" style="cursor: pointer;">MENU</div>
			<div style="flex: 1; text-align: center; font-size: 2em; line-height: 1.5;">Site Title</div>
			<div class="right menu">
				<div class="item">
					<a class="ui button">Log in</a>
				</div>
				<div class="item">
					<a class="ui primary button">Sign Up</a>
				</div>
			</div>
		</div>

		<div class="ui container">

			<h3 class="ui center aligned header">Stackable Grid</h3>
			<div class="ui two column stackable grid">
				<div class="column">
					<div class="ui segment">

						<div class="column">
							<div class="ui raised segment">
								<a class="ui red ribbon label">Overview</a>
								<span>Account Details</span>
								<p></p>
								<a class="ui blue ribbon label">Community</a> User Reviews
								<p></p>
							</div>
						</div>

					</div>
				</div>
				<div class="column">
					<div class="ui segment">Content</div>
				</div>
				<div class="three column row">
					<div class="column">
						<div class="ui segment">Content</div>
					</div>
					<div class="column">
						<div class="ui segment">Content</div>
					</div>
					<div class="column">
						<div class="ui segment">Content</div>
					</div>
				</div>
				<div class="ten wide column">
					<div class="ui segment">

						<div class="ui three column stackable grid">
							<div class="column">
								<div class="ui raised segment">
									<div class="ui placeholder">
										<div class="image header">
											<div class="line"></div>
											<div class="line"></div>
										</div>
										<div class="paragraph">
											<div class="medium line"></div>
											<div class="short line"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="ui raised segment">
									<div class="ui placeholder">
										<div class="image header">
											<div class="line"></div>
											<div class="line"></div>
										</div>
										<div class="paragraph">
											<div class="medium line"></div>
											<div class="short line"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="ui raised segment">
									<div class="ui placeholder">
										<div class="image header">
											<div class="line"></div>
											<div class="line"></div>
										</div>
										<div class="paragraph">
											<div class="medium line"></div>
											<div class="short line"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="six wide column">
					<div class="ui segment">Content</div>
				</div>
			</div>

		</div>


	</div>


	<script type="text/javascript">
		
		$('#muncul').on('click', function(){
			console.log('klik');
			$('.ui.sidebar').sidebar('toggle');
		})

	</script>
</body>
</html>