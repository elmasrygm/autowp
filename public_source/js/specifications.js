define(
    'specifications',
    ['jquery', 'bootstrap'],
    function($, Bootstrap) {
        
        var modal = 
            '<div class="modal fade">\
                <div class="modal-dialog">\
                    <form action="/account/send-personal-message" class="modal-content" method="post">\
                        <div class="modal-header">\
                            <a class="close">×</a>\
                            <h3 class="modal-title">Характеристика</h3>\
                        </div>\
                        <div class="modal-body">\
                        </div>\
                        <div class="modal-footer">\
                            <button class="btn btn-primary" data-loading-text="отправляется ..." data-complete-text="отправлено" data-send-text="отправить">отправить</button>\
                            <button class="btn btn-default cancel">отменить</button>\
                        </div>\
                    </form>\
                </div>\
            </div>';
            
            var $form = $modal.find('form');
        
        $('[data-specs]').each(function() {
            $(this).on('click', '[data-specs-attr]', function() {
                var $modal = $(modal);
            });
        });
    }
);