<?php require('blog/wp-blog-header.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php the_title(); ?>|RadioStrike公式サイト</title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/vuetify.min.css">
	<meta name="description" content="RadioStrikeのブログ記事です。裏側とかが目白押し！！">
	<link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
	

	<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico">

	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HJCSZE581Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HJCSZE581Q');
</script>
<head prefix="og: http://ogp.me/ns#">

	<meta name="og:url" content="https://www.rediostrike.com/index.html">
	
	<meta name="og:title" content="<?php the_title(); ?>|RadioStrike公式サイト">
	
	<meta name="og:image" content="https://www.rediostrike.com/img/ogp.png">
	
	<meta name="og:description" content="RadioStrikeのブログ記事です。裏側とかが目白押し！！">
	
	<meta name="og:type" content="article">
	<meta property="fb:app_id" content="305978515742410" />
	<meta name="twitter:card" content="summary_large_image"/>
</head>
<body>
	<header>
		<div id="app">
			<v-app>
				<div>
				<v-app-bar>
						<v-app-bar-nav-icon v-on:click.stop="drawer = !drawer" aria-label="ハンバーガーメニュー"></v-app-bar-nav-icon>
						<img src="img/headerlogo.png" class="radiostrikelogoimg" alt="RadioStrikeのロゴ">
					</v-app-bar>
		
					<v-navigation-drawer
						v-model="drawer"
						absolute
						temporary
					>
					
						<v-list>
							<v-list-item-group>
								<a href="index.html" class="nava"><v-list-item>ホーム</v-list-item></a>
								<a href="otayori.html" class="nava"><v-list-item>お便りについて</v-list-item></a>
								<a href="stream.html" class="nava"><v-list-item>配信サイトについて</v-list-item></a>
								<a href="sns.html" class="nava"><v-list-item>SNSについて</v-list-item></a>
								<a href="news.html" class="nava"><v-list-item>お知らせ</v-list-item></a>
								<a href="blog.html" class="nava"><v-list-item>ブログ</v-list-item></a>
								<a href="privacypolicy.html" class="nava"><v-list-item>プライバシーポリシー</v-list-item></a>
								<a href="contact.php" class="nava"><v-list-item>お問い合わせ</v-list-item></a>
								
							</v-list-item-group>
						</v-list>
					</v-navigation-drawer>
					<div class="container">
					<?php include('blog/wp_info_content.inc'); ?>
				</div>
				<v-footer>
					<!--フッター内容-->
					
					<p>&copy 2023-2024 RadioStrike All right Reserved.</p>
			 </v-footer>
			</v-app>
		</div>
		
		<script src='js/polyfill.min.js'></script>
	<script src='js/vue.js'></script>
	<script src='js/vuetify.min.js'></script>
	<script src="js/script.js"></script> 
</body>
</html>
