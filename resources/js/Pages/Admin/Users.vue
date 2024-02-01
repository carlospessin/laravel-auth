<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({ users: Array });
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                    <div v-for="user in users" :key="user.id">
                        <Link :href="`/users/${user.id}`">
                            {{ user.name }}
                        </Link>
                        <div>{{ user.email }}</div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
