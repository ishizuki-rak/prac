<template>
    <div class="main">
        <div class="user-info">
            <User v-if="user" v-model="user" @click="route('/detail/' + user.id)">
        </div>
        <div class="local">
            <div class="circle-button">
                <div class="button-title">Go</div>
                <div class="button-content">challenge!!</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: {
                id: 1,
                name: 'name01', 
                pt: 1901, 
                gauge: 1, 
            }
        }
    },
    mount() {
        console.log('mount')
    },
    created() {
        this.$api.get('top').then(function(res) {
            console.log(res)

        })
    },
    methods: {
        route(url) {
            this.$router.push(url)
        },
        challenge() {
            if(locateFlg){
                
            }
        }
    }
}
</script>
<style scoped>
    .main {
        padding: 0;
        margin: 0;
        border: none;
        font-size: 16px;
        font-weight: 300;
        color:black;
        background: white;
        overflow: hidden;
        width: 100%;
        height: 100%;
    }
    .circle-button {
        text-align: center;
        margin: 0 auto;
        width: 70vw;
        height: 70vw;
        border: solid black 2px;
        box-shadow: 5px 5px 5px 5px;
        background: linear-gradient(pink, red);
    }
    .button-title {
        font-size: 1.6em;
        font-weight: bold;
    }
    .button-content {
        font-size: 1.2em;
        font-weight: bold;
    }
</style>
