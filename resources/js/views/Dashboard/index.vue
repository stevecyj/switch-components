<template>
    <div>
        <h3 class="text-5xl bg-yellow-500">
            這是 Dashboard
        </h3>
        <router-link to="/dashboard/card">Card</router-link> | <router-link to="/dashboard/chart">Chart</router-link> |
        <router-link to="/dashboard/table">Table</router-link> |
        <hr />
        <router-view />
    </div>
</template>
