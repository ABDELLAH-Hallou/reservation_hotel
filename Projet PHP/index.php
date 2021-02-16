<?php
	include('config/db_connect.php');
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<h4 class="center grey-text">PHP!</h4>
<div class="container">
	<figure class="uitk-image heroImageFigure">
		<div class="uitk-image-placeholder">
			<img alt="" class="uitk-image-media" src="https://bit.ly/3dfyiwl">
		</div>
		<figcaption class="uitk-scrim fade-bottom">
			<div class="uitk-layout-position heroImageHeadings uitk-layout-position-bottom-zero uitk-layout-position-absolute uitk-spacing uitk-spacing-padding-inline-six uitk-spacing-padding-block-six"> 
				<div class="heroImageHeadings">
					<h1 class="uitk-type-display-800">Notre Hôtels</h1>
				</div> 
			</div>
		</figcaption>
	</figure>
	<div>
		<div>
			<label for="start-time">Date de début:</label>
			<input type="datetime-local" id="start-time" name="start-time">
		</div>
		<div>
			<label for="end-time">Date de fin:</label>
			<input type="datetime-local" id="end-time" name="end-time" onclick='endDate();'>
		</div>
		<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
		





		<div>

			<div class="float-right" style="width: 300px;">
				<div>
					<h3 class="uitk-type-heading-500">Voyageurs</h3>
				</div>
				<section>
					<div>
						<h3>
							<span aria-hidden="true">Chambre </span> <!-- nombre de chambre -->
						</h3>
						<div>
							<label for="adult-input-0">Adultes</label>
							<div class="d-flex flex-row">
								<button type="button" class="btnPM">
									<svg height="100%" role="img" viewBox="0 0 24 24" width="100%">
										<svg>
											<path d="M19 13H5v-2h14v2z"></path>
										</svg>
									</svg>
								</button>
								<input type="text" id="adult-input" min="1" max="14" value="0">
								<button type="button" class="btnPM">
									<svg height="100%" role="img" viewBox="0 0 24 24" width="100%">
										<svg>
											<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
										</svg>
									</svg>
								</button>
							</div>
						</div>
						<div >
							<label for="child-input-0">Enfants
								<span>De 0 à&nbsp;17&nbsp;ans</span>
							</label>
							<div class="d-flex flex-row">
								<button type="button" class="btnPM">
									<svg height="100%" role="img" viewBox="0 0 24 24" width="100%" >
										<svg>
											<path d="M19 13H5v-2h14v2z"></path>
										</svg>
									</svg>
								</button>
								<input type="text" id="child-input" min="0" max="6"  value="0">
								<button type="button" class="btnPM" >
									<svg height="100%" role="img" viewBox="0 0 24 24" width="100%">
										<svg>
											<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
										</svg>
									</svg>
								</button>
							</div>
						</div>
					</div>
					<div>
						<button data-testid="add-room-button" type="button">Ajouter une autre chambre</button>
					</div>
					<div></div>
				</section>
				<div>
					<button data-testid="guests-done-button" type="button">Terminer
						<span>(valeur)chambre, (valeur)voyageurs</span>
					</button>
				</div>
			</div>

		</div>






		<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
	</div>
</div>
<script type="text/javascript">
		var now = new Date();
		now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
		document.getElementById('start-time').value = now.toISOString().slice(0,16);
		document.getElementById('start-time').min = now.toISOString().slice(0,16);
		document.getElementById('end-time').value = document.getElementById('start-time').value;
		document.getElementById('end-time').min = document.getElementById('start-time').value;
	function endDate(){
		document.getElementById('end-time').value = document.getElementById('start-time').value;
		document.getElementById('end-time').min = document.getElementById('start-time').value;
	}
</script>

<?php include('templates/footer.php'); ?>
</html>