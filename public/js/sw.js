//NOT USED NOW - to be used when we want to have push web notifications

self.addEventListener('push', function(e) {
var options = {
    body: 'This notification was generated from a push!',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: '2'
    },
    actions: [
      {action: 'explore', title: 'Explore this new world'},
      {action: 'close', title: 'Close'},
    ]
  };
  e.waitUntil(
    self.registration.showNotification('Hello world!', options)
  );
});

self.addEventListener('notificationclose', function(e) {
  var notification = e.notification;
  var primaryKey = notification.data.primaryKey;

  console.log('Closed notification: ' + primaryKey);
});

self.addEventListener('notificationclick', function(e) {
  var notification = e.notification;
  var primaryKey = notification.data.primaryKey;
  var action = e.action;

  if (action === 'close') {
    notification.close();
  } else {
    clients.openWindow('http://www.example.com');
    notification.close();
  }      });
