<?php
	include('config/db_connect.php');
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<h4 class="center grey-text">Hotel " ? "!</h4>
<div class="container">
	<div class=" container">
		<img style="width:100%;" src="https://bit.ly/3dfyiwl">
	</div>
	<div>
		<div>
			<label for="start-time">Date de début:</label>
			<input type="datetime-local" id="start-time" name="start-time">
		</div>
		<div>
			<label for="end-time">Date de fin:</label>
			<input type="datetime-local" id="end-time" name="end-time" onclick='endDate();'>
		</div>
		





		<div class="float-right row">
			<div style="width: 300px;" class="col-sm">
				<div><h3>Voyageurs</h3></div>
				<div class="container">
					<section>
						<div>
							<h3><span aria-hidden="true">Chambre </span> <!-- nombre de chambre --></h3>
							<div>
								<label for="adult">Adultes</label>
								<input class="input-group-field" type="number" name="quantity" min="0" max="5" value="0">
							</div>
							<div >
								<label for="child">Enfants<span> De 0 à 17 ans</span></label>
								<input class="input-group-field" type="number" name="quantity" min="0" max="3" value="0">
							</div>
						</div>
						<div>
							<button data-testid="add-room-button" class="btn btn-outline-secondary mb-2" type="button"> &#43; chambre</button>
						</div>
					</section>
					<div>
						<button data-testid="guests-done-button" class="btn btn-light mb-2" type="button">Terminer</br><span>(valeur)chambre, (valeur)voyageurs</span></button>
					</div>
				</div>
			</div>
			<!-- <form action="" class="col-sm">
				<div class="row">
					<div class="small-12 column">
						<div class="form-floating-label">
							<input type="email" id="email" name="email" required>
							<label for="email">Email float up</label>
						</div>
					</div>
					<div class="small-12 column">
						<div class="form-floating-label">
							<input type="text" id="password" name="password">
							<label for="password">Float password up</label>
						</div>
					</div>
					<div class="small-12 column">
						<div class="form-floating-label">
							<input type="tel" id="tel" name="tel">
							<label for="tel">Float phone up</label>
						</div>
					</div>
					<div class="small-12 column">
						<div class="form-floating-label">
							<textarea name="" id="" rows="5" placeholder=""></textarea>
							<label for="textarea">Float textarea up</label>
						</div>
					</div>
				</div>
			</form> -->
		</div>







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
// 	$('.form-floating-label input, .form-floating-label textarea').focusin(function(){
//   $(this).parent().addClass('has-value');
// });

// $('.form-floating-label input, .form-floating-label textarea').blur(function(){
//   if(!$(this).val().length > 0) {
//     $(this).parent().removeClass('has-value');
//   }
// });


</script>

<?php include('templates/footer.php'); ?>
</html>