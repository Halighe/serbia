// МАССИВ С ВОПРОСАМИ
const DATA=[
{
    question: 'Что для вас важнее:',
    answers:[
        {
            id:'0',
            value:'Общение с людьми (знакомыми или незнакомыми)',
            correct: true,
        },
        {
            id:'1',
            value:'Общение с природой',
            correct: false,
        },
        {
            id:'2',
            value:'Работа с техникой, в том числе, с компьютером или различными механизмами',
            correct: false,
        },
        {
            id:'3',
            value:'Еще не определился (определилась)',
            correct: false,
        },

    ]
},
{
    question: 'Какой школьный предмет вам больше нравится (нравился):',
    answers:[
        {
            id:'4',
            value:'Физика',
            correct: true,
        },
        {
            id:'5',
            value:'Информатика',
            correct: false,
        },
        {
            id:'6',
            value:'Физика и информатика',
            correct: false,
        },
        {
            id:'7',
            value:'Не нравятся ни физика, ни информатика',
            correct: false,
        },

    ]
},
{
    question: 'Что Вам больше нравится:',
    answers:[
        {
            id:'8',
            value:'Работать с техникой и механизмами ',
            correct: true,
        },
        {
            id:'9',
            value:'Писать программы ',
            correct: false,
        },
        {
            id:'10',
            value:'Мне нравятся оба варианта ответа (А и Б) ',
            correct: false,
        },
        {
            id:'11',
            value:'Еще не определился ',
            correct: false,
        },


    ]
},
{
    question: 'Чем вы хотели бы заниматься:',
    answers:[
        {
            id:'12',
            value:'Настраивать роботизированные комплексы, либо мехатронные системы',
            correct: true,
        },
        {
            id:'13',
            value:'Находить неисправности и устранять их в работе автоматизированных систем управления ',
            correct: false,
        },
        {
            id:'14',
            value:'Собирать автоматизированные системы управления станками, оборудованием  ',
            correct: false,
        },
        {
            id:'15',
            value:'Другой вариант ',
            correct: false,
        },


    ]
},
{
    question: 'Чем вы хотели бы заниматься:',
    answers:[
        {
            id:'16',
            value:'Дополнять реальное пространство виртуальными объектами',
            correct: true,
        },
        {
            id:'17',
            value:'Составлять алгоритмы и писать программы для управления робототехническими или мехатронными системами, роботами ',
            correct: false,
        },
        {
            id:'18',
            value:'Составлять программы для микроконтроллеров (маленьких компьютеров или микросхем, созданных для управления самыми разными запрограммированными устройствами) ',
            correct: false,
        },
        {
            id:'19',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Чем вы хотели бы заниматься:',
    answers:[
        {
            id:'20',
            value:'Авиационной робототехникой ',
            correct: true,
        },
        {
            id:'21',
            value:'Медицинской робототехникой (например, разрабатывать экзоскелеты, то есть робототехнические изделия, усиливающее мышечные (физические) способности человека и помогающие поднимать тяжести, либо самостоятельно передвигаться людям с ограниченными возможностями ) ',
            correct: false,
        },
        {
            id:'22',
            value:'Сервисной робототехникой (проектировать и создавать сервисных роботов) ',
            correct: false,
        },
        {
            id:'23',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'24',
            value:'Создавать робототехнические системы вооружения летательных аппаратов ',
            correct: true,
        },
        {
            id:'25',
            value:'Проектировать робототехнические системы для аэрокосмической отрасли экономики ',
            correct: false,
        },
        {
            id:'26',
            value:'Создавать алгоритмы управления для квадрокоптеров и самолетов ',
            correct: false,
        },
        {
            id:'27',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Чем вы хотели бы заниматься:',
    answers:[
        {
            id:'28',
            value:'Промышленной робототехникой ',
            correct: true,
        },
        {
            id:'29',
            value:'Мобильными роботами (например, проектировать, программировать или управлять беспилотными транспортными средствами, мобильными роботами ',
            correct: false,
        },
        {
            id:'30',
            value:'Робототехническими системами для судов и судовой отрасли экономики ',
            correct: false,
        },
        {
            id:'31',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'32',
            value:'Конструировать сложные системы с автоматизированным управлением ',
            correct: true,
        },
        {
            id:'33',
            value:'Конструировать промышленные мехатронные или робототехнические детали, узлы, системы или комплексы ',
            correct: false,
        },
        {
            id:'34',
            value:'Изготавливать роботов и робототехнические комплексы, системы ',
            correct: false,
        },
        {
            id:'35',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'36',
            value:'Проектировать отдельные блоки, узлы или устройства автоматизированного оборудования ',
            correct: true,
        },
        {
            id:'37',
            value:'Проектировать роботов и робототехнические конструкции или системы ',
            correct: false,
        },
        {
            id:'38',
            value:'Изучать и испытывать мехатронные и робототехнические системы',
            correct: false,
        },
        {
            id:'39',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'40',
            value:'Автоматизировать производственное оборудование ',
            correct: true,
        },
        {
            id:'41',
            value:'Автоматизировать процессы в системах промышленного интернета вещей (на работающих без присутствия человека производственных линиях)',
            correct: false,
        },
        {
            id:'42',
            value:'Обслуживать роботизированные, либо мехатронные системы ',
            correct: false,
        },
        {
            id:'43',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'44',
            value:'Изучать электронные устройства, приводы и управление ими в мехатронных и робототехнических системах ',
            correct: true,
        },
        {
            id:'45',
            value:'Автоматизировать и роботизировать производства',
            correct: false,
        },
        {
            id:'46',
            value:'Использовать мехатронные и робототехнические системы ',
            correct: false,
        },
        {
            id:'47',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'48',
            value:'Создавать или совершенствовать робототехнические комплексы (оборудование, в составе которого имеется промышленный робот) ',
            correct: true,
        },
        {
            id:'49',
            value:'Работать над созданием искусственного интеллекта для роботов и робототехнических систем',
            correct: false,
        },
        {
            id:'50',
            value:'Создавать цифровые двойники предприятий (например, для автомобиле- или авиастроения, машиностроительного производства)',
            correct: false,
        },
        {
            id:'51',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'52',
            value:'Писать программы для работы станков или промышленного оборудования ',
            correct: true,
        },
        {
            id:'53',
            value:'Создавать игры в виртуальной реальности ',
            correct: false,
        },
        {
            id:'54',
            value:'Создавать модели сложных технических систем ',
            correct: false,
        },
        {
            id:'55',
            value:'Другой вариант',
            correct: false,
        },


    ]
},
{
    question: 'Вы хотели бы:',
    answers:[
        {
            id:'56',
            value:'Использовать геоинформационные (технологии обработки географической информации) и AR/VR- технологии (технологии виртуальной и дополненной реальности)',
            correct: true,
        },
        {
            id:'57',
            value:'Создавать гибкие производственные системы для машиностроения ',
            correct: false,
        },
        {
            id:'58',
            value:'Автоматизировать и обслуживать оборудование на пищевых и перерабатывающих предприятиях',
            correct: false,
        },
        {
            id:'59',
            value:'Разрабатывать высокоавтоматизированные интеллектуальные производственные системы',
            correct: false,
        },


    ]
},
];

// АЙДИШНИКИ
let localResults ={};
const quiz = document.getElementById('quiz');
const questions =document.getElementById('questions');
const btnNext =document.getElementById('btn-next');
const btnRestart =document.getElementById('btn-restart');
const info =document.getElementById('info_text');
const lk =document.getElementById('lk');
const control = document.getElementById('controls');
const count = document.getElementById('count');
const xds = document.getElementById('xds');
const kekw = document.getElementById('kekw');
const toStart = document.getElementById('to_start');
const entry = document.getElementById('entry');
//  РЕНДЕР ВОПРОСОВ В ДОМ
const renderQuestions=(index)=>{
    renderInd(index+1);
    questions.dataset.currentStep = index;
    xds.style.display="none";
    kekw.style.display="none";
    btnNext.style.display="initial";
    info.style.display="initial";
    const renderAnswers =()=> DATA[index].answers
    .map((answer)=> `
    <li>
    <input type="radio" class="answer-input" name="${index}"id="${answer.id}" value =${answer.id}>
    <label for="${answer.id}"> ${answer.value}</label>
     </li>
    `
    )
    .join('');

questions.innerHTML = `
<div class="quiz-questions-item">
            <div class="quiz-questions-item__question">${DATA[index].question}</div>
            <ul class="quiz-questions-item__answers">
            ${renderAnswers()}
            </ul>
        </div>
`
};
const renderCount=()=>{
    kekw.disabled = true;
}
// ГЕНЕРАЦИЯ ВАРИАНТОВ ОБУЧЕНИЯ ПРИ ЗАВЕРШЕНИИ ТЕСТА
const renderWrong1=()=>{
    questions.innerHTML = `
    <div class="quiz-questions-item">
                <div class="quiz-questions-item__question">Тестирование завершено. Попробуйте самостоятельно или с помощью профконсультанта изучить содержание профессий социальной сферы и/или менеджмента и выбрать интересную для вас</div>
            </div>
    `;
    count.innerHTML =`Профтест`;
};
const renderWrong2=()=>{
    questions.innerHTML = `
    <div class="quiz-questions-item">
                <div class="quiz-questions-item__question">Тестирование завершено. Попробуйте самостоятельно или с помощью профконсультанта изучить профессии, посвященные наблюдению за природными явлениями, выращиванию, лечению, либо исследованию животных или растений, защите окружающей среды и выбрать интересную для вас</div>
            </div>
    `;
    count.innerHTML =`Профтест`;
};
const renderWrong3=()=>{
    questions.innerHTML = `
    <div class="quiz-questions-item">
                <div class="quiz-questions-item__question">Тестирование завершено. Попробуйте самостоятельно или с помощью профконсультанта изучить типы и классы профессий и выбрать интересный для вас</div>
            </div>
    `;
    count.innerHTML =`Профтест`;
};
const renderWrong5=()=>{
    questions.innerHTML = `
    <div class="quiz-questions-item">
                <div class="quiz-questions-item__question q-pad">Поздравляем, вы успешно прошли тестирование!</div>
                <div class="quiz-final">Ваши результаты доступны в личном кабинете.</div>
               <div class="quiz-final">Мы также отправили вам письмо с результатами на указанную почту.</div>

            </div>
    `;
    info.style.display='none';
    lk.style.display='flex';
    btnNext.style.display='none';
    control.classList.remove("quiz-controls");
    control.classList.add("flex-start");
    count.innerHTML =`Профтест`;
};

const renderInd=(currentStep)=>{
count.innerHTML =`Профтест : ${currentStep}/${DATA.length}`
}

// ЗАПОЛНЕНИЕ МАССИВА ОТВЕТАМИ
quiz.addEventListener('change',(event)=>{
 if(event.target.classList.contains('answer-input')){
    localResults[event.target.name] = event.target.value;
    btnNext.disabled = false;
    console.log(localResults);
    }
})

// ЛОГИКА ПЕРЕХОДА ПО ВОПРОСАМ
quiz.addEventListener('click',(event)=>{
    if(event.target.classList.contains('btn-next')){
        const nextQuestionIndex = Number(questions.dataset.currentStep)+1;
        // НАЧАЛО ВОПРОСА 1
        if(localResults[0]==='0'){
            renderWrong1();
            btnNext.style.display='none';
        }

        if(localResults[0]==='1'){
            renderWrong2();
            btnNext.style.display='none';
        }

        if(localResults[0]==='2'){
            if(DATA.length===nextQuestionIndex){

            }else{
                renderQuestions(nextQuestionIndex);
    
            }
            btnNext.disabled = true;
           }

           if(localResults[0]==='3'){
            renderWrong3();
            btnNext.style.display='none';
           }
        //  КОНЕЦ  ВОПРОС 1
        
        // НАЧАЛО ВОПРОСА 2
        if(localResults[1]==='4'){
           
            btnNext.disabled = true;
            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===2){
                renderQuestions(2);
            }
        }   
        if(localResults[1]==='5'){
           
            btnNext.disabled = true;
            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===2){
                renderQuestions(2);
            }
        }  if(localResults[1]==='6'){
           
            btnNext.disabled = true;
            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===2){
                renderQuestions(2);
            }
        }  
        if(localResults[1]==='7'){
           
            btnNext.disabled = true;
            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===2){
              renderWrong5();
            }
        } 
        // КОНЕЦ ВТОРОГО ВОПРОСА

        // НАЧАЛО ТРЕТЬЕГО ВОПРОСА
        if(localResults[2]==='8'){
            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===3){
                btnNext.disabled = true;
            renderQuestions(3);
            }
            
            }
            if(localResults[2]==='9'){
                if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===3){
                btnNext.disabled = false;
                renderQuestions(4);
                }
                
                }
                if(localResults[2]==='10'){
                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===3){
                    btnNext.disabled = true;
                    renderQuestions(5);
                    }
                    
                    }
                    if(localResults[2]==='11'){
                        if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===3){
                        btnNext.disabled = false;
                        renderQuestions(3);
                        }
                        
                        }
                        // КОНЕЦ ТРЕТЬЕГО ВОПРОСА

                        // ВОПРОС 4
               if(localResults[3]==='12'){
                   if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===4){
                    btnNext.style.display='none';
                  renderWrong5();
                   }
                   }  
                   if(localResults[3]==='13'){
                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===4){
                     btnNext.style.display='none';
                   renderWrong5();
                    }
                    }       
                    if(localResults[3]==='14'){
                        if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===4){
                         btnNext.style.display='none';
                       renderWrong5();
                        }
                        }   
                        if(localResults[3]==='15'){
                            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===4){
                             renderQuestions(4);
                            }
                            }   
                            // КОНЕЦ  4 ВОПРОСА


                            // ВОПРОС 5
                            if(localResults[4]==='16'){
                                if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===5){
                                 btnNext.style.display='none';
                                 renderWrong5();
                                }
                                } 
                             if(localResults[4]==='17'){
                                if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===5){
                              btnNext.style.display='none';
                              renderWrong5();
                                    }
                                    } 
                                    if(localResults[4]==='18'){
                                        if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===5){
                                         btnNext.style.display='none';
                                         renderWrong5();
                                        }
                                        } 
                                        if(localResults[4]==='19'){
                                            if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===5){
                                             renderQuestions(5);
                                            }
                                            }    
                                            // КОНЕЦ 5 ВОПРОСА
                                            
                                            // 6 ВОПРОС
                         if(localResults[5]==='20'){
                             if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===6){
                        
                                renderQuestions(6);
                             }
                              } 
                             if(localResults[5]==='21'){
                                  if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===6){
                                    btnNext.style.display='none';
                                    renderWrong5();
                                 }
                                  }
                                  if(localResults[5]==='22'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===6){
                                     btnNext.style.display='none';
                                     renderWrong5();
                                    }
                                }
                                    if(localResults[5]==='23'){
                                        if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===6){
                                            btnNext.disabled = true;
                                            renderQuestions(6);
                                        } 
                                      }       
                                // 6 ВОПРОС КОНЕЦ


                                // 7 ВОПРОС
                                if(localResults[6]==='24'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===7){
                                        btnNext.disabled = false;
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }   
                                  if(localResults[6]==='25'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===7){
                                        btnNext.disabled = false;
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }   
                                  if(localResults[6]==='26'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===7){
                                        btnNext.disabled = false;
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }   
                                  if(localResults[6]==='27'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===7){
                                        btnNext.disabled = true;
                                        renderQuestions(7);
                                    } 
                                  }  
                                //   КОНЕЦ 7 ВОПРОСА

                                // 8 ВОПРОС
                                if(localResults[7]==='28'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===8){
                                        renderQuestions(8);
                                    } 
                                  } 
                                  if(localResults[7]==='29'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===8){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }   
                                  if(localResults[7]==='30'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===8){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }   
                                  if(localResults[7]==='31'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===8){
                                        renderQuestions(8);
                                    } 
                                  }  
                                  
                                //  КОНЕЦ 8 ВОПРОСА

                                // 9 ВОПРОС
                                  if(localResults[8]==='32'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===9){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[8]==='33'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===9){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[8]==='34'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===9){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[8]==='35'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===9){
                                        renderQuestions(9);
                                    } 
                                  } 
                                //   КОНЕЦ 9 ВОПРОСА

                                // ВОПРОС 10
                                if(localResults[9]==='36'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===10){
                                  
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[9]==='37'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===10){
                                  
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[9]==='38'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===10){
                                      
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[9]==='39'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===10){
                                        renderQuestions(10);
                                    } 
                                  } 
                                //   КОНЕЦ 10 ВОПРОСА

                                // 11 ВОПРОС
                                if(localResults[10]==='40'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===11){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[10]==='41'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===11){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[10]==='42'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===11){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[10]==='43'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===11){
                                        renderQuestions(11);
                                    } 
                                  } 
                                //   КОНЕЦ 11 ВОПРОСА

                                // ВОПРОС 12
                                if(localResults[11]==='44'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===12){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[11]==='45'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===12){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[11]==='46'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===12){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[11]==='47'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===12){
                                        renderQuestions(12);
                                    } 
                                  } 
                                //   КОНЕЦ 12 ВОПРОСА

                                // ВОПРОС 13
                                if(localResults[12]==='48'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===13){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[12]==='49'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===13){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[12]==='50'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===13){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[12]==='51'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===13){
                                        renderQuestions(13);
                                    } 
                                  }
                                //   КОНЕЦ ВОПРОСА 13

                                // ВОПРОС 14
                                if(localResults[13]==='52'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[13]==='53'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[13]==='54'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[13]==='55'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderQuestions(14);
                                    } 
                                  }
                                //   КОНЕЦ ВОПРОСА 14

                                // ВОПРОС 15
                                  if(localResults[14]==='56'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[14]==='57'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[14]==='58'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  } 
                                  if(localResults[14]==='59'){
                                    if(event.target.classList.contains('btn-next') && Number(questions.dataset.currentStep)===14){
                                        renderWrong5();
                                        btnNext.style.display='none';
                                    } 
                                  }
                                //   КОНЕЦ ВОПРОСА 15

    }
});
quiz.addEventListener('click',(event)=>{
    if(event.target.classList.contains('lform')){
        kekw.disabled=false;
    }
    if(event.target.classList.contains('btn-start')){
        renderQuestions(0);
       }
   })
   entry.addEventListener('click',(event)=>{
    if(event.target.classList.contains('start_btn')){
        entry.style.display ='none';
        quiz.style.display ='block';
    }
   })
renderCount();
