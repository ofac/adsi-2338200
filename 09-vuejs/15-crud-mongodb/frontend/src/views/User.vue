<template>
	<div class="py-2">
		<div class="text-left text-md m-4 bg-[#42b883]/40 p-4 rounded-md border-2 border-[#42b883]">
			<h4>
				<strong>ID:</strong>
				{{ user._id }}
			</h4>
			<p class="">
				<strong>Name:</strong>
				{{ user.name }}
			</p>
			<p class="">
				<strong>Email:</strong>
				{{ user.email }}
			</p>
		</div>
	</div>
</template>

<script>
import { useRoute } from 'vue-router';
import { useStore } from 'vuex';
import { ref, onMounted } from 'vue';
export default {
	setup () {
		const route = useRoute();
		const store = useStore();
		const user = ref({});
		onMounted(() => {
			setTimeout(() => {
				user.value = store.getters.GetSpecificUser(route.params.id)
			}, 100);
		});
		return {
			user
		}
	}
}
</script>