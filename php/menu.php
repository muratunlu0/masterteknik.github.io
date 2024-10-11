<nav>
	<ul class="sf-menu">
		<li<?php echo (!isset($_GET["page"]) || $_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
			<a href="?page=home" title="Home">
				HOME
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home") ? " class='selected'" : ""); ?>>
					<a href="?page=home" title="Home Style 1">
						Home Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
					<a href="?page=home_2" title="Home Style 2">
						Home Style 2
					</a>
				</li>
			</ul>
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="about_2" || $_GET["page"]=="services" || $_GET["page"]=="services_2" || $_GET["page"]=="service_house_cleaning" || $_GET["page"]=="projects" || $_GET["page"]=="project_apartment_cleaning" || $_GET["page"]=="team" || $_GET["page"]=="team_celevic_parkhill" || $_GET["page"]=="testimonials" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="404") ? " class='selected'" : ""); ?>>
			<a href="?page=about" title="Pages">
				PAGES
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
					<a href="?page=about" title="About Us Style 1">
						About Us Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about_2" ? " class='selected'" : ""); ?>>
					<a href="?page=about_2" title="About Us Style 2">
						About Us Style 2
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
					<a href="?page=services" title="Services Style 1">
						Services Style 1
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="services_2" ? " class='selected'" : ""); ?>>
					<a href="?page=services_2" title="Services Style 2">
						Services Style 2
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="service_house_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=service_house_cleaning" title="Single Service">
						Single Service
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="projects" ? " class='selected'" : ""); ?>>
					<a href="?page=projects" title="Projects">
						Projects
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="project_apartment_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=project_apartment_cleaning" title="Single Project">
						Single Project
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " class='selected'" : ""); ?>>
					<a href="?page=team" title="Our Team">
						Our Team
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="team_celevic_parkhill" ? " class='selected'" : ""); ?>>
					<a href="?page=team_celevic_parkhill" title="Single Team Member">
						Single Team Member
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="testimonials" ? " class='selected'" : ""); ?>>
					<a href="?page=testimonials" title="Testimonials">
						Testimonials
					</a>
				</li>
				<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="cleaning_checklist" ? " class='selected'" : ""); ?>>
					<a href="?page=cleaning_checklist" title="Cleaning Checklist">
						Cleaning Checklist
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
					<a href="?page=404" title="404 Not Found">
						404 Not Found
					</a>
				</li>
			</ul>
		</li>
		<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="service_calculator" ? " class='selected'" : ""); ?>>
			<a href="?page=service_calculator" title="Calculator">
				CALCULATOR
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="services" || $_GET["page"]=="service_house_cleaning" || $_GET["page"]=="service_post_renovation" || $_GET["page"]=="service_green_spaces_maintenance" || $_GET["page"]=="service_move_in_out" || $_GET["page"]=="service_commercial_cleaning" || $_GET["page"]=="service_window_cleaning") ? " class='selected'" : ""); ?>>
			<a href="?page=services" title="Services">
				SERVICES
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_house_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=service_house_cleaning" title="House Cleaning">
						House Cleaning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_post_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=service_post_renovation" title="Post Renovation">
						Post Renovation
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_green_spaces_maintenance" ? " class='selected'" : ""); ?>>
					<a href="?page=service_green_spaces_maintenance" title="Green Spaces Maintenance">
						Green Spaces Maintenance
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_move_in_out" ? " class='selected'" : ""); ?>>
					<a href="?page=service_move_in_out" title="Move In Out Service">
						Move In Out Service
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_commercial_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=service_commercial_cleaning" title="Commercial Cleaning">
						Commercial Cleaning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_window_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=service_window_cleaning" title="Window Cleaning">
						Window Cleaning
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="projects" || $_GET["page"]=="project_apartment_cleaning" || $_GET["page"]=="project_garden_maintenance" || $_GET["page"]=="project_move_in_out" || $_GET["page"]=="project_after_renovation_cleaning" || $_GET["page"]=="project_house_cleaning" || $_GET["page"]=="project_gutter_cleaning") ? " class='selected'" : ""); ?>>
			<a href="?page=projects" title="Projects">
				PROJECTS
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_apartment_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=project_apartment_cleaning" title="Apartment Cleaning">
						Apartment Cleaning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_garden_maintenance" ? " class='selected'" : ""); ?>>
					<a href="?page=project_garden_maintenance" title="Garden Maintenance">
						Garden Maintenance
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_move_in_out" ? " class='selected'" : ""); ?>>
					<a href="?page=project_move_in_out" title="Move In Out">
						Move In Out
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_after_renovation_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=project_after_renovation_cleaning" title="After Renovation Cleaning">
						After Renovation Cleaning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_house_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=project_house_cleaning" title="House Cleaning">
						House Cleaning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_gutter_cleaning" ? " class='selected'" : ""); ?>>
					<a href="?page=project_gutter_cleaning" title="Gutter Cleaning">
						Gutter Cleaning
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_small_image" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="post" || $_GET["page"]=="search") ? " class='selected'" : ""); ?>>
			<a href="?page=blog" title="Blog">
				BLOG
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
					<a href="?page=blog" title="Blog">
						Blog
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_small_image" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_small_image" title="Blog Small Image">
						Blog Small Image
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_2_columns" title="Blog 2 Columns">
						Blog 2 Columns
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_left_sidebar" title="Blog Left Sidebar">
						Blog Left Sidebar
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
					<a href="?page=post" title="Single Post">
						Single Post
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
					<a href="?page=search&amp;s=ipsum" title="Search Template">
						Search Template
					</a>
				</li>
			</ul>
		</li>
		<li class="left-flyout<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" || $_GET["page"]=="contact_3") ? " selected" : ""); ?>">
			<a href="?page=contact" title="Contact">
				CONTACT
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
					<a href="?page=contact" title="Contact Style 1">
						Contact Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
					<a href="?page=contact_2" title="Contact Style 2">
						Contact Style 2
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_3" ? " class='selected'" : ""); ?>>
					<a href="?page=contact_3" title="Contact Style 3">
						Contact Style 3
					</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li><a class="template-arrow-vertical-3" href="#">&nbsp;</a></li>
			<li<?php echo (!isset($_GET["page"]) || $_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home">
					HOME
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home") ? " class='selected'" : ""); ?>>
						<a href="?page=home" title="Home Style 1">
							Home Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
						<a href="?page=home_2" title="Home Style 2">
							Home Style 2
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="about_2" || $_GET["page"]=="services" || $_GET["page"]=="services_2" || $_GET["page"]=="service_house_cleaning" || $_GET["page"]=="projects" || $_GET["page"]=="project_apartment_cleaning" || $_GET["page"]=="team" || $_GET["page"]=="team_celevic_parkhill" || $_GET["page"]=="testimonials" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="404") ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="Pages">
					PAGES
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
						<a href="?page=about" title="About Us Style 1">
							About Us Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about_2" ? " class='selected'" : ""); ?>>
						<a href="?page=about_2" title="About Us Style 2">
							About Us Style 2
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
						<a href="?page=services" title="Services Style 1">
							Services Style 1
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="services_2" ? " class='selected'" : ""); ?>>
						<a href="?page=services_2" title="Services Style 2">
							Services Style 2
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="service_house_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=service_house_cleaning" title="Single Service">
							Single Service
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="projects" ? " class='selected'" : ""); ?>>
						<a href="?page=projects" title="Projects">
							Projects
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="project_apartment_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=project_apartment_cleaning" title="Single Project">
							Single Project
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " class='selected'" : ""); ?>>
						<a href="?page=team" title="Our Team">
							Our Team
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="team_celevic_parkhill" ? " class='selected'" : ""); ?>>
						<a href="?page=team_celevic_parkhill" title="Single Team Member">
							Single Team Member
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="testimonials" ? " class='selected'" : ""); ?>>
						<a href="?page=testimonials" title="Testimonials">
							Testimonials
						</a>
					</li>
					<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="cleaning_checklist" ? " class='selected'" : ""); ?>>
						<a href="?page=cleaning_checklist" title="Cleaning Checklist">
							Cleaning Checklist
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
						<a href="?page=404" title="404 Not Found">
							404 Not Found
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo (isset($_GET["page"]) && $_GET["page"]=="service_calculator" ? " class='selected'" : ""); ?>>
				<a href="?page=service_calculator" title="Calculator">
					CALCULATOR
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="services" || $_GET["page"]=="service_house_cleaning" || $_GET["page"]=="service_post_renovation" || $_GET["page"]=="service_green_spaces_maintenance" || $_GET["page"]=="service_move_in_out" || $_GET["page"]=="service_commercial_cleaning" || $_GET["page"]=="service_window_cleaning") ? " class='selected'" : ""); ?>>
				<a href="?page=services" title="Services">
					SERVICES
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_house_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=service_house_cleaning" title="House Cleaning">
							House Cleaning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_post_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=service_post_renovation" title="Post Renovation">
							Post Renovation
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_green_spaces_maintenance" ? " class='selected'" : ""); ?>>
						<a href="?page=service_green_spaces_maintenance" title="Green Spaces Maintenance">
							Green Spaces Maintenance
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_move_in_out" ? " class='selected'" : ""); ?>>
						<a href="?page=service_move_in_out" title="Move In Out Service">
							Move In Out Service
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_commercial_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=service_commercial_cleaning" title="Commercial Cleaning">
							Commercial Cleaning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_window_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=service_window_cleaning" title="Window Cleaning">
							Window Cleaning
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="projects" || $_GET["page"]=="project_apartment_cleaning" || $_GET["page"]=="project_garden_maintenance" || $_GET["page"]=="project_move_in_out" || $_GET["page"]=="project_after_renovation_cleaning" || $_GET["page"]=="project_house_cleaning" || $_GET["page"]=="project_gutter_cleaning") ? " class='selected'" : ""); ?>>
				<a href="?page=projects" title="Projects">
					PROJECTS
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_apartment_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=project_apartment_cleaning" title="Apartment Cleaning">
							Apartment Cleaning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_garden_maintenance" ? " class='selected'" : ""); ?>>
						<a href="?page=project_garden_maintenance" title="Garden Maintenance">
							Garden Maintenance
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_move_in_out" ? " class='selected'" : ""); ?>>
						<a href="?page=project_move_in_out" title="Move In Out">
							Move In Out
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_after_renovation_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=project_after_renovation_cleaning" title="After Renovation Cleaning">
							After Renovation Cleaning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_house_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=project_house_cleaning" title="House Cleaning">
							House Cleaning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="project_gutter_cleaning" ? " class='selected'" : ""); ?>>
						<a href="?page=project_gutter_cleaning" title="Gutter Cleaning">
							Gutter Cleaning
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_small_image" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="post" || $_GET["page"]=="search") ? " class='selected'" : ""); ?>>
				<a href="?page=blog" title="Blog">
					BLOG
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
						<a href="?page=blog" title="Blog">
							Blog
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_small_image" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_small_image" title="Blog Small Image">
							Blog Small Image
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns" title="Blog 2 Columns">
							Blog 2 Columns
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_left_sidebar" title="Blog Left Sidebar">
							Blog Left Sidebar
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
						<a href="?page=post" title="Single Post">
							Single Post
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
						<a href="?page=search&amp;s=ipsum" title="Search Template">
							Search Template
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" || $_GET["page"]=="contact_3") ? " class='selected'" : ""); ?>>
				<a href="?page=contact" title="Contact">
					CONTACT
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
						<a href="?page=contact" title="Contact Style 1">
							Contact Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
						<a href="?page=contact_2" title="Contact Style 2">
							Contact Style 2
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_3" ? " class='selected'" : ""); ?>>
						<a href="?page=contact_3" title="Contact Style 3">
							Contact Style 3
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>