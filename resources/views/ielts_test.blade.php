@extends('layouts.front.home')

@section('content')
    <!-- <div class="search-modal text-center modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="header-search-form">
                        <form>
                            <input placeholder="Search" /> <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="EnglishTest">
        <div class="container">
            <form action="">
                <div class="row">
                    <label for="name" class="col-3">Name </label>
                    <input type="text" class="form-control col-3" placeholder="Enter your name">
                    <label for="name" class="col-3">Email</label>
                    <input type="email" class="form-control col-3" placeholder="Enter your email">
                </div>
            </form>
            <h2 class="testHeader">English test</h2>
            <p>Choose the best answer to fill each blank. </p>
            <div class="testContainer">
                <form action="" class="testQuestions">
                    <ol class="row row-cols-2">
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Andreo: Hi, I’m Andreo! I’m on holiday here f.......... three
                                    weeks. How long are you staying here?</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q1" id="ans1_1">
                                    <label class="custom-control-label" for="ans1_1">from </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q1" id="ans1_2">
                                    <label class="custom-control-label" for="ans1_2">from </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q1" id="ans1_3">
                                    <label class="custom-control-label" for="ans1_3">fine </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q1" id="ans1_4">
                                    <label class="custom-control-label" for="ans1_4">full </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q1" id="ans1_5">
                                    <label class="custom-control-label" for="ans1_5">I don't know the answer
                                    </label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Greta: Only two weeks. I start work again next Monday. I'm a
                                    teacher a.......... I like my job a lot. What's your job?
                                </div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q2" id="ans2_1">
                                    <label class="custom-control-label" for="ans2_1">although</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q2" id="ans2_2">
                                    <label class="custom-control-label" for="ans2_2">an</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q2" id="ans2_3">
                                    <label class="custom-control-label" for="ans2_3">another</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q2" id="ans2_4">
                                    <label class="custom-control-label" for="ans2_4">and</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q2" id="ans2_5">
                                    <label class="custom-control-label" for="ans2_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Andreo: I'm a computer engineer. The work is hard and I get tired
                                    e.......... day. I'm enjoying this holiday a lot.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q3" id="ans3_1">
                                    <label class="custom-control-label" for="ans3_1">even </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q3" id="ans3_2">
                                    <label class="custom-control-label" for="ans3_2">eventually</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q3" id="ans3_3">
                                    <label class="custom-control-label" for="ans3_3">easy </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q3" id="ans3_4">
                                    <label class="custom-control-label" for="ans3_4">every</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q3" id="ans3_5">
                                    <label class="custom-control-label" for="ans3_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Greta: I like it here t.......... I like the sunshine; the sea is
                                    always warm. Do you like swimming?</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q4" id="ans4_1">
                                    <label class="custom-control-label" for="ans4_1">too</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q4" id="ans4_2">
                                    <label class="custom-control-label" for="ans4_2">though </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q4" id="ans4_3">
                                    <label class="custom-control-label" for="ans4_3">the</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q4" id="ans4_4">
                                    <label class="custom-control-label" for="ans4_4">then</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q4" id="ans4_5">
                                    <label class="custom-control-label" for="ans4_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Andreo: Yes, I love i..........</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q5" id="ans5_1">
                                    <label class="custom-control-label" for="ans5_1">in</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q5" id="ans5_2">
                                    <label class="custom-control-label" for="ans5_2">it</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q5" id="ans5_3">
                                    <label class="custom-control-label" for="ans5_3">its</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q5" id="ans5_4">
                                    <label class="custom-control-label" for="ans5_4">is</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q5" id="ans5_5">
                                    <label class="custom-control-label" for="ans5_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Greta: I also like lying o.......... the beach in the sun. We are
                                    both very sun-tanned aren't we?</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q6" id="ans6_1">
                                    <label class="custom-control-label" for="ans6_1">on</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q6" id="ans6_2">
                                    <label class="custom-control-label" for="ans6_2">ontop</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q6" id="ans6_3">
                                    <label class="custom-control-label" for="ans6_3">of</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q6" id="ans6_4">
                                    <label class="custom-control-label" for="ans6_4">over</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q6" id="ans6_5">
                                    <label class="custom-control-label" for="ans6_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Andreo: Yes we are. But the holiday is nearly over and we will
                                    soon b.......... back home.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q7" id="ans7_1">
                                    <label class="custom-control-label" for="ans7_1">but</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q7" id="ans7_2">
                                    <label class="custom-control-label" for="ans7_2">bet</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q7" id="ans7_3">
                                    <label class="custom-control-label" for="ans7_3">become</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q7" id="ans7_4">
                                    <label class="custom-control-label" for="ans7_4">be</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q7" id="ans7_5">
                                    <label class="custom-control-label" for="ans7_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Greta: It's so sad our holidays w.......... end.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q8" id="ans8_1">
                                    <label class="custom-control-label" for="ans8_1">was </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q8" id="ans8_2">
                                    <label class="custom-control-label" for="ans8_2">won't </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q8" id="ans8_3">
                                    <label class="custom-control-label" for="ans8_3">west </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q8" id="ans8_4">
                                    <label class="custom-control-label" for="ans8_4">will </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q8" id="ans8_5">
                                    <label class="custom-control-label" for="ans8_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Andreo: Don't talk about that! I feel too sad. It's beautiful
                                    here. But there is always summer n.......... year.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q9" id="ans9_1">
                                    <label class="custom-control-label" for="ans9_1">next</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q9" id="ans9_2">
                                    <label class="custom-control-label" for="ans9_2">null</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q9" id="ans9_3">
                                    <label class="custom-control-label" for="ans9_3">never</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q9" id="ans9_4">
                                    <label class="custom-control-label" for="ans9_4">not</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q9" id="ans9_5">
                                    <label class="custom-control-label" for="ans9_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Greta: Yes. See you l.......... Andreo. Bye!</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q10" id="ans10_1">
                                    <label class="custom-control-label" for="ans10_1">last </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q10" id="ans10_2">
                                    <label class="custom-control-label" for="ans10_2">lucky</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q10" id="ans10_3">
                                    <label class="custom-control-label" for="ans10_3">later</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q10" id="ans10_4">
                                    <label class="custom-control-label" for="ans10_4">longer</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q10" id="ans10_5">
                                    <label class="custom-control-label" for="ans10_5">I don't know the answer7</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The journey to London .......... Paris was not too long.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q11" id="ans11_1">
                                    <label class="custom-control-label" for="ans11_1">from </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q11" id="ans11_2">
                                    <label class="custom-control-label" for="ans11_2">since </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q11" id="ans11_3">
                                    <label class="custom-control-label" for="ans11_3">along</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q11" id="ans11_4">
                                    <label class="custom-control-label" for="ans11_4">between</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q11" id="ans11_5">
                                    <label class="custom-control-label" for="ans11_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">When we .......... we were met at the station by someone who took
                                    us to our hotel. The hotel is comfortable.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q12" id="ans12_1">
                                    <label class="custom-control-label" for="ans12_1">arrived</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q12" id="ans12_2">
                                    <label class="custom-control-label" for="ans12_2">came</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q12" id="ans12_3">
                                    <label class="custom-control-label" for="ans12_3">looked up</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q12" id="ans12_4">
                                    <label class="custom-control-label" for="ans12_4">left</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q12" id="ans12_5">
                                    <label class="custom-control-label" for="ans12_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">I share a room .......... my friend Maria.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q13" id="ans13_1">
                                    <label class="custom-control-label" for="ans13_1">on</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q13" id="ans13_2">
                                    <label class="custom-control-label" for="ans13_2">behind</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q13" id="ans13_3">
                                    <label class="custom-control-label" for="ans13_3">of</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q13" id="ans13_4">
                                    <label class="custom-control-label" for="ans13_4">with</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q13" id="ans13_5">
                                    <label class="custom-control-label" for="ans13_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">.......... Monday we went to our new school by bus, which took
                                    around 15 minutes. We had a test then we went to our new class.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q14" id="ans14_1">
                                    <label class="custom-control-label" for="ans14_1">On</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q14" id="ans14_2">
                                    <label class="custom-control-label" for="ans14_2">Before </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q14" id="ans14_3">
                                    <label class="custom-control-label" for="ans14_3">Beside</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q14" id="ans14_4">
                                    <label class="custom-control-label" for="ans14_4">Last </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q14" id="ans14_5">
                                    <label class="custom-control-label" for="ans14_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Our morning teacher is .......... Michael.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q15" id="ans15_1">
                                    <label class="custom-control-label" for="ans15_1">given </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q15" id="ans15_2">
                                    <label class="custom-control-label" for="ans15_2">nice </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q15" id="ans15_3">
                                    <label class="custom-control-label" for="ans15_3">kind </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q15" id="ans15_4">
                                    <label class="custom-control-label" for="ans15_4">called</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q15" id="ans15_5">
                                    <label class="custom-control-label" for="ans15_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Maria and I were in the .......... advanced class.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q16" id="ans16_1">
                                    <label class="custom-control-label" for="ans16_1">called </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q16" id="ans16_2">
                                    <label class="custom-control-label" for="ans16_2">open </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q16" id="ans16_3">
                                    <label class="custom-control-label" for="ans16_3">different </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q16" id="ans16_4">
                                    <label class="custom-control-label" for="ans16_4">same </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q16" id="ans16_5">
                                    <label class="custom-control-label" for="ans16_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">In .......... afternoon we went to have a look around London.
                                </div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q17" id="ans17_1">
                                    <label class="custom-control-label" for="ans17_1">and </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q17" id="ans17_2">
                                    <label class="custom-control-label" for="ans17_2">another</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q17" id="ans17_3">
                                    <label class="custom-control-label" for="ans17_3">the</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q17" id="ans17_4">
                                    <label class="custom-control-label" for="ans17_4">other </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q17" id="ans17_5">
                                    <label class="custom-control-label" for="ans17_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Maria and I went shopping in Oxford Street and we bought lots
                                    .......... new clothes.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q18" id="ans18_1">
                                    <label class="custom-control-label" for="ans18_1">of </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q18" id="ans18_2">
                                    <label class="custom-control-label" for="ans18_2">other </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q18" id="ans18_3">
                                    <label class="custom-control-label" for="ans18_3">nice </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q18" id="ans18_4">
                                    <label class="custom-control-label" for="ans18_4">pretty </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q18" id="ans18_5">
                                    <label class="custom-control-label" for="ans18_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Well, that's all for today. I really ......done a lot today.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q19" id="ans19_1">
                                    <label class="custom-control-label" for="ans19_1">might </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q19" id="ans19_2">
                                    <label class="custom-control-label" for="ans19_2">have </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q19" id="ans19_3">
                                    <label class="custom-control-label" for="ans19_3">seen</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q19" id="ans19_4">
                                    <label class="custom-control-label" for="ans19_4">visited </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q19" id="ans19_5">
                                    <label class="custom-control-label" for="ans19_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Where is Flora staying?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q20" id="ans20_1">
                                    <label class="custom-control-label" for="ans20_1">Flora is staying with a
                                        hotel.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q20" id="ans20_2">
                                    <label class="custom-control-label" for="ans20_2">Flora is staying by a hotel.
                                    </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q20" id="ans20_3">
                                    <label class="custom-control-label" for="ans20_3">Flora is staying at a hotel.
                                    </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q20" id="ans20_4">
                                    <label class="custom-control-label" for="ans20_4">Flora is staying on a hotel.
                                    </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q20" id="ans20_5">
                                    <label class="custom-control-label" for="ans20_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What happened on Monday morning?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q21" id="ans21_1">
                                    <label class="custom-control-label" for="ans21_1">On Monday morning a test was sat
                                        to all the new students.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q21" id="ans21_2">
                                    <label class="custom-control-label" for="ans21_2">On Monday morning a test was had
                                        to all the new students.
                                    </label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q21" id="ans21_3">
                                    <label class="custom-control-label" for="ans21_3">On Monday morning a test was done
                                        to all the new students.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q21" id="ans21_4">
                                    <label class="custom-control-label" for="ans21_4">On Monday morning a test was given
                                        to all the new students.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q21" id="ans21_5">
                                    <label class="custom-control-label" for="ans21_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What did Flora do in the afternoon?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q22" id="ans22_1">
                                    <label class="custom-control-label" for="ans22_1">In the afternoon Flora went on a
                                        shopping journey to London.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q22" id="ans22_2">
                                    <label class="custom-control-label" for="ans22_2">In the afternoon Flora went on a
                                        shopping visit to London.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q22" id="ans22_3">
                                    <label class="custom-control-label" for="ans22_3">In the afternoon Flora went on a
                                        shopping walk to London.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q22" id="ans22_4">
                                    <label class="custom-control-label" for="ans22_4">In the afternoon Flora went on a
                                        shopping trip to London.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q22" id="ans22_5">
                                    <label class="custom-control-label" for="ans22_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">We know .......... in the Stone Age people lived in San Andreas;
                                    the first written mention of the town was in 1230.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q23" id="ans23_1">
                                    <label class="custom-control-label" for="ans23_1">there</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q23" id="ans23_2">
                                    <label class="custom-control-label" for="ans23_2">before</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q23" id="ans23_3">
                                    <label class="custom-control-label" for="ans23_3">why</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q23" id="ans23_4">
                                    <label class="custom-control-label" for="ans23_4">that</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q23" id="ans23_5">
                                    <label class="custom-control-label" for="ans23_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">San Andreas had an important position in a valley and the city
                                    grew quickly .......... a centre of trade and commerce. By the 1500s it was well
                                    established.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q24" id="ans24_1">
                                    <label class="custom-control-label" for="ans24_1">for</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q24" id="ans24_2">
                                    <label class="custom-control-label" for="ans24_2">among</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q24" id="ans24_3">
                                    <label class="custom-control-label" for="ans24_3">by</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q24" id="ans24_4">
                                    <label class="custom-control-label" for="ans24_4">as</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q24" id="ans24_5">
                                    <label class="custom-control-label" for="ans24_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Around the same time the city became an important political centre
                                    as well. By 1657 a university was established in .......... city.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q25" id="ans25_1">
                                    <label class="custom-control-label" for="ans25_1">the</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q25" id="ans25_2">
                                    <label class="custom-control-label" for="ans25_2">centre</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q25" id="ans25_3">
                                    <label class="custom-control-label" for="ans25_3">a</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q25" id="ans25_4">
                                    <label class="custom-control-label" for="ans25_4">about</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q25" id="ans25_5">
                                    <label class="custom-control-label" for="ans25_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">A visitor today can still see the old buildings, proof of the rich
                                    history of the town. The city centre is protected .......... it is an urban heritage
                                    area.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q26" id="ans26_1">
                                    <label class="custom-control-label" for="ans26_1">because</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q26" id="ans26_2">
                                    <label class="custom-control-label" for="ans26_2">around</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q26" id="ans26_3">
                                    <label class="custom-control-label" for="ans26_3">although</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q26" id="ans26_4">
                                    <label class="custom-control-label" for="ans26_4">but</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q26" id="ans26_5">
                                    <label class="custom-control-label" for="ans26_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The beautiful historical houses in the main street have .........
                                    repaired and repainted.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q27" id="ans27_1">
                                    <label class="custom-control-label" for="ans27_1">got</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q27" id="ans27_2">
                                    <label class="custom-control-label" for="ans27_2">become</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q27" id="ans27_3">
                                    <label class="custom-control-label" for="ans27_3">seen</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q27" id="ans27_4">
                                    <label class="custom-control-label" for="ans27_4">been</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q27" id="ans27_5">
                                    <label class="custom-control-label" for="ans27_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The wide main street is also a pedestrian zone, so it is a
                                    wonderful place ......... walk.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q28" id="ans28_1">
                                    <label class="custom-control-label" for="ans28_1">seeing</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q28" id="ans28_2">
                                    <label class="custom-control-label" for="ans28_2">nice</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q28" id="ans28_3">
                                    <label class="custom-control-label" for="ans28_3">to</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q28" id="ans28_4">
                                    <label class="custom-control-label" for="ans28_4">for</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q28" id="ans28_5">
                                    <label class="custom-control-label" for="ans28_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">You can stop .......... a drink at the many street cafes, and in
                                    summer there are street concerts.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q29" id="ans29_1">
                                    <label class="custom-control-label" for="ans29_1">for</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q29" id="ans29_2">
                                    <label class="custom-control-label" for="ans29_2">to</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q29" id="ans29_3">
                                    <label class="custom-control-label" for="ans29_3">get</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q29" id="ans29_4">
                                    <label class="custom-control-label" for="ans29_4">at</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q29" id="ans29_5">
                                    <label class="custom-control-label" for="ans29_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Today, San Andreas has .......... population of around 250,000 and
                                    is an important road, railway and air hub.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q30" id="ans30_1">
                                    <label class="custom-control-label" for="ans30_1">to</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q30" id="ans30_2">
                                    <label class="custom-control-label" for="ans30_2">a</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q30" id="ans30_3">
                                    <label class="custom-control-label" for="ans30_3">large</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q30" id="ans30_4">
                                    <label class="custom-control-label" for="ans30_4">an</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q30" id="ans30_5">
                                    <label class="custom-control-label" for="ans30_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Which is the correct description of San Andreas?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q31" id="ans31_1">
                                    <label class="custom-control-label" for="ans31_1">San Andreas is a major
                                        town.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q31" id="ans31_2">
                                    <label class="custom-control-label" for="ans31_2">San Andreas is a minor
                                        town.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q31" id="ans31_3">
                                    <label class="custom-control-label" for="ans31_3">San Andreas is a capital
                                        city.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q31" id="ans31_4">
                                    <label class="custom-control-label" for="ans31_4">San Andreas is an average sized
                                        town.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q31" id="ans31_5">
                                    <label class="custom-control-label" for="ans31_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Where is San Andreas?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q32" id="ans32_1">
                                    <label class="custom-control-label" for="ans32_1">San Andreas is put in a
                                        valley.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q32" id="ans32_2">
                                    <label class="custom-control-label" for="ans32_2">San Andreas is situated in a
                                        valley.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q32" id="ans32_3">
                                    <label class="custom-control-label" for="ans32_3">San Andreas becomes in a
                                        valley.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q32" id="ans32_4">
                                    <label class="custom-control-label" for="ans32_4">San Andreas is laid in a
                                        valley.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q32" id="ans32_5">
                                    <label class="custom-control-label" for="ans32_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">When was the first mention of San Andreas?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q33" id="ans33_1">
                                    <label class="custom-control-label" for="ans33_1">It became first mentioned in
                                        records in 1230.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q33" id="ans33_2">
                                    <label class="custom-control-label" for="ans33_2">It was first mentioned in records
                                        in 1230.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q33" id="ans33_3">
                                    <label class="custom-control-label" for="ans33_3">It got first mentioned in records
                                        in 1230.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q33" id="ans33_4">
                                    <label class="custom-control-label" for="ans33_4">It had first mentioned in records
                                        in 1230.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q33" id="ans33_5">
                                    <label class="custom-control-label" for="ans33_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Did being in a valley help economic development?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q34" id="ans34_1">
                                    <label class="custom-control-label" for="ans34_1">Yes, San Andreas's position in a
                                        valley helped an economic development.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q34" id="ans34_2">
                                    <label class="custom-control-label" for="ans34_2">Yes, San Andreas's position in a
                                        valley helped few economic development.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q34" id="ans34_3">
                                    <label class="custom-control-label" for="ans34_3">Yes, San Andreas's position in a
                                        valley helped both economic development.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q34" id="ans34_4">
                                    <label class="custom-control-label" for="ans34_4">Yes, San Andreas's position in a
                                        valley helped its economic development.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q34" id="ans34_5">
                                    <label class="custom-control-label" for="ans34_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Did political and economic development coincide?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q35" id="ans35_1">
                                    <label class="custom-control-label" for="ans35_1">San Andreas developed politically
                                        at a different time as it did economically.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q35" id="ans35_2">
                                    <label class="custom-control-label" for="ans35_2">San Andreas developed politically
                                        at the same time as it did economically.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q35" id="ans35_3">
                                    <label class="custom-control-label" for="ans35_3">San Andreas developed politically
                                        at another time as it did economically.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q35" id="ans35_4">
                                    <label class="custom-control-label" for="ans35_4">San Andreas developed politically
                                        at one time as it did economically.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q35" id="ans35_5">
                                    <label class="custom-control-label" for="ans35_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What do San Andreas's buildings show?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q36" id="ans36_1">
                                    <label class="custom-control-label" for="ans36_1">The buildings show that San
                                        Andreas proved a rich history.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q36" id="ans36_2">
                                    <label class="custom-control-label" for="ans36_2">The buildings show that San
                                        Andreas changed a rich history.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q36" id="ans36_3">
                                    <label class="custom-control-label" for="ans36_3">The buildings show that San
                                        Andreas has had a rich history.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q36" id="ans36_4">
                                    <label class="custom-control-label" for="ans36_4">The buildings show that San
                                        Andreas has been a rich history.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q36" id="ans36_5">
                                    <label class="custom-control-label" for="ans36_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What can you say about the buildings in the city centre.</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q37" id="ans37_1">
                                    <label class="custom-control-label" for="ans37_1">The buildings in the city centre
                                        make up an urban heritage area.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q37" id="ans37_2">
                                    <label class="custom-control-label" for="ans37_2">The buildings in the city centre
                                        are up an urban heritage area.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q37" id="ans37_3">
                                    <label class="custom-control-label" for="ans37_3">The buildings in the city centre
                                        build an urban heritage area.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q37" id="ans37_4">
                                    <label class="custom-control-label" for="ans37_4">The buildings in the city centre
                                        did up an urban heritage area.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q37" id="ans37_5">
                                    <label class="custom-control-label" for="ans37_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The impetus for founding what was later to become the European
                                    Union was the desire to rebuild Europe after the second world war, so as to prevent
                                    war from breaking .......... again in Europe.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q38" id="ans38_1">
                                    <label class="custom-control-label" for="ans38_1">apart</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q38" id="ans38_2">
                                    <label class="custom-control-label" for="ans38_2">over</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q38" id="ans38_3">
                                    <label class="custom-control-label" for="ans38_3">out</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q38" id="ans38_4">
                                    <label class="custom-control-label" for="ans38_4">in</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q38" id="ans38_5">
                                    <label class="custom-control-label" for="ans38_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">As a first step, the Council of Europe was founded in 1949. It has
                                    few powers but does play a role .......... enforcing human rights through a court
                                    based in Strasbourg. The citizens of most European states can appeal to this court.
                                </div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q39" id="ans39_1">
                                    <label class="custom-control-label" for="ans39_1">of</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q39" id="ans39_2">
                                    <label class="custom-control-label" for="ans39_2">in</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q39" id="ans39_3">
                                    <label class="custom-control-label" for="ans39_3">to</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q39" id="ans39_4">
                                    <label class="custom-control-label" for="ans39_4">as</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q39" id="ans39_5">
                                    <label class="custom-control-label" for="ans39_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The European Economic Community grew .......... of the European
                                    Coal and Steel Community.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q40" id="ans40_1">
                                    <label class="custom-control-label" for="ans40_1">because</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q40" id="ans40_2">
                                    <label class="custom-control-label" for="ans40_2">out</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q40" id="ans40_3">
                                    <label class="custom-control-label" for="ans40_3">around</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q40" id="ans40_4">
                                    <label class="custom-control-label" for="ans40_4">despite</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q40" id="ans40_5">
                                    <label class="custom-control-label" for="ans40_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The European Coal and Steel community, ........ was successful,
                                    led to a proposal by Robert Schuman, the French foreign minister, to set up a fully
                                    integrated community structure for Europe.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q41" id="ans41_1">
                                    <label class="custom-control-label" for="ans41_1">it</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q41" id="ans41_2">
                                    <label class="custom-control-label" for="ans41_2">and</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q41" id="ans41_3">
                                    <label class="custom-control-label" for="ans41_3">but</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q41" id="ans41_4">
                                    <label class="custom-control-label" for="ans41_4">which</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q41" id="ans41_5">
                                    <label class="custom-control-label" for="ans41_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Several organisations were suggested for this integrated
                                    community, and some .......... into existence. The most significant was the creation
                                    in 1958 of the European Economic Community (the EEC).</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q42" id="ans42_1">
                                    <label class="custom-control-label" for="ans42_1">were</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q42" id="ans42_2">
                                    <label class="custom-control-label" for="ans42_2">born</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q42" id="ans42_3">
                                    <label class="custom-control-label" for="ans42_3">jumped</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q42" id="ans42_4">
                                    <label class="custom-control-label" for="ans42_4">came</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q42" id="ans42_5">
                                    <label class="custom-control-label" for="ans42_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">The growth of the European Economic Community resulted in the
                                    foundation in 1992 of the European Union, whose development consisted of two
                                    parallel processes; the first of .......... brought about a tighter bloc.</div>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q43" id="ans43_1">
                                    <label class="custom-control-label" for="ans43_1">which</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q43" id="ans43_2">
                                    <label class="custom-control-label" for="ans43_2">them</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q43" id="ans43_3">
                                    <label class="custom-control-label" for="ans43_3">of</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q43" id="ans43_4">
                                    <label class="custom-control-label" for="ans43_4">those</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q43" id="ans43_5">
                                    <label class="custom-control-label" for="ans43_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">Which is the correct sentence below?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q44" id="ans44_1">
                                    <label class="custom-control-label" for="ans44_1">The Council of Europe prevalied
                                        over the European Union.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q44" id="ans44_2">
                                    <label class="custom-control-label" for="ans44_2">The Council of Europe preceded the
                                        European Union.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q44" id="ans44_3">
                                    <label class="custom-control-label" for="ans44_3">The Council of Europe predicted
                                        the European Union.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q44" id="ans44_4">
                                    <label class="custom-control-label" for="ans44_4">The Council of Europe presupposed
                                        the European Union.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q44" id="ans44_5">
                                    <label class="custom-control-label" for="ans44_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What does the European Court in Strasbourg do?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q45" id="ans45_1">
                                    <label class="custom-control-label" for="ans45_1">The European Court in Strasbourg
                                        is decided with human rights.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q45" id="ans45_2">
                                    <label class="custom-control-label" for="ans45_2">The European Court in Strasbourg
                                        is based on human rights.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q45" id="ans45_3">
                                    <label class="custom-control-label" for="ans45_3">The European Court in Strasbourg
                                        is enforced with human rights.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q45" id="ans45_4">
                                    <label class="custom-control-label" for="ans45_4">The European Court in Strasbourg
                                        is concerned with human rights.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q45" id="ans45_5">
                                    <label class="custom-control-label" for="ans45_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What did the European Coal and Steel Community become?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q46" id="ans46_1">
                                    <label class="custom-control-label" for="ans46_1">The European Coal and Steel
                                        Community joined with the European Community.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q46" id="ans46_2">
                                    <label class="custom-control-label" for="ans46_2">The European Coal and Steel
                                        Community developed into the European Community.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q46" id="ans46_3">
                                    <label class="custom-control-label" for="ans46_3">The European Coal and Steel
                                        Community participated in the European Community.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q46" id="ans46_4">
                                    <label class="custom-control-label" for="ans46_4">The European Coal and Steel
                                        Community contracted into the European Community.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q46" id="ans46_5">
                                    <label class="custom-control-label" for="ans46_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What did Robert Schuman propose?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q47" id="ans47_1">
                                    <label class="custom-control-label" for="ans47_1">The French foreign minister,
                                        Robert Schuman, proposed that several institutions be established.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q47" id="ans47_2">
                                    <label class="custom-control-label" for="ans47_2">The French foreign minister,
                                        Robert Schuman, proposed that several institutions are established.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q47" id="ans47_3">
                                    <label class="custom-control-label" for="ans47_3">The French foreign minister,
                                        Robert Schuman, proposed that several institutions have established.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q47" id="ans47_4">
                                    <label class="custom-control-label" for="ans47_4">The French foreign minister,
                                        Robert Schuman, proposed that several institutions had established.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q47" id="ans47_5">
                                    <label class="custom-control-label" for="ans47_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <li class="col-6 questionContainer">
                            <ol>
                                <div class="question">What can you say about the European Constitution?</div>
                                <span>To help, re-read the questions above.</span>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q48" id="ans48_1">
                                    <label class="custom-control-label" for="ans48_1">The European Constitution is a
                                        question of contention.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q48" id="ans48_2">
                                    <label class="custom-control-label" for="ans48_2">The European Constitution is a
                                        debate of contention.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q48" id="ans48_3">
                                    <label class="custom-control-label" for="ans48_3">The European Constitution is a
                                        matter of contention.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q48" id="ans48_4">
                                    <label class="custom-control-label" for="ans48_4">The European Constitution is a
                                        discussion of contention.</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="q48" id="ans48_5">
                                    <label class="custom-control-label" for="ans48_5">I don't know the answer</label>
                                </li>
                            </ol>
                        </li>
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary" value="Submit answers">
                        </div>
                        <div class="col-6 results">
                            <img src="./assets/img/test_page/results.png" alt="results levels">
                        </div>
                    </ol>
                </form>
            </div>
        </div>
    </section>
    <section class="results">
    </section>
@endsection