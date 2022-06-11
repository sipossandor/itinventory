<template>
    Text1     : {{text1}}
    <br>
    Text2text : {{text2}}
    <br>
    Text2html : <span v-html="text2"></span>
    <hr>
    <input type="submit" v-bind:value="value">
    <input type="submit" :disabled="btnstatus" :value="value">
    <hr>
    <input v-bind="inputAttributes"/>
    <hr>
    <h1 v-if="seeme">Megyünk haza?</h1>
    <h2 :[attrname]="attrvalue">IGEN</h2>
</template>

<script>
export default {
    name: "TemplateBox.vue",
    data() {
        return {
            text1 : "kiskacsa fürdik.",
            text2 : 'fekete <span style="color:blue">tóban</span>',
            value : 'Trapista',
            btnstatus : true,
            inputAttributes : {
                type: "text",
                value: 12,
                class: "input input-error",
                name: "destination"
            },
            seeme : true,
            attrname: "id",
            attrvalue: "gohome"
        };
    }
}
</script>

<style scoped>

</style>
