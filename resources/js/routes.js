import Dashboard from "./components/Dashboard.vue";
import ListUsers from "./pages/ListUsers.vue";

export default [
    {
        path: "/admin/dashboard",
        name: "admin.dashboard",
        component: Dashboard,
    },

    {
        path: "/admin/users",
        name: "admin.users",
        component: ListUsers,
    },
];
