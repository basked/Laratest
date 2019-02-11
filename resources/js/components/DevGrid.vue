<template>
    <dx-data-grid
            :data-source="dataSource"
            :columns="columns"
            :show-borders="true">
        <dx-group-panel :visible="true"/>
        <dx-search-panel
                :visible="true"
                :highlight-case-sensitive="true"
        />
        <dx-grouping :auto-expand-all="false"/>

    </dx-data-grid>


</template>
<script>

    import {DxDataGrid,  DxSearchPanel, DxGrouping, DxGroupPanel} from 'devextreme-vue/data-grid';
    import { customers } from './data_grid.js';

    export default {
        components: {
            DxDataGrid,
            DxSearchPanel,
            DxGrouping,
            DxGroupPanel
        },
        data() {
            return {
                dataSource: customers,
                columns: ['CompanyName', 'City', 'State', 'Phone', 'Fax']
            };
        }
    };
</script>
