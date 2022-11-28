import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import All  from "../views/All.vue";
import User from "../views/User.vue";
// import User from "../views/Add.vue";
const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/all",
    name: "All",
    component: All
  },
  {
    path: "/user/:id",
    name: "single user",
    component: User
  }
];

const router = createRouter({
  history: createWebHistory(), routes, 
})

export default router;
