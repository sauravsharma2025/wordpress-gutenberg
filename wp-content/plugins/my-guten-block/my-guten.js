wp.blocks.registerBlockType("my-guten-block/simple-block", {
  title: wp.i18n.__("i am the title of the block"),
  description: wp.i18n.__("i am the title of the block"),
  icon: "universal-access-alt",
  category: "common",
  edit: function () {
    return wp.element.createElement(
      "p",
      { className: "custom-block" },
      "Hello World"
    );
  },
  save: function () {
    return wp.element.createElement(
      "p",
      { className: "custom-block" },
      "this is saved into database"
    );
  },
});
