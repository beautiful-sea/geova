<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Perfil</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="/assets/site/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/assets/site/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="/assets/site/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/site/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="/assets/site/css/main.css">
	<link rel="stylesheet" type="text/css" href="/assets/site/css/fonts.min.css">


</head>
<style type="text/css">
.container{
	max-width: 1200px;
}
</style>
<body>



	<!-- Modal Comentários -->
	<div class="modal" id="modalComments" data-id="0" tabindex="-1" role="dialog" aria-labelledby="modalCommentsLabel">
		<div class="modal-dialog animated zoomIn animated-3x" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title color-primary text-center" id="modalCommentsLabel">Comente seu post</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
				</div>
				<div class="modal-body comments">
					<div class="post-comments">
						<!-- Formulario do comentário -->
						<form class="comment-form inline-items" id="formComment" onsubmit="return false;">

							<div class="post__author author vcard inline-items">
								<img src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="author">

								<div class="form-group with-icon-right ">
									<textarea class="form-control" name="comment" placeholder=""></textarea>
								</div>
							</div>

							<button class="btn btn-md-2 btn-primary">Comentar</button>

							<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancelar</button>

						</form>

						<div class="comments-nav">
							<ul class="nav nav-pills">
								<a id="amountComments" href="javascript:void(0)" >
									Ver comentários <span class="caret"></span>
								</a>
							</ul>
						</div>

						<!-- Comentários do post -->
						<div class="beforeSend" style="visibility: hidden;">
							<img src='/assets/site/img/ajax-loader.gif'>
						</div>

						<!-- COMENTÁRIOS DO POST AQUI -->
						<ul class="comments-list comments-here style-2"> 

						</ul><!-- / comentários -->

					</div>
					<!-- fim-comentários-post -->
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

			<a href="/newsfeed" class="logo">
				<div class="img-wrap">
					LOGO
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="03-Newsfeed.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="16-FavPagesFeed.html">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="17-FriendGroups.html">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="18-MusicAndPlaylists.html">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="19-WeatherWidget.html">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="20-CalendarAndEvents-MonthlyCalendar.html">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="24-CommunityBadges.html">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="25-FriendsBirthday.html">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="26-Statistics.html">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="27-ManageWidgets.html">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
			<a href="02-ProfilePage.html" class="logo">
				<div class="img-wrap">
					<img src="/assets/site/img/logo.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="03-Newsfeed.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="16-FavPagesFeed.html">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="17-FriendGroups.html">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="18-MusicAndPlaylists.html">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="19-WeatherWidget.html">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="20-CalendarAndEvents-MonthlyCalendar.html">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="24-CommunityBadges.html">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="25-FriendsBirthday.html">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="26-Statistics.html">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="27-ManageWidgets.html">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>

				<div class="profile-completion">

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Profile Completion</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
						</div>
					</div>

					<span>Complete <a href="#">your profile</a> so people can know more about you!</span>

				</div>
			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->


	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar fixed-sidebar-responsive">

		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
			<a href="#" class="logo js-sidebar-open">
				<img src="/assets/site/img/logo.png" alt="Olympus">
			</a>

		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="/assets/site/img/logo.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<div class="control-block">
					<div class="author-page author vcard inline-items">
						<div class="author-thumb">
							<img alt="author" src="/assets/site/img/author-page.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>
						<a href="02-ProfilePage.html" class="author-name fn">
							<div class="author-title">
								<?php echo htmlspecialchars( $user["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
							</div>
							<span class="author-subtitle">@<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
						</a>
					</div>
				</div>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">MAIN SECTIONS</h6>
				</div>

				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="mobile-index.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="Mobile-28-YourAccount-PersonalInformation.html">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="mobile-29-YourAccount-AccountSettings.html">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="Mobile-30-YourAccount-ChangePassword.html">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="Mobile-32-YourAccount-EducationAndEmployement.html">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="Mobile-33-YourAccount-Notifications.html">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="Mobile-34-YourAccount-ChatMessages.html">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="Mobile-35-YourAccount-FriendsRequests.html">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Sua Conta</h6>
				</div>

				<ul class="account-settings">
					<li>
						<a href="#">

							<svg class="olymp-menu-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

							<span>Configurações</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>

							<span>Create Fav Page</span>
						</a>
					</li>
					<li>
						<a href="/logout">
							<svg class="olymp-logout-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

							<span>Sair</span>
						</a>
					</li>
				</ul>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">About Olympus</h6>
				</div>

				<ul class="about-olympus">
					<li>
						<a href="#">
							<span>Terms and Conditions</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>FAQs</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>Careers</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>Contact</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->


	<!-- Fixed Sidebar Right -->



	<!-- ... end Fixed Sidebar Right -->


	<!-- Fixed Sidebar Right-Responsive -->

	<div class="fixed-sidebar right fixed-sidebar-responsive">

		<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

			<a href="#" class="olympus-chat inline-items js-chat-open">
				<svg class="olymp-chat---messages-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
			</a>

		</div>

	</div>

	<!-- ... end Fixed Sidebar Right-Responsive -->


	<!-- Header-BP -->

	<header class="header" id="site-header">

		<div class="page-title">
			<h6>Página de Perfil</h6>
		</div>

		<div class="header-content-wrapper">
			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Encontre igrejas ou pessoas..." type="text">
					<button>
						<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					</button>
				</div>
			</form>

			<a href="#" class="link-find-friend">Encontrar</a>

			<div class="control-block">

				<div class="control-icon more has-items">
					<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
					<div class="label-avatar bg-blue">6</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">FRIEND REQUESTS</h6>
							<a href="#">Find Friends</a>
							<a href="#">Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list friend-requests">
								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar55-sm.jpg"  alt="author">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
										<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar56-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Tony Stevens</a>
										<span class="chat-message-item">4 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									</div>
								</li>

								<li class="accepted">
									<div class="author-thumb">
										<img src="/assets/site/img/avatar57-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar58-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Stagg Clothing</a>
										<span class="chat-message-item">9 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									</div>
								</li>

							</ul>
						</div>

						<a href="#" class="view-all bg-blue">Check all your Events</a>
					</div>
				</div>

				<div class="control-icon more has-items">
					<svg class="olymp-thunder-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>

					<div class="label-avatar bg-primary">8</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notificações</h6>
							<a href="#">Marcar tudo como lido</a>
							<a href="#">Configurações</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list">
								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar62-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">Lindomar</a> comentou seu novo <a href="#" class="notification-link">status de perfil</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 horas atrás</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>

								<li class="un-read">
									<div class="author-thumb">
										<img src="/assets/site/img/avatar63-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<div>Você e <a href="#" class="h6 notification-friend">Lindomar Silva</a> agora são amigos. Escreva em <a href="#" class="notification-link">seu mural</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 horas atrás</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>

								<li class="with-comment-photo">
									<div class="author-thumb">
										<img src="/assets/site/img/avatar64-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">Juliana Gonçalves</a> comentou em sua <a href="#" class="notification-link">foto</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Ontem às 5:32</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

									<div class="comment-photo">
										<img src="/assets/site/img/comment-photo1.jpg" alt="photo">
										<span>“She looks incredible in that outfit! We should see each...”</span>
									</div>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar65-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="/assets/site/img/avatar66-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
									</div>
								</li>
							</ul>
						</div>

						<a href="#" class="view-all bg-primary">Ver todas notificações</a>
					</div>
				</div>

				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<img alt="author" src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Sua Conta</h6>
								</div>

								<ul class="account-settings">
									<li>
										<a href="29-YourAccount-AccountSettings.html">

											<svg class="olymp-menu-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

											<span>Configurações</span>
										</a>
									</li>
									<li>
										<a href="/logout">
											<svg class="olymp-logout-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

											<span>Sair</span>
										</a>
									</li>
								</ul>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Opções de Status</h6>
								</div>

								<ul class="chat-settings">
									<li>
										<a href="#">
											<span class="icon-status online"></span>
											<span>Online</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="icon-status away"></span>
											<span>Ausente</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="icon-status disconected"></span>
											<span>Desconectado</span>
										</a>
									</li>
								</ul>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Status Personalizado</h6>
								</div>

								<form class="form-group with-button custom-status">
									<input class="form-control" placeholder="" type="text" value="Space Cowboy">

									<button class="bg-purple">
										<svg class="olymp-check-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg>
									</button>
								</form>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Sobre Geová</h6>
								</div>

								<ul>
									<li>
										<a href="#">
											<span>Termos e Condições</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>FAQs</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>Contato</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
					<a href="02-ProfilePage.html" class="author-name fn">
						<div class="author-title">
							<?php echo htmlspecialchars( $user["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
						</div>
						<span class="author-subtitle">@<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
					</a>
				</div>

			</div>
		</div>

	</header>

	<!-- ... end Header-BP -->


	<!-- Responsive Header-BP -->

	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper">
			<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#request" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							<div class="label-avatar bg-blue">6</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-chat---messages-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							<div class="label-avatar bg-purple">2</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-thunder-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#search" role="tab">
						<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
						<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
					</a>
				</li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="tab-content tab-content-responsive">

			<div class="tab-pane " id="request" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Solicitações</h6>
						<a href="#">Encontre pessoas</a>
						<a href="#">Configurações</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar55-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Rafaela Mattos</a>
								<span class="chat-message-item">Amigos em comum: Juliana Gonçalves</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar56-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Breno Cocheto</a>
								<span class="chat-message-item">4 amigos em comum</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar57-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								Você e <a href="#" class="h6 notification-friend">Juliana Gonçalves</a> agora são amigos. Escreva em <a href="#" class="notification-link">seu mural</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar58-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane " id="notification" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notificações</h6>
						<a href="#">Marcar todas como visualizadas</a>
						<a href="#">Configurações</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar62-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar63-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar64-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

							<div class="comment-photo">
								<img src="/assets/site/img/comment-photo1.jpg" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar65-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar66-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>
					</ul>

					<a href="#" class="view-all bg-primary">Ver todas notificações</a>
				</div>

			</div>

			<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


			</div>

		</div>
		<!-- ... end  Tab panes -->

	</header>

	<!-- ... end Responsive Header-BP -->
	<div class="header-spacer"></div>



	<!-- Top Header-Profile -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<div class="top-header">
						<div class="top-header-thumb"'>
							<img src="<?php echo htmlspecialchars( $user["img_cover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style=" display: block; height: 420px;margin-left: auto;margin-right: auto">
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
									<ul class="profile-menu">
										<li>
											<a href="/" class="active">Linha do tempo</a>
										</li>
										<li>
											<a href="05-ProfilePage-About.html">Sobre</a>
										</li>
										<li>
											<a href="06-ProfilePage.html">Seguidores</a>
										</li>
									</ul>
								</div>
								<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
									<ul class="profile-menu">
										<li>
											<a href="07-ProfilePage-Photos.html">Fotos</a>
										</li>
										<li>
											<a href="09-ProfilePage-Videos.html">Vídeos</a>
										</li>
										<li>
											<div class="more">
												<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
												<ul class="more-dropdown more-with-triangle">
													<li>
														<a href="#">Denunciar perfil</a>
													</li>
													<li>
														<a href="#">Bloquear perfil</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="control-block-button">
								<a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
									<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</a>

								<div class="btn btn-control bg-primary more">
									<svg class="olymp-settings-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

									<ul class="more-dropdown more-with-triangle triangle-bottom-right">
										<li>
											<a href="#" data-toggle="modal" data-target="#update-profile-photo">Atualizar foto de perfil</a>
										</li>
										<li>
											<a href="#" data-toggle="modal" data-target="#update-header-photo">Atualizar foto de capa</a>
										</li>
										<li>
											<a href="29-YourAccount-AccountSettings.html">Configurações da conta</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="top-header-author">
							<a href="/profilepage" class="author-thumb">
								<!-- Imagem de perfil -->
								<img src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="height: 100%!important" alt="author">
							</a>
							<div class="author-content">
								<a href="/<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="h4 author-name"><?php echo htmlspecialchars( $user["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
								<div class="country">@<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Top Header-Profile -->
	<div class="container">
		<div class="row">

			<!-- Main Content -->

			<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
				<div id="newsfeed-items-grid">

					<?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
					<div class="ui-block">
						<!-- Post -->

						<article class="hentry post article-post" id="<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

							<div class="post__author author vcard inline-items">
								<!-- mini Imagem de perfil -->
								<img src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo htmlspecialchars( $user["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
									<div class="post__date">
										<cite id="timePost<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ></cite></p>
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Editar</a>
									</li>
									<li>
										<a href="#">Deletar</a>
									</li>
								</ul>
							</div>

						</div>

						<p><?php echo htmlspecialchars( $value1["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
						</p>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="/assets/site/img/friend-harmonic7.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/assets/site/img/friend-harmonic8.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/assets/site/img/friend-harmonic9.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/assets/site/img/friend-harmonic10.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/assets/site/img/friend-harmonic11.jpg" alt="friend">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">Aislan</a>, <a href="#">Lucas</a> e
								<br>mais 6 pessoas gostaram disso
							</div>


							<div class="comments-shared" data-id="<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
								<a href="javascript:void(0)" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
									</svg>
									<span id="qtdComments-<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["qtdComments"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
									<span>0</span>
								</a>
							</div>


						</div>

						<div class="control-block-button post-control-button">

							<a href="#" class="btn btn-control featured-post">
								<svg class="olymp-trophy-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-trophy-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon">
									<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
								</svg>
							</a>

						</div>

					</article>

					<!-- .. end Post -->				</div>
					<?php } ?>
				</div>

				<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
					<svg class="olymp-three-dots-icon">
						<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
					</svg>
				</a>
			</div>

			<!-- ... end Main Content -->


			<!-- Left Sidebar -->

			<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Informações</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Personal-Info -->

						<ul class="widget w-personal-info item-block">
							<li>
								<span class="title">Sobre mim:</span>
								<span class="text"><?php echo htmlspecialchars( $user["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
							</li>
						</ul>

						<!-- .. end W-Personal-Info -->
						<!-- W-Socials -->

						<div class="widget w-socials">

						</div>


						<!-- ... end W-Socials -->
					</div>
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Conquistas</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Badges -->

						<ul class="widget w-badges">
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge1.png" alt="author">
									<div class="label-avatar bg-primary">2</div>
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge4.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge3.png" alt="author">
									<div class="label-avatar bg-blue">4</div>
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge6.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge11.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge8.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge10.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge13.png" alt="author">
									<div class="label-avatar bg-breez">2</div>
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge7.png" alt="author">
								</a>
							</li>
							<li>
								<a href="24-CommunityBadges.html">
									<img src="/assets/site/img/badge12.png" alt="author">
								</a>
							</li>
						</ul>

						<!--.. end W-Badges -->
					</div>
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Ultimos Videos</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Latest-Video -->

						<ul class="widget w-last-video">
							<li>
								<a href="https://www.youtube.com/watch?v=oxL1R1zyBUU" class="play-video play-video--small">
									<svg class="olymp-play-icon">
										<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
									</svg>
								</a>
								<img src="http://img.youtube.com/vi/oxL1R1zyBUU/3.jpg" width="300px" alt="video">
								<div class="video-content">
									<div class="title">System of a Revenge - Hypnotize...</div>
									<time class="published" datetime="2017-03-24T18:18">3:25</time>
								</div>
								<div class="overlay"></div>
							</li>
							<li>
								<a href="https://www.youtube.com/watch?v=BbduJyeTO88" class="play-video play-video--small">
									<svg class="olymp-play-icon">
										<use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
									</svg>
								</a>
								<img src="http://img.youtube.com/vi/BbduJyeTO88/3.jpg" width="300px" alt="video">
								<div class="video-content">
									<div class="title">Green Goo - Live at Dan’s Arena</div>
									<time class="published" datetime="2017-03-24T18:18">5:48</time>
								</div>
								<div class="overlay"></div>
							</li>
						</ul>

						<!-- .. end W-Latest-Video -->
					</div>
				</div>


				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Enquetes</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Pool -->

						<ul class="widget w-pool">
							<li>
								<p>Você convidaria um amigo viciado para um encontro com Deus? </p>
							</li>
							<li>
								<div class="skills-item">
									<div class="skills-item-info">
										<span class="skills-item-title">
											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios">
													Sim
												</label>
											</span>
										</span>
										<span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
											<span class="units">62%</span>
										</span>
									</div>
									<div class="skills-item-meter">
										<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
									</div>

									<div class="counter-friends">12 amigos votaram</div>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic1.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic2.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic3.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic4.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic5.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic6.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#" class="all-users">+3</a>
										</li>
									</ul>
								</div>
							</li>

							<li>
								<div class="skills-item">
									<div class="skills-item-info">
										<span class="skills-item-title">
											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios">
													Talvez
												</label>
											</span>
										</span>
										<span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
											<span class="units">27%</span>
										</span>
									</div>
									<div class="skills-item-meter">
										<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
									</div>
									<div class="counter-friends">7 amigos votaram</div>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic12.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic13.jpg" alt="friend">
											</a>
										</li>
									</ul>
								</div>
							</li>

							<li>
								<div class="skills-item">
									<div class="skills-item-info">
										<span class="skills-item-title">
											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios">
													Não
												</label>
											</span>
										</span>
										<span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
											<span class="units">11%</span>
										</span>
									</div>
									<div class="skills-item-meter">
										<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
									</div>

									<div class="counter-friends">2 amigos votaram.</div>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic14.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/assets/site/img/friend-harmonic15.jpg" alt="friend">
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- .. end W-Pool -->
						<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote agora!</a>
					</div>
				</div>

			</div>

			<!-- ... end Left Sidebar -->


			<!-- Right Sidebar -->

			<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Ultimas fotos</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Latest-Photo -->

						<ul class="widget w-last-photo js-zoom-gallery">
							<li>
								<a href="/assets/site/img/last-photo10-large.jpg">
									<img src="/assets/site/img/last-photo10-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot11-large.jpg">
									<img src="/assets/site/img/last-phot11-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot12-large.jpg">
									<img src="/assets/site/img/last-phot12-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot13-large.jpg">
									<img src="/assets/site/img/last-phot13-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot14-large.jpg">
									<img src="/assets/site/img/last-phot14-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot15-large.jpg">
									<img src="/assets/site/img/last-phot15-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot16-large.jpg">
									<img src="/assets/site/img/last-phot16-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot17-large.jpg">
									<img src="/assets/site/img/last-phot17-large.jpg" alt="photo">
								</a>
							</li>
							<li>
								<a href="/assets/site/img/last-phot18-large.jpg">
									<img src="/assets/site/img/last-phot18-large.jpg" alt="photo">
								</a>
							</li>
						</ul>


						<!-- .. end W-Latest-Photo -->
					</div>
				</div>


				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Seguidores (<?php echo count($following); ?>)</h6>
					</div>
					<div class="ui-block-content">

						<!-- W-Faved-Page -->

						<ul class="widget w-faved-page js-zoom-gallery">
							<?php $counter1=-1;  if( isset($following) && ( is_array($following) || $following instanceof Traversable ) && sizeof($following) ) foreach( $following as $key1 => $value1 ){ $counter1++; ?>
							<li>
								<a href="/<?php echo htmlspecialchars( $value1["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
									<img src="<?php echo htmlspecialchars( $value1["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onerror="this.src='/files/media/users/profile_default.png'" data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="author">
								</a>
							</li>
							<?php } ?>
						</ul>

						<!-- .. end W-Faved-Page -->
					</div>
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Seguidores Sugeridos</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
					</div>



					<!-- W-Action -->

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<?php $counter1=-1;  if( isset($notfollows) && ( is_array($notfollows) || $notfollows instanceof Traversable ) && sizeof($notfollows) ) foreach( $notfollows as $key1 => $value1 ){ $counter1++; ?>
						<li class="inline-items">
							<div class="author-thumb">
								<img width="100%" src="<?php echo htmlspecialchars( $value1["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="/<?php echo htmlspecialchars( $value1["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="h6 notification-friend"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
								<span class="chat-message-item">8 Amigos em comum</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>
							</span>
						</li>
						<?php } ?>
					</ul>

					<!-- ... end W-Action -->
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Paginas favoritas</h6>
					</div>

					<!-- W-Friend-Pages-Added -->

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar41-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Assembléia de Deus</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar42-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Metodista</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar43-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Batista</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar44-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Projeto vida</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar45-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Nascer denovo</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img src="/assets/site/img/avatar46-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Deus é Amor</a>
								<span class="chat-message-item">Valença, RJ</span>
							</div>
							<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
								</a>
							</span>
						</li>
					</ul>

					<!-- .. end W-Friend-Pages-Added -->
				</div>


			</div>

			<!-- ... end Right Sidebar -->

		</div>
	</div>

	<!-- Modal Atualizar foto de Capa -->

	<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
		<div class="modal-dialog window-popup update-header-photo" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Atualizar foto de Capa</h6>
				</div>

				<div class="modal-body">
					<a href="javascript:editImgCover()" class="upload-photo-item">
						<form action="/editImg" enctype="multipart/form-data" id="formImgCover">
							<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

							<h6>Enviar foto</h6>
							<span>Escolha do seu computador.</span>

							<input type="file" name="cover">
						</form>
					</a>

					<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

						<h6>Escolher das minhas fotos</h6>
						<span>Escolha fotos que você ja enviou.</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Atualizar foto de Perfil -->

	<div class="modal fade" id="update-profile-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
		<div class="modal-dialog window-popup update-profile-photo" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Atualizar foto de Perfil</h6>
				</div>

				<div class="modal-body">
					<a href="javascript:editImgProfile()" class="upload-photo-item">
						<form action="/editImg" enctype="multipart/form-data" id="formImgProfile">
							<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

							<h6>Enviar foto</h6>
							<span>Escolha do seu computador.</span>

							<input type="file" name="img_profile">
						</form>
					</a>

					<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

						<h6>Escolher das minhas fotos</h6>
						<span>Escolha fotos que você ja enviou.</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL ESCOLHER DAS MINHAS FOTOS -->

	<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
		<div class="modal-dialog window-popup choose-from-my-photo" role="document">

			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Escolher das minhas fotos</h6>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
								<svg class="olymp-photos-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
								<svg class="olymp-albums-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
							</a>
						</li>
					</ul>
				</div>

				<div class="modal-body">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo1.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo2.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo3.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo4.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo5.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo6.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo7.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo8.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/site/img/choose-photo9.jpg" alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>


							<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

						</div>
						<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo10.jpg" alt="photo">
									<figcaption>
										<a href="#">South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo11.jpg" alt="photo">
									<figcaption>
										<a href="#">Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo12.jpg" alt="photo">
									<figcaption>
										<a href="#">Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo13.jpg" alt="photo">
									<figcaption>
										<a href="#">Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo14.jpg" alt="photo">
									<figcaption>
										<a href="#">Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/site/img/choose-photo15.jpg" alt="photo">
									<figcaption>
										<a href="#">The Majestic Canyon</a>
										<span>Last Added: 57 mins ago</span>
									</figcaption>
								</figure>
							</div>


							<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancelar</a>
							<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirmar foto</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- ... end Window-popup Choose from my Photo -->



	<a class="back-to-top" href="#">
		<img src="/assets/site/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
	</a>




	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title" >Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
					<svg class="olymp-little-delete js-chat-open"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/author-page.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="/assets/site/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>

				<form class="need-validation">

					<div class="form-group label-floating is-empty">
						<label class="control-label">Pressione enter para publicar...</label>
						<textarea class="form-control" placeholder=""></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat1.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat2.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat3.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat4.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat5.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat6.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat7.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat8.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat9.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat10.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat11.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat12.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat13.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat14.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat15.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat16.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat17.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat18.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat19.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat20.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat21.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat22.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat23.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat24.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat25.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat26.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/site/img/icon-chat27.png" alt="icon">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


	<!-- JS Scripts -->
	<script src="/assets/site/js/jquery-3.2.1.js"></script>
	<script src="/assets/site/js/jquery.appear.js"></script>
	<script src="/assets/site/js/jquery.mousewheel.js"></script>
	<script src="/assets/site/js/perfect-scrollbar.js"></script>
	<script src="/assets/site/js/jquery.matchHeight.js"></script>
	<script src="/assets/site/js/svgxuse.js"></script>
	<script src="/assets/site/js/imagesloaded.pkgd.js"></script>
	<script src="/assets/site/js/Headroom.js"></script>
	<script src="/assets/site/js/velocity.js"></script>
	<script src="/assets/site/js/ScrollMagic.js"></script>
	<script src="/assets/site/js/jquery.waypoints.js"></script>
	<script src="/assets/site/js/jquery.countTo.js"></script>
	<script src="/assets/site/js/popper.min.js"></script>
	<script src="/assets/site/js/material.min.js"></script>
	<script src="/assets/site/js/bootstrap-select.js"></script>
	<script src="/assets/site/js/smooth-scroll.js"></script>
	<script src="/assets/site/js/selectize.js"></script>
	<script src="/assets/site/js/swiper.jquery.js"></script>
	<script src="/assets/site/js/moment.js"></script>
	<script src="/assets/site/js/daterangepicker.js"></script>
	<script src="/assets/site/js/simplecalendar.js"></script>
	<script src="/assets/site/js/fullcalendar.js"></script>
	<script src="/assets/site/js/isotope.pkgd.js"></script>
	<script src="/assets/site/js/ajax-pagination.js"></script>
	<script src="/assets/site/js/Chart.js"></script>
	<script src="/assets/site/js/chartjs-plugin-deferred.js"></script>
	<script src="/assets/site/js/circle-progress.js"></script>
	<script src="/assets/site/js/loader.js"></script>
	<script src="/assets/site/js/run-chart.js"></script>
	<script src="/assets/site/js/jquery.magnific-popup.js"></script>
	<script src="/assets/site/js/jquery.gifplayer.js"></script>
	<script src="/assets/site/js/mediaelement-and-player.js"></script>
	<script src="/assets/site/js/mediaelement-playlist-plugin.min.js"></script>
	<script src="/assets/site/js/sticky-sidebar.js"></script>

	<script src="/assets/site/js/base-init.js"></script>
	<script defer src="fonts/fontawesome-all.js"></script>

	<script src="/assets/site/Bootstrap/dist/js/bootstrap.bundle.js"></script>
	<script src="/assets/site/js/editprofile.js"></script>
	<script src="/assets/site/js/moment/moment.js"></script>
	<script src="/assets/site/js/moment/locale/pt-br.js"></script>
	<script src="/assets/site/js/posts.js"></script>




</body>
</html>