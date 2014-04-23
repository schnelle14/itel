<footer class="footer" role="contentinfo">
	<div class="footer-container">
		<div class="footer-left">
			<% include Navigation %>
		</div>
		
		<div class="footer-center">
			<% control ContactUsPageObject %>
			<span>
				<p class="footer-label">Landline</p><p class="contact-detail">$Landline_no</p>
			</span>
			<span>
				<p class="footer-label">Mobile</p><p class="contact-detail">$Mobile_no</p>
			</span>
			<span>
				<p class="footer-label">Email</p><p class="contact-detail">$Team_email</p>
			</span>
			<% end_control %>
		</div>

		<div class="footer-right">
			<small> Website by Brando Sarmiento </small> 
			<small>Powered by <a href="http://silverstripe.org">SilverStripe</a></small>
		</div>
		
	</div>
</footer>