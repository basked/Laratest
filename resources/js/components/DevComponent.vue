<template>
    <dx-button :text='text'/>
</template>
<script>
    import DxButton from 'devextreme-vue/button';
    export default {
        name: 'HelloWorld',
        data() {
            return {
                text: 'Hello!'
            };
        },
        components: {
            DxButton
        }
    };
</script>