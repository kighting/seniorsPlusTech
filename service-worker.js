//Make sure to open a new tab to test the edited service worker. An alternative is to check the "Update on reload" in the Application tab in Chrome Dev Tool

//Get the Web App Install Banners: https://developers.google.com/web/fundamentals/app-install-banners/

self.addEventListener('install', function(event) {
  console.log('[Service Worker] Installing Service Worker ...', event);
});

self.addEventListener('activate', function(event) {
  console.log('[Service Worker] Activating Service Worker ...', event);
  return self.clients.claim();
});

//Service worker is able to intercept all request and response
self.addEventListener('fetch', function(event) {
  console.log('[Service Worker] Fetching something ....', event);
  //Allow us to twist the data
  event.respondWith(fetch(event.request));
});