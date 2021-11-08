var routes = [
  { path: '/', component: Beranda},
  { path: '/Produk', component: Produk},
  { path: '/Info', component: Info},
  { path: '/Transaksi', component: Transaksi},
  { path: '/Kontak', component: Kontak},
];
var router = new VueRouter({
  routes: routes,
  base: '/'
});

var app = new Vue({
  el : '#app',
  router,
});
