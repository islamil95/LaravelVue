<template>
    <div class="container mt-3">
         <span class="invalid-feedback" role="alert">
            <strong>scsc</strong>
          </span>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Фамилия</label>
                                <div class="col-md-6">
                                    <input  id="surname" type="text" class="form-control"    v-model.trim="form.surname"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>
                                <div class="col-md-6">
                                    <input  id="name"  type="text" class="form-control" v-model.trim="form.name"     >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="secondname" class="col-md-4 col-form-label text-md-right">Отчество</label>
                                <div class="col-md-6">
                                    <input  id="secondname"  type="text" class="form-control" v-model.trim="form.secondname"   >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" v-model.trim="form.email"  required  >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control  " name="password"  v-model.trim="form.password" required  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm"  class="col-md-4 col-form-label text-md-right">Повторите пароль</label>
                                <div class="col-md-6">
                                    <input id="password-confirm"   type="password" class="form-control" v-model.trim="form.old_password"  name="password_confirmation" required  >
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" @click="Filter" v-on:keydown.enter="Filter" class="btn btn-primary">Регистрация</button>
                                </div>
                            </div>

                            <div v-if="errors.length" class="alert-danger mt-3 rounded p-2">
                                <b>Пожалуйста исправьте указанные ошибки:</b>
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                            </div>
                            <div v-if="errorsServer.length" class="alert-danger mt-3 rounded p-2">
                                <b>Пожалуйста исправьте указанные ошибки:</b>

                                    <div v-for="error in errorsServer">
                                    <div v-for="errorLocal in error">{{ errorLocal }}</div>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: ()=> ({
                form:{
                    surname:"",
                    name:"",
                    secondname:"",
                    email:"",
                    password:"",
                    old_password:"",
                },
            errors: [],
            errorsServer: [],
            errorClass:'border-danger',
            errorStatus:false,
        }),
        methods:{
            Filter(){
                this.errors=[];
                this.errorsServer=[];
                if (!this.form.name) {
                    this.errors.push('Требуется указать имя');
                }
                if (!this.form.surname) {
                    this.errors.push('Требуется указать фамилию');
                }
                if (!this.form.secondname) {
                    this.errors.push('Требуется указать отчество');
                }
                if (!this.form.email) {
                    this.errors.push('Требуется указать E-mail');
                }
                if (!this.form.password) {
                    this.errors.push('Требуется указать пароль');
                }else{
                    if (this.form.password.length<5 || this.form.password.length>10) {
                        this.errors.push('Пароль недолжен быть короче 5 и больше 10 символов');
                    }
                }
                if (!this.form.old_password) {
                    this.errors.push('Требуется указать повторный пароль');
                }
                if (this.form.password!=this.form.old_password && this.form.password && this.form.old_password) {
                        this.errors.push('Пароли не совпадают');
                }

                this.MetFilter();
                // axios.post('/get-json',{Username:this.gop},  {
                //     headers: {
                //         "Content-type": "application/json"
                //     }
                // }).then(res => {
                //     console.log(res);
                // });
                // axios.get('/get-json',  {
                //     headers: {
                //         "Content-type": "application/json"
                //     },
                //     params:{
                //         UserName: this.gop ,
                //     },
                // }).then(res => {
                //     console.log(res);
                // });
            },
            MetFilter(){
              if(this.errors.length){
                  return this.errors;
              }else{
                  this.CreateRequest();
              }
            },
            CreateRequest(){
                axios.post('/register',{form:this.form}).then((response)=>{
                    console.log(response);
                    location.href='/home';
                }).catch((e) => {
                    console.log(e);
                    if(e.response.status==422){
                        // this.errors.push(e.response.data.errors);
                        this.errorsServer.push(e.response.data.errors);
                    }else{
                        console.log(e);
                        this.errors.push("Неизвестная ошибка. Обратитесь к администратору");
                    }
                });
            }
        }
    }
</script>
