import Echo from "laravel-echo";

let echo = new Echo({
	broadcaster: 'socket.io',
	host: window.location.hostname + ':6001'
});

let mustache = new Writer();
let template = $('#template-post').html();
mustache.parse(template);

echo.channel('feed').listen('.post', (e) => $('#target').prepend(mustache.render(template, e)));