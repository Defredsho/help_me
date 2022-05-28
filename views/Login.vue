<template>
	<main>
    <nav class="border-bottom border-secondary d-flex justify-content-between align-items-center">
      <router-link class="btn btn-primary ml-auto mr-5 mb-1" type="submit" to="/library">Login</router-link>
    </nav>
		<section class="form-group align-content-around">

			<form class="container mt-5 card px-5 py-5 bg-dark text-white">
				<h2 class="h4 text-center bg-dark">Register</h2>
				<input 
					type="email" 
					placeholder="Email address"
					v-model="register_form.email" 
					class="form-inputs mb-4 form-control"/>
				<input 
					type="password" 
					placeholder="Password" 
					v-model="register_form.password"
					class="form-inputs form-control mb-2"/>
				<input 
					type="submit" 
					value="Register" 
					class="btn btn-success"/>
			</form>
		</section>
	</main>
</template>

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