<template>
    <div :style="style">
        {{ device.name }}
    </div>
</template>

<script>
export default {
    name: "RoomView.vue",
    props: {
        device: {}
    },
    computed : {
        style() {
            let color = "red";
            if (this.device.status === "ok"){
                color = "green";
            }else if(this.device.status === "need_repair"){
                color = "yellow";
            }
            return {
                position: "absolute",
                width: this.device.width + "px",
                height: this.device.height + "px",
                left: this.device.x + "px",
                top: this.device.y + "px",
                backgroundColor: color
            };
        }
    }
}
</script>

<style scoped>

</style>
