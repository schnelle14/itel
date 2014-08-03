<div id="fullpage">
	<div id="homePage" class="section">
		<span class="home-header">$Header_Text</span>
		<span class="home-detail">$Detail_Text</span>
	</div>
	<div id="aboutUsPage" class="section">
		<div id="aboutUsContainer">
			<div id="aboutUsLogo">
				<img src="{$ThemeDir}/images/logo_big.png" alt="i-TelCom">
			</div>
			<div id="aboutUsText">
				<span>About i-Tel Communications</span>
				<p>$AboutUsText</p>
			</div>
		</div>
	</div>
	<div id="servicesPage" class="section">
		<span class="section-header-text">Our Services</span>
		<div id="servicesContainer">
			<ul>
			<% control ServicesOffered %>
				<li>
					<p>$Header</p>
					<p>$Detail</p>
				</li>
			<% end_control %>
			</ul>
		</div>
	</div>
	<div id="contactUsPage" class="section">
		<span class="section-header-text">Contact Us</span>
		<div id="contactDetailsContainer">
			<div class="contact-detail-box left">
				<div>
					<img src="{$ThemeDir}/images/mobile.png" alt="Mobile number">
				</div>
				<div class="contact-detail-text">
					<span class="contact-detail-header">Mobile</span>
					<span class="contact-detail">$Mobile</span>
				</div>
			</div>
			<div class="contact-detail-box center">
				<div>
					<img src="{$ThemeDir}/images/phone.png" alt="Landline number">
				</div>
				<div class="contact-detail-text">
					<span class="contact-detail-header">Landline</span>
					<span class="contact-detail">$Landline</span>
				</div>
			</div>
			<div class="contact-detail-box right">
				<div>
					<img src="{$ThemeDir}/images/email.png" alt="Email Address">
				</div>
				<div class="contact-detail-text">
					<span class="contact-detail-header">Email</span>
					<span class="contact-detail">$Email</span>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>Copyright 2014 i-Tel Communications</p>
		</div>
	</div>
</div>


