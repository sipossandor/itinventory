<template>
    <br>
    <hr>
    Hello VueJS!
    <hr>
    <CounterButton :startv="11" :min="1" :max="13"></CounterButton>
    <br>
    <counter-button></counter-button>
    <hr>
    <hr>
    <TemplateBox></TemplateBox>
</template>

<script>
import CounterButton from "./components/CounterButton";
import TemplateBox from "./components/TemplateBox";

export default {
    name: "App",
    components: {
        CounterButton,
        TemplateBox
    }
}
</script>

<style scoped>

</style>
