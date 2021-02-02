<template>
    <div>
        <h3>
            這是 Dashboard
        </h3>
        <router-link to="/dashboard/card">Card</router-link> |
        <router-link to="/dashboard/chart">Chart</router-link> |
        <router-link to="/dashboard/table">Table</router-link> |
        <hr />
        <router-view />
    </div>
</template>
