(function( $ ) {
    var methods = {
        init : function()
        {
            var $this = $(this);
                data  = $this.data('collectionManager');
            
            if (!data) {
                $this.data('collectionManager', {
                    'count': $('.collection-item').length,
                    'prototype': $this.attr('data-prototype')
                });
            }
            $('.collection-add').bind('click', function(event) { methods.add(event, $this); return false; });
            $('.collection-remove').bind('click', function(event) { methods.remove(event, $this); return false; });
        },
        
        add : function(event, manager)
        {
            var $this     = $(this),
                data      = manager.data('collectionManager'),
                newWidget = data.prototype;

            newWidget = newWidget.replace(/__name__/g, data.count);
            data.count++;
            
            var newDiv = $('<div></div>').html(newWidget);
            $(event.target).before(newDiv);
            $('.collection-remove').bind('click', function(event) { methods.remove(event, manager); return false; });
            
            return $this;
        },
        
        remove : function(event, manager)
        {
            var $this     = $(this),
                data      = manager.data('collectionManager');
            
            $(event.target).parents('.collection-item').remove();
            data.count--;
            
            return $this;
        }
    };
    
    $.fn.collectionManager = function( method ) {
        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.collectionManager' );
        }    
    };
})( jQuery );

$(document).ready(function() {
    $('.collection-manager').collectionManager('init');
});