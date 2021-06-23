<template>
    <div class="conainer">
            <input  @click="modalrec" name="generatepdf" class="form-control btn btn-outline-primary mx-2" type='button' value="Сгенерировать PDF">
        <div   class="modal fade  " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ошибка</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <ul v-if="errors.length">
                           <li v-for="error in errors">{{error}}</li>
                       </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pdfpersonedata",
        data:()=>({
             errors:[],
        }),
        methods:{
            modalrec(){
                $('#exampleModal').modal('toggle');
            }
        },
    }
</script>

<style scoped>

</style>
