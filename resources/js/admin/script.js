import "../bootstrap";

import "../../../public/admin/plugins/jquery/jquery.min.js";

import "../../../public/admin/plugins/jquery-ui/jquery-ui.min.js";

import "../../../public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js";

import "../../../public/admin/plugins/chart.js/Chart.min.js";

import "../../../public/admin/plugins/sparklines/sparkline.js";

import "../../../public/admin/plugins/jqvmap/jquery.vmap.min.js";

import "../../../public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js";

import "../../../public/admin/plugins/jquery-knob/jquery.knob.min.js";

import "../../../public/admin/plugins/moment/moment.min.js";

import "../../../public/admin/plugins/daterangepicker/daterangepicker.js";

import "../../../public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js";

import "../../../public/admin/plugins/summernote/summernote-bs4.min.js";

import "../../../public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js";

import "../../../public/admin/dist/js/adminlte.js";

import "../../../public/admin/dist/js/demo.js";

import "../../../public/admin/dist/js/pages/dashboard.js";

import "../../../public/assets/js/app.js";

import { createApp } from "vue";

import { createRouter, createWebHistory } from "vue-router";

import routes from "../routes";
const app = createApp({});

const router = createRouter({
    routes: routes,
    history: createWebHistory(),
});

app.use(router);

app.mount("#app");
