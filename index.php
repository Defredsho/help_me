<php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">		
	<title>Registro</title>
  </head>
  <body>
		<div>
		<main>
    <nav class="border-bottom border-secondary d-flex justify-content-between align-items-center">
			<button class="btn btn-primary" >Iniciar Sesion</button>
		</nav>
		<section class="form-group align-content-around">

			<form class="container mt-5 card px-5 py-5 bg-dark text-white">
				<h2 class="h4 text-center bg-dark">Registro</h2>
				<input 
					type="email" 
					placeholder="Correo electronico"
					v-model="register_form.email" 
					class="form-inputs mb-4 form-control"/>
				<input 
					type="password" 
					placeholder="Contraseña" 
					v-model="register_form.password"
					class="form-inputs form-control mb-2"/>
				<input 
					type="submit" 
					value="Registrarse" 
					class="btn btn-success"/>
			</form>
		</section>
	</main>

<script>
import { ref } from 'vue'
import { useStore } from 'vuex'

export default {
	setup () {
		const register_form = ref({});
		const store = useStore();


		const register = () => {
			store.dispatch('register', register_form.value);
		}

		return {
			register_form,
			register
		}
	}
}
</script>
<style>
body,main{
  background-color: #121E12;
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		<script src="main.js"></script>
  </body>
</html>
