<template>
    LAYOUT

    <div :style="style">
        <!--{{ this.devices }}-->
        <device-view v-for="device in devices" :device="device"></device-view>
    </div>
</template>

<script>
import RoomView from "./RoomView";
export default {
    name: "RoomLayoutView.vue"
    components: {
        DeviceView
    },
    props: {
        width: {
            type: Number,
            default: 500
        },
        height: {
            type: Number,
            default: 500
        },
        devices: {}
    },
    computed: {
        style() {
            return {
                width: this.width + "px",
                height: this.height + "px",
                position: "relative",
                backgroundColor: "lightgray"
            };
        }
    }
}
</script>

<style scoped>

</style>
