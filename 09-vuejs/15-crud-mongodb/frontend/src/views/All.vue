<template>
	<div class="p-3">
        <div class="mx-auto max-w-screen-lg">
            <div class="py-2 h-[310px] overflow-y-auto">
                <router-link 
                    v-for="(user, i) in $store.state.users"
                    :key="user._id"
                    :to="`/user/${user._id}`">
                    <div :class="`user my-1 rounded-lg p-2 ${(i % 2 == 0 ? 'bg-[#42b883]/40' : 'bg-[#42b883]/20')}`">
                        <p class="text-sm text-left p-2">
                            <span>
                                <strong>Name:</strong> 
                                {{ user.name }}
                                </span>
                                <br>
                            <span class="font-normal">
                                <strong>Email:</strong>
                                 {{ user.email }}
                            </span>
                        </p>
                    </div>
                </router-link>
            </div>
        </div>
	</div>
</template>