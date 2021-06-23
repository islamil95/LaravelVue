<template>
    <div class="conainer">
        <form action="/pdf/generate/personedata" method="get">
            <input    name="generatepdf" class="form-control btn btn-outline-primary mx-2" type='submit' value="Сгенерировать PDF">
        </form>
    </div>
</template>

<script>
    export default {
        name: "pdfpersonedata",
        data:()=>({
             errors:[],
        }),
        methods:{
            pdfgeneration(){
                axios.get('/pdf/generate/personedata').then((response)=>{
                    console.log(response);
                    location.href='/home';
                }).catch((e) => {
                    console.log(e);
                    if(e.response.status==422){
                        // this.errors.push(e.response.data.errors);
                        this.errors.push(e.response.data.errors);
                    }else{
                        console.log(e);
                        this.errors.push("Неизвестная ошибка. Обратитесь к администратору");
                    }
                });
            },

        },
    }
</script>

<style scoped>

</style>
