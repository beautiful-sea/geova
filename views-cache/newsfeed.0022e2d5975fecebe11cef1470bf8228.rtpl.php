<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
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

	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

			<a href="02-ProfilePage.html" class="logo">
				<div class="img-wrap">
					<img src="/assets/site/img/logo.png" alt="Olympus">
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
							<h6 class="title">Solicitações</h6>
							<a href="#">Encontrar pessoas</a>
							<a href="#">Configurações</a>
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
										<span class="chat-message-item">4 Amigos em comum</span>
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

						<a href="#" class="view-all bg-primary">Ver todas Notificações</a>
					</div>
				</div>

				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<img alt="author" src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="45px" class="avatar">
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
									<input class="form-control" placeholder="" type="text" value="Viva a vida!">

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
					<a href="/<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="author-name fn">
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
					<a href="#" class="view-all bg-blue">Ver todos eventos</a>
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


	<div class="container">
		<div class="row">
			<!-- Left Sidebar DIV LEFT SIDEBAR -->
			<div class="col-md-3 div-block left" >
				<aside class="col col-xl-12	 order-xl-1 col-lg-6 order-lg-12 col-md-6 col-sm-12 col-12">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Páginas que você pode gostar</h6>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
						</div>

						<!-- W-Friend-Pages-Added -->

						<ul class="widget w-friend-pages-added notification-list friend-requests">
							<li class="inline-items">
								<div class="author-thumb">
									<img src="" onerror="this.src='/files/media/users/profile_default.png'" width="40px" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Igreja Metodista</a>
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
					<div class="ui-block">

						<!-- W-Weather -->

						<div class="widget w-wethear">
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

							<div class="wethear-now inline-items">
								<div class="temperature-sensor">64°</div>
								<div class="max-min-temperature">
									<span>58°</span>
									<span>76°</span>
								</div>

								<svg class="olymp-weather-partly-sunny-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
							</div>

							<div class="wethear-now-description">
								<div class="climate">Partly Sunny</div>
								<span>Real Feel: <span>67°</span></span>
								<span>Chance of Rain: <span>49%</span></span>
							</div>

							<ul class="weekly-forecast">

								<li>
									<div class="day">sun</div>
									<svg class="olymp-weather-sunny-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-sunny-icon"></use></svg>

									<div class="temperature-sensor-day">60°</div>
								</li>

								<li>
									<div class="day">mon</div>
									<svg class="olymp-weather-partly-sunny-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
									<div class="temperature-sensor-day">58°</div>
								</li>

								<li>
									<div class="day">tue</div>
									<svg class="olymp-weather-cloudy-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-cloudy-icon"></use></svg>

									<div class="temperature-sensor-day">67°</div>
								</li>

								<li>
									<div class="day">wed</div>
									<svg class="olymp-weather-rain-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-rain-icon"></use></svg>

									<div class="temperature-sensor-day">70°</div>
								</li>

								<li>
									<div class="day">thu</div>
									<svg class="olymp-weather-storm-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-storm-icon"></use></svg>

									<div class="temperature-sensor-day">58°</div>
								</li>

								<li>
									<div class="day">fri</div>
									<svg class="olymp-weather-snow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-snow-icon"></use></svg>

									<div class="temperature-sensor-day">68°</div>
								</li>

								<li>
									<div class="day">sat</div>

									<svg class="olymp-weather-wind-icon-header"><use xlink:href="/assets/site/svg-icons/sprites/icons-weather.svg#olymp-weather-wind-icon-header"></use></svg>

									<div class="temperature-sensor-day">65°</div>
								</li>

							</ul>

							<div class="date-and-place">
								<h5 class="date">Saturday, March 26th</h5>
								<div class="place">San Francisco, CA</div>
							</div>

						</div>

						<!-- W-Weather -->			</div>

						<div class="ui-block">

							<!-- W-Calendar -->

							<div class="w-calendar calendar-container">
								<div class="calendar">
									<header>
										<h6 class="month">March 2017</h6>
										<a class="calendar-btn-prev fas fa-angle-left" href="#"></a>
										<a class="calendar-btn-next fas fa-angle-right" href="#"></a>
									</header>
									<table>
										<thead>
											<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>San</td></tr>
										</thead>
										<tbody>
											<tr>
												<td data-month="12" data-day="1">1</td>
												<td data-month="12" data-day="2" class="event-uncomplited event-complited">
													2
												</td>
												<td data-month="12" data-day="3">3</td>
												<td data-month="12" data-day="4">4</td>
												<td data-month="12" data-day="5">5</td>
												<td data-month="12" data-day="6">6</td>
												<td data-month="12" data-day="7">7</td>
											</tr>
											<tr>
												<td data-month="12" data-day="8">8</td>
												<td data-month="12" data-day="9">9</td>
												<td data-month="12" data-day="10" class="event-complited">10</td>
												<td data-month="12" data-day="11">11</td>
												<td data-month="12" data-day="12">12</td>
												<td data-month="12" data-day="13">13</td>
												<td data-month="12" data-day="14">14</td>
											</tr>
											<tr>
												<td data-month="12" data-day="15" class="event-complited-2">15</td>
												<td data-month="12" data-day="16">16</td>
												<td data-month="12" data-day="17">17</td>
												<td data-month="12" data-day="18">18</td>
												<td data-month="12" data-day="19">19</td>
												<td data-month="12" data-day="20">20</td>
												<td data-month="12" data-day="21">21</td>
											</tr>
											<tr>
												<td data-month="12" data-day="22">22</td>
												<td data-month="12" data-day="23">23</td>
												<td data-month="12" data-day="24">24</td>
												<td data-month="12" data-day="25">25</td>
												<td data-month="12" data-day="26">26</td>
												<td data-month="12" data-day="27">27</td>
												<td data-month="12" data-day="28" class="event-uncomplited">28</td>
											</tr>
											<tr>
												<td data-month="12" data-day="29">29</td>
												<td data-month="12" data-day="30">30</td>
												<td data-month="12" data-day="31">31</td>
											</tr>
										</tbody>
									</table>
									<div class="list">

										<div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="2">
											<div class="ui-block-title ui-block-title-small">
												<h6 class="title">TODAY’S EVENTS</h6>
											</div>
											<div class="card">
												<div class="card-header" role="tab" id="headingOne-1">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">9:00am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
															Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseOne-1" class="collapse" role="tabpanel" >
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>
													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
														<span>Daydreamz Agency</span>
													</div>

													<ul class="friends-harmonic inline-items">
														<li>
															<a href="#">
																<img src="img/friend-harmonic5.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic10.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic7.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic8.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic2.jpg" alt="friend">
															</a>
														</li>
														<li class="with-text">
															Will Assist
														</li>
													</ul>
												</div>
											</div>

											<div class="card">
												<div class="card-header" role="tab" id="headingTwo-1">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">9:00am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1" aria-expanded="true" aria-controls="collapseTwo-1">
															Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseTwo-1" class="collapse" role="tabpanel">
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>
												</div>

											</div>

											<div class="card">
												<div class="card-header" role="tab" id="headingThree-1">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">6:30am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
															Take Querty to the Veterinarian
														</a>
													</h5>
												</div>
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
													<span>Daydreamz Agency</span>
												</div>
											</div>

											<a href="#" class="check-all">Check all your Events</a>
										</div>

										<div id="accordion-2" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="10">
											<div class="ui-block-title ui-block-title-small">
												<h6 class="title">TODAY’S EVENTS</h6>
											</div>
											<div class="card">
												<div class="card-header" role="tab" id="headingOne-2">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">9:00am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
															Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseOne-2" class="collapse" role="tabpanel">
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>
													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
														<span>Daydreamz Agency</span>
													</div>

													<ul class="friends-harmonic inline-items">
														<li>
															<a href="#">
																<img src="img/friend-harmonic5.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic10.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic7.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic8.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic2.jpg" alt="friend">
															</a>
														</li>
														<li class="with-text">
															Will Assist
														</li>
													</ul>
												</div>

											</div>

											<a href="#" class="check-all">Check all your Events</a>
										</div>

										<div id="accordion-3" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="15">
											<div class="ui-block-title ui-block-title-small">
												<h6 class="title">TODAY’S EVENTS</h6>
											</div>
											<div class="card">
												<div class="card-header" role="tab" id="headingOne-3">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">9:00am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
															Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseOne-3" class="collapse" role="tabpanel">
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>

													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
														<span>Daydreamz Agency</span>
													</div>

													<ul class="friends-harmonic inline-items">
														<li>
															<a href="#">
																<img src="img/friend-harmonic5.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic10.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic7.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic8.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic2.jpg" alt="friend">
															</a>
														</li>
														<li class="with-text">
															Will Assist
														</li>
													</ul>
												</div>

											</div>

											<div class="card">
												<div class="card-header" role="tab" id="headingTwo-3">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">12:00pm</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-3" aria-expanded="true" aria-controls="collapseTwo-3">
															Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseTwo-3" class="collapse" role="tabpanel" >
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>
												</div>

											</div>

											<div class="card">
												<div class="card-header" role="tab" id="headingThree-3">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">6:30pm</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
															Take Querty to the Veterinarian
														</a>
													</h5>
												</div>
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
													<span>Daydreamz Agency</span>
												</div>
											</div>

											<a href="#" class="check-all">Check all your Events</a>
										</div>

										<div id="accordion-4" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="28">
											<div class="ui-block-title ui-block-title-small">
												<h6 class="title">TODAY’S EVENTS</h6>
											</div>
											<div class="card">
												<div class="card-header" role="tab" id="headingOne-4">
													<div class="event-time">
														<span class="circle"></span>
														<time datetime="2004-07-24T18:18">9:00am</time>
														<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
													</div>
													<h5 class="mb-0">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
															Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
														</a>
													</h5>
												</div>

												<div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne-4">
													<div class="card-body">
														Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
													</div>
													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
														<span>Daydreamz Agency</span>
													</div>

													<ul class="friends-harmonic inline-items">
														<li>
															<a href="#">
																<img src="img/friend-harmonic5.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic10.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic7.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic8.jpg" alt="friend">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/friend-harmonic2.jpg" alt="friend">
															</a>
														</li>
														<li class="with-text">
															Will Assist
														</li>
													</ul>
												</div>

											</div>

											<a href="#" class="check-all">Check all your Events</a>
										</div>

									</div>
								</div>
							</div>

							<!-- ... end W-Calendar -->			</div>

						</aside>
					</div>

					<!-- ... end Left Sidebar -->
					<!-- Main Content DIV MAIN -->
					<div class="col-md-6 div-block main">
						<main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

							<div class="ui-block">

								<!-- News Feed Form  -->

								<div class="news-feed-form">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

												<svg class="olymp-status-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

												<span>Status</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">

												<svg class="olymp-multimedia-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>

												<span>Foto/ Vídeo</span>
											</a>
										</li>

										<li class="nav-item">
											<a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">
												<svg class="olymp-blog-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-blog-icon"></use></svg>

												<span>Blog</span>
											</a>
										</li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
											<form>
												<div class="author-thumb">
													<img src="<?php echo htmlspecialchars( $user["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onerror="this.src='/files/media/users/profile_default.png'" width="40px" alt="author">
												</div>
												<div class="form-group with-icon label-floating is-empty">
													<label class="control-label">Compartilhe o que está pensando aqui...</label>
													<textarea class="form-control" placeholder=""></textarea>
												</div>
												<div class="add-options-message">
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
														<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
													</a>
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
														<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
													</a>

													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
														<svg class="olymp-small-pin-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
													</a>

													<button class="btn btn-primary btn-md-2">Publicar</button>
													<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Ver</button>

												</div>

											</form>
										</div>

										<div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
											<form>
												<div class="author-thumb">
													<img src="img/author-page.jpg" alt="author">
												</div>
												<div class="form-group with-icon label-floating is-empty">
													<label class="control-label">Compartilhe o que você está pensando aqui...</label>
													<textarea class="form-control" placeholder=""  ></textarea>
												</div>
												<div class="add-options-message">
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
														<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
													</a>
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
														<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
													</a>

													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
														<svg class="olymp-small-pin-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
													</a>

													<button class="btn btn-primary btn-md-2">Publicar</button>
													<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Ver</button>

												</div>

											</form>
										</div>

										<div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">
											<form>
												<div class="author-thumb">
													<img src="img/author-page.jpg" alt="author">
												</div>
												<div class="form-group with-icon label-floating is-empty">
													<label class="control-label">Compartilhe o que você está pensando aqui...</label>
													<textarea class="form-control" placeholder=""  ></textarea>
												</div>
												<div class="add-options-message">
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
														<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
													</a>
													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
														<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
													</a>

													<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
														<svg class="olymp-small-pin-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
													</a>

													<button class="btn btn-primary btn-md-2">Publicar</button>
													<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Ver</button>

												</div>

											</form>
										</div>
									</div>
								</div>

								<!-- ... end News Feed Form  -->			</div>

								<div id="newsfeed-items-grid">
									<?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
									<div class="ui-block">

										<article class="hentry post has-post-thumbnail">

											<div class="post__author author vcard inline-items">
												<img src='<?php if( $value1["img_profile"] == null  ){ ?><?php echo htmlspecialchars( $value1["img_profile"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>/files/media/users/profile_default.png<?php } ?>' alt="Foto de perfil" onerror="this.src='/files/media/users/profile_default.png'">

												<div class="author-date">
													<a class="h6 post__author-name fn" href="#"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
													<div class="post__date">
														<time class="published" id="timePost<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" datetime="2004-07-24T18:18">

														</time>
													</div>
												</div>

												<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Editar</a>
														</li>
														<li>
															<a href="#">Deletar</a>
														</li>
														<li>
															<a href="#">Desligar notificações</a>
														</li>
													</ul>
												</div>

											</div>

											<p><?php echo htmlspecialchars( $value1["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
											</p>

											<div class="post-additional-info inline-items">

												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-heart-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
													<span>22</span>
												</a>

												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="img/friend-harmonic9.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="img/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="img/friend-harmonic7.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="img/friend-harmonic8.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="img/friend-harmonic11.jpg" alt="friend">
														</a>
													</li>
												</ul>

												<div class="names-people-likes">
													<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
													<br>47 more liked this
												</div>


												<div class="comments-shared">
													<a href="#" class="post-add-icon inline-items">
														<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
														<span><?php echo htmlspecialchars( $value1["qtdComments"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
													</a>

													<a href="#" class="post-add-icon inline-items">
														<svg class="olymp-share-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
														<span>2</span>
													</a>
												</div>


											</div>

											<div class="control-block-button post-control-button">

												<a href="#" class="btn btn-control">
													<svg class="olymp-like-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
												</a>

												<a href="#" class="btn btn-control">
													<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
												</a>

												<a href="#" class="btn btn-control">
													<svg class="olymp-share-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
												</a>

											</div>

										</article>
									</div>
									<?php } ?>

								</div>

								<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

							</main>
						</div>

						<!-- ... end Main Content -->





						<!-- Right Sidebar DIV RIGHT SIDEBAR -->
						<div class="col-md-3 div-block right">
							<aside class="col col-xl-12 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

							<!-- <div class="ui-block">

								W-Birthsday-Alert -->

								<!-- <div class="widget w-birthday-alert">
									<div class="icons-block">
										<svg class="olymp-cupcake-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									</div>

									<div class="content">
										<div class="author-thumb">
											<img src="img/avatar48-sm.jpg" alt="author">
										</div>
										<span>Today is</span>
										<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
										<p>Leave her a message with your best wishes on her profile page!</p>
									</div>
								</div> 

							... end W-Birthsday-Alert			</div> -->

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
											<a href="#" class="h6 notification-friend"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
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
									<h6 class="title">Feed de Atividades</h6>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
								</div>


								<!-- W-Activity-Feed -->

								<ul class="widget w-activity-feed notification-list">
									<li>
										<div class="author-thumb">
											<img src="img/avatar49-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
										</div>
									</li>

								</ul>

								<!-- .. end W-Activity-Feed -->
							</div>


						</aside>
					</div>

					<!-- ... end Right Sidebar -->

				</div>
			</div>


			<!-- Window-popup Update Header Photo -->

			<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
				<div class="modal-dialog window-popup update-header-photo" role="document">
					<div class="modal-content">
						<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
							<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</a>

						<div class="modal-header">
							<h6 class="title">Update Header Photo</h6>
						</div>

						<div class="modal-body">
							<a href="#" class="upload-photo-item">
								<svg class="olymp-computer-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

								<h6>Upload Photo</h6>
								<span>Browse your computer.</span>
							</a>

							<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

								<svg class="olymp-photos-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

								<h6>Choose from My Photos</h6>
								<span>Choose from your uploaded photos</span>
							</a>
						</div>
					</div>
				</div>
			</div>


			<!-- ... end Window-popup Update Header Photo -->

			<!-- Window-popup Choose from my Photo -->

			<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
				<div class="modal-dialog window-popup choose-from-my-photo" role="document">

					<div class="modal-content">
						<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
							<svg class="olymp-close-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</a>
						<div class="modal-header">
							<h6 class="title">Choose from My Photos</h6>

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
												<img src="img/choose-photo1.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo2.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo3.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>

									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo4.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo5.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo6.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>

									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo7.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo8.jpg" alt="photo">
												<input type="radio" name="optionsRadios">
											</label>
										</div>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<div class="radio">
											<label class="custom-radio">
												<img src="img/choose-photo9.jpg" alt="photo">
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
											<img src="img/choose-photo10.jpg" alt="photo">
											<figcaption>
												<a href="#">South America Vacations</a>
												<span>Last Added: 2 hours ago</span>
											</figcaption>
										</figure>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<figure>
											<img src="img/choose-photo11.jpg" alt="photo">
											<figcaption>
												<a href="#">Photoshoot Summer 2016</a>
												<span>Last Added: 5 weeks ago</span>
											</figcaption>
										</figure>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<figure>
											<img src="img/choose-photo12.jpg" alt="photo">
											<figcaption>
												<a href="#">Amazing Street Food</a>
												<span>Last Added: 6 mins ago</span>
											</figcaption>
										</figure>
									</div>

									<div class="choose-photo-item" data-mh="choose-item">
										<figure>
											<img src="img/choose-photo13.jpg" alt="photo">
											<figcaption>
												<a href="#">Graffity & Street Art</a>
												<span>Last Added: 16 hours ago</span>
											</figcaption>
										</figure>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<figure>
											<img src="img/choose-photo14.jpg" alt="photo">
											<figcaption>
												<a href="#">Amazing Landscapes</a>
												<span>Last Added: 13 mins ago</span>
											</figcaption>
										</figure>
									</div>
									<div class="choose-photo-item" data-mh="choose-item">
										<figure>
											<img src="img/choose-photo15.jpg" alt="photo">
											<figcaption>
												<a href="#">The Majestic Canyon</a>
												<span>Last Added: 57 mins ago</span>
											</figcaption>
										</figure>
									</div>


									<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
									<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
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

			<script src="/assets/site/js/base-init.js"></script>
			<script defer src="fonts/fontawesome-all.js"></script>

			<script src="/assets/site/Bootstrap/dist/js/bootstrap.bundle.js"></script>
			<script src="/assets/site/js/moment/moment.js"></script>
			<script src="/assets/site/js/moment/locale/pt-br.js"></script>
			<script src="/assets/site/js/posts.js"></script>
			<script src="/assets/site/js/feed.js"></script>

		</body>
		</html>