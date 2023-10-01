const { registerBlockType } = wp.blocks;

registerBlockType('custom-blocks/hello-block', {
    title: 'Custom Hello Block',
    icon: 'smiley',
    category: 'common',
    attributes: {},
    edit: function() {
        return <div>Hello, Custom Block!</div>;
    },
    save: function() {
        return <div>Hello, Custom Block!</div>;
    },
});
