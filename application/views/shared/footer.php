<!-- Contact -->
<section id="contact" class="wrapper split">
				<div class="inner">
					<section>
						<h2>Envianos un mensaje</h2>
						<?php
							if($message) {
								echo "<h3>$message</h3>";
							}
						?>
						<form method="post" action="">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-large col-6-medium col-12-xsmall">
									<label for="name">Nombre</label>
									<input type="text" name="name" id="name" required/>
								</div>
								<div class="col-6 col-12-large col-6-medium col-12-xsmall">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" required />
								</div>
								<div class="col-12">
									<label for="tipo-servicio">Tipo de Servicio</label>
									<select name="tipo-servicio" id="tipo-servicio" rows="5" required>
										<option value="" disabled selected>Selecciona una opcion</option>
										<option value="Seguro de carro sin licencia">Seguro de carro sin licencia</option>
										<option value="Servicio de Notario">Servicio de Notario</option>
										<option value="Preparacion de impuestos">Preparacion de impuestos</option>
										<option value="Aplicacion y renovacion de numeros ITIN">Aplicacion y renovacion de numeros ITIN</option>
										<option value="Otro">Otro</option>
									</select>
								</div>
								<div class="col-12">
									<label for="message">Mensaje</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="reset" value="Limpiar" /></li>
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
					<section>
						<h2>Otros medios de Contacto</h2>
						<ul class="bulleted-icons">
							<li>
								<span class="icon-wrapper"><span class="icon solid fa-envelope"></span></span>
								<h3>Email</h3>
								<p><a href="mailto:info@mccstaxservice.com">info@mccstaxservice.com</a></p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon solid fa-fax"></span></span>
								<h3>Fax</h3>
								<p>515809-3627</p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon solid fa-phone"></span></span>
								<h3>Phone</h3>
								<p>(515) 243-1986 <br /> (515) 630-0046</p>	
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon solid fa-mobile"></span></span>
								<h3>Cell Phone</h3>
								<p>(515) 778-2885</p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon solid fa-home"></span></span>
								<h3>Mailing Address</h3>
								<p>4200 SE 14TH ST<br />
								DES MOINES, IA 50320<br />
								United States
								</p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon brands fa-facebook-f"></span></span>
								<h3>Facebook</h3>
								<p><a target='_blank' href="https://www.facebook.com/MCCS-Tax-Service-and-Insurance-103601571595772/">facebook.com/mccstaxservice</a></p>
							</li>
							
						</ul>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<p class="copyright">&copy; MCCS Tax Service. All rights reserved.</p>
					<ul class="menu">
						<li><a href="#">Terms<span> of Use</span></a></li>
						<li><a href="#">Privacy<span> Policy</span></a></li>
						<li><a href="#">Legal<span> Information</span></a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>