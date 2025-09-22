/**
 * This is the service worker file for the PWA configuration.
 */

// sw.js
self.addEventListener('install', () => {
    console.log('Service Worker installing.');
    // Add some initial caching or setup tasks if needed
});

self.addEventListener('activate', () => {
    console.log('Service Worker activating.');
    // Cleanup old caches or other tasks
});

self.addEventListener('fetch', (event) => {
    console.log('Service Worker fetching:', event.request.url);
    // Add caching strategy or fetch handling here
});
