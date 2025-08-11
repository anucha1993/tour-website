// Service Worker for caching static assets
const CACHE_NAME = 'tour-website-v3';
const STATIC_CACHE = [
    '/',
    '/build/assets/app-DVsBem29.css',
    '/build/assets/app-BM70wakr.js',
    '/images/hero/bandner_สำรวจโลกกว้างกับเรา.webp'
];

// Install event
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(STATIC_CACHE))
            .then(() => self.skipWaiting())
    );
});

// Activate event
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => self.clients.claim())
    );
});

// Fetch event
self.addEventListener('fetch', event => {
    // Only cache GET requests
    if (event.request.method !== 'GET') return;
    
    // Skip caching for API calls
    if (event.request.url.includes('/api/')) return;
    
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                if (response) {
                    return response;
                }
                
                // For external resources, use network first strategy
                if (event.request.url.startsWith('https://')) {
                    return fetch(event.request).then(fetchResponse => {
                        // Only cache successful responses
                        if (fetchResponse.status === 200) {
                            const responseClone = fetchResponse.clone();
                            caches.open(CACHE_NAME).then(cache => {
                                cache.put(event.request, responseClone);
                            });
                        }
                        return fetchResponse;
                    }).catch(() => {
                        // Return offline fallback if needed
                        return new Response('Offline', { status: 503 });
                    });
                }
                
                // For local resources, use cache first strategy
                return fetch(event.request);
            })
    );
});
