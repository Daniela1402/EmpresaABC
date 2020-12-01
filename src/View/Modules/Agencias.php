<?php if (!$_SESSION) {
	echo '<script type="text/javascript">window.location.href="Login";</script>';
} ?>

<?php $agenciasController = new AgenciasController(); ?>

<div class="col-lg-12">
	<div class="row">
		<div class="col-lg-12 mt-4 mb-4 p-3 bg-white shadow-lg">
			<div class="row">
				<div class="col-lg-4">
					<form method="POST">
						<div class="form-group">
							<label>NIT</label>
							<input type="number" name="agencias_nit_c" class="form-control" id="agencias_nit_c" placeholder="NIT" required>
						</div>

						<div class="form-group">
							<label>Razon Social</label>
							<input type="text" name="agencias_razon_social_c" class="form-control" id="agencias_razon_social_c" placeholder="Razon Social" required>
						</div>

						<div class="form-group">
							<label>Domicilio</label>
							<input type="text" name="agencias_domicilio_c" class="form-control" id="agencias_domicilio_c" placeholder="Domicilio" required>
						</div>

						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="agecias_telefono_c" class="form-control" id="agecias_telefono_c" placeholder="Telefono" required>
						</div>

						<button type="submit" class="btn btn-primary btn-block">Registrar</button>

						<?php if ($agenciasController->createAgencias()) { ?>
							<script type="text/javascript">
								window.location.href="Agencias";
							</script>
						<?php }  ?>

						<hr>
					</form>
				</div>

				<div class="col-lg-8">
					<div class="table-responsive">
						<table class="table text-center">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">NIT</th>
									<th scope="col">Razon Social</th>
									<th scope="col">Domicilio</th>
									<th scope="col">Telefono</th>
								
								</tr>
							</thead>
							<tbody>
								<?php foreach ($agenciasController->readAgencias() as $key => $agencias) {
									echo(
										"<tr>
										<td>" . ($agencias->getIdAgencias()) . "</td>
										<td>" . ($agencias->getAgenciasNit()) . "</td>
										<td>" . ($agencias->getAgenciasRazonSocial()) . "</td>
										<td>" . ($agencias->getAgenciasDomicilio()) . "</td>
										<td>" . ($agencias->getAgenciasTelefono()) . "</td>
									
										</tr>"
									);
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>