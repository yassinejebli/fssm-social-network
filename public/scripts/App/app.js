var app = angular.module('AdminModule', []);


app.factory('notificationFactory', function () {
    return {
        success: function (text) {
            toastr.success(text ? text : "Succès");
        },
        error: function (text, title) {
            if (!title)
                title = "Erreur"
            toastr.error(text, title);
        },
        warning: function (text, title) {
            if (!title)
                title = "Warning"
            toastr.warning(text, title);
        },
        info: function (text, title) {
            if (!title)
                title = "Info"
            toastr.info(text, title);
        }
    };
});

