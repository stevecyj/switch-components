<template>
    <div>
        <template>
            <div>
                this is App BasicLayout (App.vue)<br />
                <router-link to="/">Component1</router-link> |
                <router-link to="/component2">Component2</router-link> |
                <router-link to="/dashboard">Dashboard</router-link> |
                <router-link to="/events">Events</router-link> |
                <hr />
                <router-view />
            </div>
        </template>
    </div>
</template>
