<div class="row">
	<div class="col-md-3">
		
		<h4>Revenue</h4>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?= base_url() ?>revenue/action_type_wise_revenue">Revenue - Actiontype wise</a></li>
			<li><a href="<?= base_url() ?>revenue/product_wise_revenue">Revenue - Product wise</a></li>
			<li><a href="<?= base_url() ?>revenue/average_revenue_per_domain">Average Revenue per Domain</a></li>			
		</ul>
	
	
		<h4>Domains</h4>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?= base_url() ?>domains/domain_count">Domain Count</a></li>
			<li><a href="<?= base_url() ?>domains/domain_registration_term">Domain Registration Term</a></li>
			<li><a href="<?= base_url() ?>domains/domains_per_customer">Domains per Customer</a></li>
			<li><a href="<?= base_url() ?>domains/domains_under_management">Domains Under Management</a></li>
		</ul>
	
	
		<h4>WebServices</h4>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?= base_url() ?>web_services/product_count">Product Count & % of Hosting</a></li>
			<li><a href="<?= base_url() ?>web_services/ws_count">WS Count</a></li>
			<li><a href="<?= base_url() ?>web_services/ws_registration_term">WS Registration Term</a></li>
			<li><a href="<?= base_url() ?>web_services/ws_distribution">WS Distribution</a></li>
			<li><a href="<?= base_url() ?>web_services/ws_under_management">WS Under Management</a></li>
		</ul>
	
	
		<h4>Customers</h4>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?= base_url() ?>customers/signup_payup">SignUps/ PayUps</a></li>
			<li><a href="<?= base_url() ?>customers/citywise_distribution">City wise Distribution</a></li>
		</ul>
	
	</div>
	<div class="col-md-9">
		<div id="container">
		</div>
		<div class="data"></div>
	</div>
</div>