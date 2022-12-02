<template>
    <div>
        <p>{{ data }}</p>
        <div>
            <a href="#">Yes</a>
            <a href="#">No</a>
        </div>
    </div>
    
</template>
<script>
export default {
    data(){
        return {
            data: "i'm a new component"
        }
    }
}
</script>
<style scoped>
    div{
        width: 100%;
        height: 200px;
        background-color: crimson;
    }
</style>