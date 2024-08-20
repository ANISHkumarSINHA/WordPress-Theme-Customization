(function (blocks, element) {
    var el = element.createElement;

    blocks.registerBlockType('my-custom/block', {
        title: 'Custom Block',
        icon: 'universal-access-alt',
        category: 'layout',
        edit: function () {
            return el(
                'p',
                { className: 'my-custom-block' },
                'Hello, World! This is a custom Gutenberg block.'
            );
        },
        save: function () {
            return el(
                'p',
                { className: 'my-custom-block' },
                'Hello, World! This is a custom Gutenberg block.'
            );
        }
    });
})(
    window.wp.blocks,
    window.wp.element
);
