<template>
    <Header></Header>
    <Nuxt/>
    <Footer></Footer>
</template>

<script>
import Header from '/header'
import Footer from '/footer'
export default {
    components: {
        Header,
        Footer
    },
    mount(){
        this.$api.get('auth').then(function() {
            console.log('初期化Auth認証（仮）')
        })
    }
}
</script>
