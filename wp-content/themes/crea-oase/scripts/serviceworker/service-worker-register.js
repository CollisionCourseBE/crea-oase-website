// service-worker-register.js

// Check if the browser supports service workers
if ('serviceWorker' in navigator) {
    // Wait for the window to load before registering the service worker
    window.addEventListener('load', async () => {
        try {
            // Register the service worker from the specified path
            const registration = await navigator.serviceWorker.register(`${siteData.site_url}/wp-content/themes/collisioncourse-2025/scripts/serviceworker/sw.js`);
            // Service worker registration successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        } catch (err) {
            // Service worker registration failed
            console.error('ServiceWorker registration failed: ', err);
        }
    });
}
