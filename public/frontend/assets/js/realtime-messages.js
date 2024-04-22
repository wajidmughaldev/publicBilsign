import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
});

window.Echo.channel('user.' + recipientId)
    .listen('.message.sent', (data) => {
        // Handle the received message
        console.log('Received message:', data.message);
        // Update the message list in the UI
    });
