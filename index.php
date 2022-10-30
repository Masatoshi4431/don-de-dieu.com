<?php get_header(); ?>

	<main class="main top">

		<section class="mainVisual">
			<div class="container">
				<div class="mainVisual_thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainvisual.png" alt="ドンデデュー">
				</div>
			</div>
		</section>

		<section class="news">
			<div class="container">
				<div class="heading">
					<h2>NEWS</h2>
					<h3>お知らせ</h3>
				</div>
				<div class="verticalLine"><span class="verticalLineDraw js-verticalLine"></span></div>
				<div class="newsMain">
					<?php
						$news = get_posts (
							array(
								'post_type' => 'news',
								'posts_per_page' => 3,
							)
						);
					?>
					<ul class="newsMainList">
						<?php foreach ($news as $post) : setup_postdata($post); ?>
							<li>
								<p><?php the_time('Y.m.d'); ?></p>
								<p><?php the_title(); ?></p>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</section>

		<section class="concept" id="concept">
			<div class="container">
				<div class="conceptMain">
					<div class="conceptMain_logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ドンデデュー">
					</div>
					<p>ドンデデューは<br>エアロビインストラクターが作る<br>玄米粉とおからを使用した<br>グルテンフリースイーツです。</p>
					<p><span>低カロリー</span>・<span>高タンパク</span><br><span>甘さ控えめ</span>・<span>ダイエットに最適</span><br><span>罪悪感なし</span>・<span>年齢問わず</span></p>
					<p>安心してお召し上がりいただけます。</p>
				</div>								
			</div>
		</section>

		<seciton class="menu" id="menu">
			<div class="container">
				<div class="heading">
					<h2>MENU</h2>
					<h3>メニュー</h3>
				</div>
				<div class="verticalLine"><span class="verticalLineDraw js-verticalLine"></span></div>
				<div class="menuMain">
					<ul class="menuMainList">
						<li class="fadeIn fadeIn-up js-fadeIn">
							<div class="menuMainListBox">
								<div class="menuMainListBox_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/menu_1.png" alt="マフィン">
								</div>
								<dl class="menuMainListBoxDetail">
									<dt>マフィン</dt>
									<dd>プレーン</dd>
									<dd>くるみ</dd>
									<dd>抹茶</dd>
								</dl>
							</div>
						</li>
						<li class="fadeIn fadeIn-up js-fadeIn">
							<div class="menuMainListBox">
								<div class="menuMainListBox_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/menu_2.png" alt="塩麹クッキー">
								</div>
								<dl class="menuMainListBoxDetail">
									<dt>塩麹クッキー</dt>
									<dd>プレーン</dd>
									<dd>くるみ</dd>
									<dd>カカオ</dd>
								</dl>
							</div>
						</li>
					</ul>
					<ul class="menuMainList">
						<li class="fadeIn fadeIn-up js-fadeIn">
							<div class="menuMainListBox">
								<div class="menuMainListBox_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/menu_3.jpg" alt="おからブールドネージュ">
								</div>
								<dl class="menuMainListBoxDetail">
									<dt>おからブールドネージュ</dt>
									<dd>プレーン</dd>
									<dd>くるみ</dd>
									<dd>抹茶</dd>
								</dl>
							</div>
						</li>
						<li class="fadeIn fadeIn-up js-fadeIn">
							<div class="menuMainListBox">
								<div class="menuMainListBox_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/menu_4.jpg" alt="おからニューヨークチーズケーキ">
								</div>
								<dl class="menuMainListBoxDetail">
									<dt>おからニューヨークチーズケーキ</dt>
									<dd>プレーン</dd>
									<dd>くるみ</dd>
									<dd>カカオ</dd>
								</dl>
							</div>
						</li>
						<li class="fadeIn fadeIn-up js-fadeIn">
							<div class="menuMainListBox">
								<div class="menuMainListBox_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/menu_5.jpg" alt="レアチーズケーキ">
								</div>
								<dl class="menuMainListBoxDetail">
									<dt>レアチーズケーキ</dt>
									<dd>プレーン</dd>
									<dd>くるみ</dd>
									<dd>カカオ</dd>
								</dl>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</seciton>			

		<section class="lineup" id="lineup">
			<div class="container">
				<ul class="lineupMain">
					<li class="fadeIn fadeIn-left js-fadeIn">
						<dl class="lineupMainList is-brown">
							<dt>偶数月のマフィン</dt>
							<dd>プレーン</dd> 
							<dd>ココナッツ</dd>  
							<dd>シナモン</dd>  
							<dd>チョコレート</dd>  
							<dd>レーズンくるみ</dd>  
							<dd>抹茶あずき</dd>  
							<dd>クリームチーズあずき</dd>  
							<dd>クランベリーくるみ</dd> 
							<dd>オレンジピールカカオ</dd> 
						</dl>
					</li>
					<li>
						<div class="lineupMain_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_img.png" alt="">
						</div>
					</li>
					<li class="fadeIn fadeIn-right js-fadeIn">
						<dl class="lineupMainList is-black">
							<dt>奇数月のマフィン</dt>
							<dd>プレーン</dd> 
							<dd>くるみ</dd>  
							<dd>アールグレイ</dd>  
							<dd>抹茶</dd>  
							<dd>あずき</dd>  
							<dd>チョコアーモンド</dd>  
							<dd>シナモン杏</dd>  
							<dd>ブルーベリーチーズ</dd>  
							<dd>チアシードレーズンくるみ</dd> 
						</dl>
					</li>
				</ul>
				<p class="lineup_word">フレーバーは変更する可能性がありますのでご了承ください。<br>当月のフレーバーは公式LINEからご確認ください。</p>
			</div>
		</section>

		<section class="order" id="order">
			<div class="container">
				<h2 class="order_title">ご注文はこちら<br>公式LINEから受付中</h2>
				<div class="order_qrcode">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/line_qr.jpg" alt="ドンデデュー 公式LINE">
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="heading">
					<h2>ABOUT<br>OUR SWEETS</h2>
					<h3>ドンデデューのスイーツについて</h3>
				</div>
				<div class="verticalLine"><span class="verticalLineDraw js-verticalLine"></span></div>
				<div class="aboutMain">
					<div class="aboutMain_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_img.png" alt="">
					</div>
					<ul class="aboutMainList">
						<li>山梨県産減農薬玄米粉</li>
						<li>手作り塩麹</li>
						<li>足利ながくら豆腐店製造おから</li>
						<li>パワードエッグ力丸くん</li>
						<li>圧搾製法太白ごま油</li>
						<li>オーガニックシュガー</li>
						<li>オーガニックバナナ</li>
						<li>四つ葉バター（無塩）</li>
						<li>そのほか、こだわりの食材を使用。</li>
					</ul>
					<p class="aboutMain_word">神様から頂いた恵溢れる健康食材で<br>真心込めて一つ一つ手作りし皆様にお届けします。</p>
				</div>
			</div>
		</section>

		<section class="access" id="access">
			<div class="container">
				<div class="heading">
					<h2>ACCESS</h2>
					<h3>店舗情報</h3>
				</div>
				<div class="verticalLine"><span class="verticalLineDraw js-verticalLine"></span></div>
				<ul class="accessMain">
					<li class="accessMainBox">
						<div class="accessMainBox_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/access_entrance.png" alt="">
						</div>
					</li>
					<li class="accessMainBox">
						<p class="accessMainBox_postcode">〒326-0006</p>
						<p class="accessMainBox_adress">栃木県足利市利保1-45-4</p>
						<p class="accessMainBox_notes">※ご予約やお問い合わせは公式LINEへご連絡ください</p>
					</li>
					<li class="accessMainBox">
						<p class="accessMainBox_word">公式LINE</p>
						<div class="accessMainBox_qrcode">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/line_qr.jpg" alt="">
						</div>
					</li>
				</ul>
			</div>
			<div class="accessMap">
				<div class="container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.2983710490334!2d139.46735341562464!3d36.35355110041273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f226a55e71a11%3A0x6170efdc4136091e!2z44CSMzI2LTAwMDYg5qCD5pyo55yM6Laz5Yip5biC5Yip5L-d55S677yR5LiB55uu77yU77yV4oiS77yU!5e0!3m2!1sja!2sjp!4v1665487649483!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>			
		</section>			

		<section class="instagram" id="instagram">
			<div class="container">
				<div class="heading">
					<h2>Instagram</h2>
					<h3>インスタグラム</h3>
				</div>
				<div class="verticalLine"><span class="verticalLineDraw js-verticalLine"></span></div>
				<div class="instagramMain">
					<div class="instagramMainGallery">
						<div id="instafeed" class="instagramMainGalleryList"></div>
					</div>
					<p class="instagramMain_word">Instagram<br>don_de_dieu859</p>
					<div class="instagramMain_qrcode">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/instagram_qr.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>