(function($R)
{
    $R.add('plugin', 'divider', {
        init: function(app)
        {
            this.toolbar = app.toolbar;
            this.opts = app.opts;
        },
        start: function() {
            var prev = false,
                idx = 1,
                toolbar = this.toolbar;
            this.opts.buttons.forEach(function(btn) {
                if (prev && btn === 'divider') {
                    var $button = toolbar.addButtonAfter(prev, 'divider' + idx, {
                        'title': '|'
                    });
                    $button.disable();
                    idx++;
                }
                prev = btn;
            });
        }
    });
})(Redactor);
