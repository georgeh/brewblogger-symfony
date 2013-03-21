(function ($) {
    "use strict";
    var methods = {
        init : function () {
            var $this = $(this);
            ($this).each(function (i, manager) {
                var $manager = $(manager),
                    data     = $manager.data('collectionManager');

                if (!data) {
                    $manager.data('collectionManager', {
                        'count': $manager.find('.collection-item').length,
                        'itemTemplate': $manager.attr('data-prototype')
                    });
                }
                $manager.find('.collection-add').on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    methods.add(event);
                });
                $manager.find('.collection-remove').on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    methods.remove(event);
                });
            });
        },

        add : function (event) {
            var $this     = $(this),
                $target   = $(event.target).closest('.collection-add').first(),
                $manager  = $target.closest('.collection-manager').first(),
                data      = $manager.data('collectionManager'),
                newWidget = data.itemTemplate.replace(/__name__/g, data.count),
                newDiv = $('<div></div>').html(newWidget);

            data.count += 1;

            $target.before(newDiv);
            $('.collection-remove').bind('click', function(event) { methods.remove(event, $manager); return false; });

            return $this;
        },

        remove : function (event) {
            var $this     = $(this),
                $target   = $(event.target),
                $manager  = $target.closest('.collection-manager').first(),
                data      = $manager.data('collectionManager');

            $target.parents('.collection-item').remove();
            data.count -= 1;

            return $this;
        }
    };

    $.fn.collectionManager = function (method) {
        var retVal;
        if (methods[method]) {
            retVal = methods[method].apply( this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            retVal = methods.init.apply(this, arguments);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.collectionManager');
        }
        return retVal;
    };
}(jQuery));

$(document).ready(function () {
    "use strict";
    $('.collection-manager').collectionManager();
});