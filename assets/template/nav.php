<div class="header" :class="{'desktop':isDesktop,'mobile':!isDesktop,'open':main.menu.open,'showSidebar' : main.sidebar.open}"><div class="header-container"><template v-if="!isDesktop"><div class="sidebarIcon" :class="main.sidebar.open ? 'open' : ''" @click="main.sidebar.open = !main.sidebar.open; main.menu.open = false"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18"><path d="M82,53H64a2,2,0,0,1-2-2V37a2,2,0,0,1,2-2H82a2,2,0,0,1,2,2V51A2,2,0,0,1,82,53ZM71,36H64a1,1,0,0,0-1,1V51a1,1,0,0,0,1,1h7V36Zm12,1a1,1,0,0,0-1-1H72V52H82a1,1,0,0,0,1-1V37ZM69,40H65V39h4v1Zm0,3H65V42h4v1Zm0,3H65V45h4v1Z" transform="translate(-62 -35)"/></svg></div></template><div class="logo"><div class="center"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_option('logo'); ?>" /></a></div></div><template v-if="!isDesktop"><div class="menuIcon" :class="main.menu.open ? 'open' : ''" @click="main.menu.open = !main.menu.open; main.sidebar.open = false"><div class="bread bread1"></div><div class="bread bread2"></div><div class="bread bread3"></div></div></template><div class="menu" :class="main.menu.open ? 'open' : ''"><div class="topNav"><?php wp_nav_menu( array( 'theme_location' => 'topNav' ) ); ?></div><form action="<?php bloginfo('url'); ?>/" class="headerSearchform" id="searchform" method="get" role="search"><el-tooltip :manual="disableTooltip" effect="dark" content="请输入关键词搜索" placement="bottom-end" :enterable="false"><input class="searchInput" type="text" id="s" name="s" value="" placeholder="搜索"></el-tooltip><input class="searchIcon" type="submit" value="" id="searchsubmit"></form></div></div></div>