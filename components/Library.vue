<template>
	<div class="jumbotron vertical-center">
	<div class="container">
	<!-- bootswatch -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
		<div class="row">
			<div class="col-sm-12">
				<p>Mi propia Biblioteca </p>
				<hr><br>
				<button type="button" class="btn mr-5 btn-success btn-sm">Agregar</button>
				<button type="button" class="btn mr-5 btn-info btn-sm">Editar</button>
				<button type="button" class="btn btn-danger btn-sm">Eliminar</button>
				<br><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Titulo</th>
							<th scope="col">Autor</th>
							<th scope="col">Editorial</th>
							<th scope="col">Fecha de Lanzamiento</th>
							<th scope="col">Edicion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>DO</td>
							<td>RE</td>
							<td>MI</td>
							<td>FA</td>
							<td>SO</td>
						</tr>
					</tbody>
				</table>
			</div>		
		</div>
	</div>
	</div>
</template>
