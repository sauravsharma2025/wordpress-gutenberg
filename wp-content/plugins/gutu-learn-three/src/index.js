const { registerBlockType } = wp.blocks;
const { RichText } = wp.editor;
const { TextControl } = wp.components;

registerBlockType("gutu-learn-three/test-block", {
  title: "Basic Example",
  icon: "dismiss",
  category: "common",
  attributes: {
    content: {
      type: "array",
      source: "children",
      selector: "p",
    },
    apiData: {
      type: "string",
      default: "",
    },
  },
  edit: (props) => {
    console.log("SK@editProp", props);
    const { attributes, setAttributes } = props;
    const onChangeContent = (newContent) => {
      setAttributes({ content: newContent });
    };
    const fetchDataFromAPI = async () => {
      const response = await fetch(
        "https://dummy.restapiexample.com/api/v1/employees"
      );
      const data = await response.json();
      setAttributes({ apiData: JSON.stringify(data) });
    };
    return (
      <>
        <RichText
          tageName="p"
          onChange={onChangeContent}
          value={attributes.content}
        />
        <TextControl
          label="API Data"
          value={attributes.apiData}
          onChange={(value) => setAttributes({ apiData: value })}
        />
        <button onClick={fetchDataFromAPI}>Fetch API Data</button>
      </>
    );
  },
  save: (props) => {
    const { attributes } = props;
    const { apiData } = attributes;
    console.log("SK@savedMethod_props", props);
    return (
      <>
        <RichText.Content tagName="p" value={props.attributes.content} />
        <div className="api-data">{apiData}</div>
      </>
    );
  },
});
