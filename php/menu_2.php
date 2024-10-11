<nav>
	<ul class="sf-menu">
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