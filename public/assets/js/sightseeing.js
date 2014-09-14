(function() {
    var pusher = new Pusher('a82226d6fb9309a8cfe8');

    var channel = pusher.subscribe('sightseeing.io');

    window.App = {};

    App.Notifier = function() {
        this.notify = function(title, message) {
            jQuery( document ).ready(function($) {
                $.growl.notice({ title: title, message: message });
            });
        }
    }

    channel.bind('userCheckedIn', function(data) {
        (new App.Notifier).notify("New visitor", "A new visitor just checked in at Torre dos Clérigos");
    });

})();