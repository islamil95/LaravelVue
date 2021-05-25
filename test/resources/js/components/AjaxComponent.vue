<template>
    <div class="container">
        <div class="row">
            <button class="btn btn-defoult text bm-1" @click="update" v-if="!is_refresh">Обновить - {{id}} ...</button>
            <span class="badge badge-primary mb-1" v-if="is_refresh">Обновление</span>
            <table class="table">
                <tr>
                    <th>
                        Имя
                    </th>

                    <th>
                        Фамилия
                    </th>
                </tr>
                <tr v-for="url in urldata">
                    <td>
                        {{url.title}}
                    </td>
                    <td>
                        {{url.url}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data:function () {
            return{
                urldata:[],
                is_refresh:false,
                id:0
            }
        },
        mounted() {
             this.update()
        },
        methods:{
            update:function (){
                 this.is_refresh=true;
                 axios.get('/get-json').then((response)=>{
                     console.log(response);
                     this.urldata=response.data;
                     this.is_refresh=false;
                     this.id++;
                 });
            }
        }
    }
</script>
