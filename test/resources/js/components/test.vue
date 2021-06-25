<template>
    <div class="container border mt-3" id="TestBigBlock">
        <div class="row m-0 my-3 w-100">
            <div class="col-12 col-md-10 ">
                <h2><b>Тестирование</b></h2>
            </div>
            <div class="col-12 col-md-2 text-right">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                    Завершить
                </button>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <b>ФИО:</b><span id="fio"> Тестовый слушатель </span>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <b>Программа:</b><span id="ProgrammName"> Основы вожатской деятельности</span>
            </div>
        </div>
        <div class="row m-0 my-3 w-100 border-bottom pb-4">
            <div class="col-12 text-center"
                 style="font-size: 20;    align-items: center;  display: flex; justify-content: center;">
                <span class="mr-3">Время завершения теста: </span><b><span style="font-size: 30;" id="time">29:40</span></b>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm" id="PaginationNumberBlock">
                        <li   v-for="(n,qindex) in Questions" @click="NextPage(qindex)" :quid="n.id" class="PaginationQuestionsBlock  page-item" :class="{'active':qindex==Page}">
                            <a tabindex="1" class="PaginationQuestions page-link"  href="#">{{qindex}}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row m-0 my-3 w-100" id="RowBlockQuestions">

            <div v-for="(q,key) in Questions"  class="row w-100 m-0 BlockQuestionsBig"
                 :class="{'active':key==Page, 'd-none':key!=Page}" :quid="q.id" :pagequestion="key">
                <div class="row w-100 m-0 mt-3 mb-5 BlockQuestions">
                    <div class="col-12">{{q.Name}}</div>
                </div>
                <div class="row w-100 m-0 BlockAnswers">
                    <div v-for="a in Answers" v-if="a.questionid==q.id" class="row m-0 w-100 d-flex align-items-center my-2">
                        <template v-for="(t,index ) in AnswersType" v-if="index==a.typeanswers">
                            <div :class="t.LocClassdiv1">
<!--                                <span>{{ 1 > 0 || 2>0 && 3>0 ? 'Yes' : 'No' }}</span>-->
                                <input :typeanswers="a.typeanswers" :id="a.id" :name="q.Name" :type="t.ta"
                                       class="Answers w-100"
                                       onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45"
                                       :quid="q.id" style=" width: 62px; height: 33px;  cursor: pointer;">
                            </div>
                            <div :class="t.LocClassdiv2">
                                <label class="w-100" :for="a.id" style="cursor: pointer;">{{a.Name}}</label>
                            </div>
                        </template>
                    </div>
                </div>
            </div>


        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <button @click="NextPage" type="button" class="btn btn-primary px-5 py-2 SaveAnswersButton">
                    Ответить
                </button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "test",
        data: () => ({
            Questions: {
                [1]: {
                    Name: 'Первый вопрос',
                    id: 44,
                },
                [2]: {
                    Name: 'Второй вопрос',
                    id: 55,
                },
                [3]: {
                    Name: 'Третий вопрос',
                    id: 66,
                },
            },
            Answers: {
                [1]: {
                    Name: 'Первый ответ первому вопросу',
                    id: 222,
                    questionid: 44,
                    typeanswers: 1,
                },
                [2]: {
                    Name: 'Второй ответ первому вопросу',
                    id: 333,
                    questionid: 44,
                    typeanswers: 1,
                },
                [3]: {
                    Name: 'Первый ответ второму вопросу',
                    id: 4444,
                    questionid: 55,
                    typeanswers: 3,
                },
                [4]: {
                    Name: 'Первый ответ третьему вопросу',
                    id: 45554,
                    questionid: 66,
                    typeanswers: 2,
                },
                [5]: {
                    Name: 'Второй ответ третьему вопросу',
                    id: 666,
                    questionid: 66,
                    typeanswers: 2,
                },
            },
            AnswersType: {
                1: {
                    'LocClassdiv1':'col-1  text-center',
                    'LocClassdiv2':'col-11',
                    'ta':'radio',
                },
                2: {
                    'LocClassdiv1':'col-1  text-center',
                    'LocClassdiv2':'col-11',
                    'ta':'checkbox',
                },
                3: {
                    'LocClassdiv1':'col-12',
                    'LocClassdiv2':'d-none',
                    'ta':'text',
                },
            },
            Page:1,
        }),
        created() {
            this.getData();
        },
        methods:{
          NextPage(index){
              if(index>0){
                  this.Page=index;
              }else{
                  if(this.Page<Object.keys(this.Questions).length){
                      this.Page++;
                  }else{
                      this.Page=1;
                  }
              }
             console.log(this.Page);
          },
            getData(){
                axios
                    .get('/test/get')
                    .then(response => {
                        console.log(response);
                        this.Answers=response.data.Answers;
                        this.Questions=response.data.Questions;
                    }).catch(error => {
                    console.log(error);
                });
            },
        },
    }
</script>

<style scoped>

</style>
