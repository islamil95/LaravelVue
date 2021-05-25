<template>
    <div class="container">
        <div class="row">
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
        props:[
            'urldata'
        ],
        mounted() {
             this.update()
        },
        methods:{
            update:function (){
                console.log(this.urldata);
            }
        }
    }
</script>
