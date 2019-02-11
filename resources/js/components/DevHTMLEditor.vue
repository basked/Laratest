<template>
    <dx-html-editor
            value-type="html">
        <dx-toolbar :items="items" />
        <p>
            <b>Lorem ipsum dolor sit amet</b>,
            <i>consectetur adipiscing elit</i>,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
    </dx-html-editor>
</template>
<script>
    import { DxHtmlEditor, DxToolbar } from "devextreme-vue/html-editor";

    export default {
        components: {
            DxHtmlEditor,
            DxToolbar
        },
        data() {
            return {
                items: [
                    "bold", "italic", "separator","undo","redo", {
                        formatName: "size",
                        formatValues: ["11px", "12px", "16px"]
                    }, "separator",

                    "alignLeft", "alignCenter", "alignRight"
                ]
            };
        }
    }
</script>