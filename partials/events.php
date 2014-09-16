<?php
ob_start();
session_start(); ?>
<link rel="stylesheet" href="partials/css/demo-styles.css" />
<!--<script src="partials/js/modernizr-1.5.min.js"></script>-->
<script type="text/javascript" src="partials/js/aj.js"></script>
<div class="demo-wrapper">
    <!-- classnames for the pages should include: 1) type of page 2) page name-->

    <button class="register-button" onclick="showAccomodation()">
            ACCOMODATION
    </button>


    <div class="r-page category1">

        <button class="r-close-button">
            GO BACK
        </button>
<!-- __________________________________________________________________________________________________________________ -->

                <div class="wrap">
                    <div class="event-desc-container">
                        <div class="event-title">Lashkara (Feel The Fashion )</div>
                        <div class="event-text">
                            <div class="event-caption">
                                The time has come for you to step aside and choose the path untrodden , unleash the glamour in you, and show the world that conventions are not your cup of tea. And Zeitgeist gives you a golden opportunity to realise your ravishing dreams here at <strong style="color:rgb(250,100,50)">"Lashkara"</strong>. <br />
                               <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 16000!</strong>-->
                            </div>
                            <div class="event-description">
                                <br /><span class="event-subtitle">Rules :</span>
                                <ul>
                                    <li>Fashion Show Competition is open only to college students.</li>

                                    <li>The maximum number of models allowed per team is 26, exclusive of the designer and choreographer. Every team will be allowed 15 min to showcase all their models (empty stage to empty stage).</li>

                                    <li>Crossover teams can be formed between students of at most 2 colleges, all having valid college ID cards for the current year. No branding on clothes. Sponsors of colleges will be given announcements only.</li>

                                    <li>Team can take help of people outside the college such as designers, choreographers, make­up artists, but these professionals will not be considered to be a part of the team and will not be eligible for the Best Designer or Best Choreographer.</li>

                                    <li>Vulgarity of any kind would lead to disqualification from the event. Hence, if the team feels that any stunt or costume design can be deemed as vulgar, it is strongly advised to consult the organizers than performing it directly on stage. The decision of the organizers will be final in case of any disputes arising due to this.</li>

                                    <li>The decision of the Event Coordinator will be final and binding on all.</li>

                                    <li>Teams are suggested to inform the organizers of any kind of props they are planning to use. We might consider any special request of extra prop based on its feasibility and availability.</li>

                                    <li>The teams are required to bring in their own music in the form of wav format on CDs (teams are required to give 2 copies on 2 separate CDs) and hand over to the organizers at least 6 hours before the event commences. The organizers will be providing the audio equipment to play the music. Teams will be penalized for exceeding the given time limit.</li>

                                </ul>
                                <span class="event-subtitle">Round 1 : </span>
                                 <ul>   
                                    <li>Every Team is required to showcase a theme for max 5 minutes on the main Open Air Stage.</li>
                                    
                                    <li>Teams will be short­listed on the basis of Music, Theme, Choreography, and Apparel Design.</li> 
                                    
                                    <li>The number of teams to be short­listed will be 8.</li>
                                </ul>
                                 <span class="event-subtitle">Finals : </span>
                                <ul>   
                                    <li>Maximum time limit for this round is 15 min.</li> 
                                    <li>The same theme can be continued from the last round in case teams have prepared just one theme for the competition. </li>
                                    <li>Short­listed Teams have to show case their next theme/themes in this allotted time.</li>
                                </ul>
                                <!--<span class="event-subtitle">Registration :</span>
                                <ul>
                                   <li>Registration Fees : 1000/- per team</li>
                                </ul>--> 
                            </div>
                        </div>

                        <?php

        if (isset($_SESSION['email']) && !isset($_SESSION['lashkara']))
        { ?>
                        <button class="register-button" onclick="showLight('lashkara')">REGISTER</button>
                        <?php
        }
        else
        if (!isset($_SESSION['email']))
        { ?>
                        <button class="register-button">
                            <a href="#/register">REGISTER</a>
                        </button>
                        <?php
        }
        else
        if (isset($_SESSION['email']) && isset($_SESSION['lashkara']))
        { ?>
                        <div class="registered-div">
                            <p>REGISTERED</p>
                        </div>
                        <?php
        } ?>
                        <button class="event-register" onclick="showing(event)">SEE MORE</button>
                        <button class="event-close" onclick="closing(event)">CLOSE</button>
                    </div>
                    <div class="event-image">
                        <img src="images/events/z.jpg">
                    </div>
                </div>

<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Mr. and Ms. Zeitgeist</div>
                <div class="event-text">
                    <div class="event-caption">
                        Send your photographs along with your name, your college name and a writeup at <span style="color:rgb(250,100,50)">mrandmsz@zeitgeist.org.in</span> of not more than 100 words describing why you should be hailed as Mr/Ms Zeitgeist.
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> 
                    </div>
                    <div class="event-description">
                        <br />
                        <div class="event-subtitle">Online Selection :</div>
                        A total of <span style="color:rgb(250,100,50)">14 candidates (7 boys and 7 girls)</span> will be selected based on the likes on their photographs posted on zeitgeist's facebook page. Those who have been selected online will be exempted of the registration fee and will get direct entry to the final/semi-final round of the event, that is to be held during Zeitgeist 2014.
                        <br />
                        <br />
                        <div class="event-subtitle">Offline Selection :</div>
                        A candidate willing to participate in the competition can do so by registering himself/herself on-the-spot. The registration fee for the event is <span style="color:rgb(250,100,50)">Rs. 300/-</span>. After registration he/she will have to clear a set of rounds to reach the final/semi-final round to compete with those selected online. A maximum of <span style="color:rgb(250,100,50)">6 candidates (3 boys and 3 girls)</span> will be selected from the offline entry.
                        <br />
                        <br />If the number of boys and girls who turn up on the day of event are unequal, we'll have a semi-final round to <span style="color:rgb(250,100,50)">equal the number of girls and boys</span> qualifying for the next round. In such a case the number of qualifying participants will depend on the number of the boys/girls, whichever is smaller. For e.g. if 4 girls and 5 boys turn up at the event then a total of 8 participants (4 boys and 4 girls) will be shortlisted for the final rounds.
                        <br />
                        <ol>
                            <li>In case if the number of participants is 10 or less than 10 and are equal, these will automatically qualify for the final rounds.</li>
                            <li>In case if more than 10 participants turn up, then we'll have a semi-final round to select a total of 10 candidates (5 girls and 5 boys).</li>
                            <li>The finalists will then compete to win the title of Mr. and Miss Zeitgeist 2014.</li>
                            <li>The tentative dates for the semifinal and final rounds are <span style="color:rgb(250,100,50)">10th October</span> and <span style="color:rgb(250,100,50)">11th October</span> respectively.</li>
                        </ol>
                        <div class="event-subtitle">Offline Selection Round :</div>
                        The offline selection would consist a written test that would test your skills.
                        <br />
                        <br />
                        <div class="event-subtitle">Semi-Final Round(If held) :</div>
                        The participants will be judged by their fashion sense. Girls are supposed to bring their best cocktail dresses for judgement. Boys should bring their formals with blazers. The sequence of entry will be informed before the commencement of the event. Henceforth, candidates will be shortlisted for the final round.
                        <br />
                        <br />
                        <div class="event-subtitle">Final Round(On-Stage) :</div>
                        <ol>
                            <li>Best Attire:<span style="color:rgb(250,100,50)">*</span>Pairs would be formed among the short-listed participants to judge the body language, sense of dressing and personality.</li>
                            <li>Talent Round:Each participant will have to showcase his/her talent on stage. Each participant will be given a maximum of 2 minutes to display his/her talent.</li>
                            <li>Questionnaire:The last round : Each participant will be asked a question by the judges. He/she gets two minute to think and to answer.</li>
                        </ol>
                        <span class="event-subtitle">Result</span>:
                        <br />The result will be based on the total sum of points obtained in the all the three rounds .
                        <br />
                        <span style="color:rgb(250,100,50)">*</span>The criteria for the formation of pairs will be decided on the spot.
                        <br />
                        <br />
                        <div class="event-subtitle">Disclaimer :</div>
                        If you have any further queries related to this event, mail your queries at support@zeitgeist.org.in.
                    </div>
                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/mrandms.jpg">
            </div>
        </div>

<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Torque ( War Of Bands )</div>
                <div class="event-text">
                    <div class="event-caption">
                        An unprecedented platform where the top-notch bands from every part of the country compete for the ultimate glory. Be prepared to hold your hands high as they jam up their electrifying chords and rolls to numb your senses ... <span style="color:rgb(250,100,50);">BUT IN THE END NOTHING ELSE MATTERS ..</span>
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 23000!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <br />
                        <ul>
                            <li>Maximum band strength (on stage members) is seven (7).</li>
                            <li>Each band will be given 20 minutes to perform and 10 minutes sound check.</li>
                            <li>Language of lyrics is not a criterion.</li>
                            <li>Details of the prelims (if any) will be announced well in advance.</li>
                            <li>An elimination round may be held depending on the number of participants.</li>
                            <li>Drum kit will be provided to the participants.</li>
                        </ul>
                        <br /><br />
                        <span class="event-subtitle">Prizes :</span><br />
				        <ul>
					       <li>Winner : 15000/-</li>
					       <li>Runner-up : 8000/-</li>
				        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span><br />
				        <ul>
					       <li>Registration Fees: 1000/- per team</li>
				        </ul> 
                    </div>
                </div>
                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['torque']))
{ ?>
                <button class="register-button" onclick="showLight('torque')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['torque']))
{ ?>
                <div class="registered-div floater">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>

                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/torque.jpg">
            </div>
            <div>


            </div>
        </div>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Tarang ( Group Dance )</div>
                <div class="event-text">
                    <div class="event-caption">
                        <span style="color:rgb(250,100,50);"> We are only as strong as we are united , as weak as we are divided " - J.K. Rowling</span> 
                        <br />Zeitgeist brings you the manifestation of synchronization, coordination and spirit of unity in a spanking new avatar "TARANG" where colleges from across country come up with unique styles of dancing maintaining a perfect harmony between eastern and western dance forms...And we are pretty sure that this event will compel you to be on your toes and ride the Gala wave...

                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 18000!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <br />
                        <ul>
                            <li>Any number of teams from a college can participate.</li>

                            <li>Participation for Tarang is open to all students.</li>

                            <li>Group members per team should be between 8 and 15, including the member(s) involved in Backstage Activities.</li>

                            <li>Sequence should be in the range of 6 to 10 minutes.</li>

                            <li>Teams have to apply through their respective colleges.</li>

                            <li>Teams must bring 2 CDs containing their sound track. 1 CD to be submitted to Coordinator, at the time of registration.</li>

                            <li>No props will be provided.</li>

                            <li>Props are allowed but any team using any kind of prop which can be a possible threat on stage for the audience or the stage itself will not be allowed.</li>

                            <li>The dance floor area must be in the same condition after the performances as before.</li>

                            <li>Size of the stage will be 40ft*32ft.</li>

                            <li>Teams will be judged based on originality, choreography, execution and entertainment value.</li>

                            <li>Variety of dance positions, dance movements, and/or combinations as appropriate to the specific difficulty of dance movements and/or combinations from one dance position or alignment to Uniqueness or originality of dance movements and/or combinations from one dance position or continuity of dance movements and/or combinations to either interpret dance theme and music, or dance one alignment to another, to include presentation of dance position, to demonstrate dance control, coordinated appearance appropriate to Country/Western competition attire; posture, grooming.</li>

                            <li>Participants must report 2 hours prior to the start of the event.</li>

                            <li>An elimination round may be held depending on the number of participants.</li>

                            <li>In case of situations which have been not described in rules, decision of the judges will be final.</li>

                            <li>Non Compliance of any of the contest rules & regulation shall immediately disqualify the participants and use of costume as it complements the contestants and their dance routine.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span>
		 		        <ul>
        					<li>Winner : 12000/-</li>

        					<li>Runner-up : 6000/-</li>
				        </ul> 
                        <span class="event-subtitle">Registration :</span>
				        <ul>
					       <li>Registration Fees : 1000/- per team</li>
				        </ul> 
                    </div>
                </div>


                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['tarang']))
{ ?>
                <button  class="floater register-button" onclick="showLight('tarang')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button  class="floater register-button">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['tarang']))
{ ?>
                <div class="registered-div floater">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/tarang.jpg">
            </div>



        </div>


        <div id="fade" class="black_overlay"></div>
<!-- __________________________________________________________________________________________________________________ -->

<div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Smack That ( Freestyle )</div>
                <div class="event-text">
                    <div class="event-caption">
                        Do you have the confidence and talent to mesmerise the world by your moves? Well then, this is the place to showcase your skills and win it all.
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 4500!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Any number of teams from a college can participate.</li>

                            <li>Participation for Smack That is open to all students.</li>

                            <li>Maximum 6 dancers per team.</li>

                            <li>The duration of the performance should be between 5-10 minutes.</li>

                            <li>Negative marking for exceeding the TIME LIMIT.</li>

                            <li>Teams must bring 2 CDs containing their sound track. 1 CD to be submitted to Coordinator, at the time of registration.</li>

                            <li>The dance floor area must be in the same condition after the performances as before.</li>

                            <li>No props will be provided.</li>

                            <li>Size of the stage will be 35ft*20ft.</li>

                            <li>Teams may use props if they want, for which they should take prior permission from the Coordinator.(Negative marking if not informed before)</li>

                            <li>Participant should show the freestyle of Street Dance.</li>

                            <li>Power movements, acrobatics, etc. are admissible, but they should not dominate.</li>

                            <li>Remember the main thing: DANCE under MUSIC Hip-Hop!</li>

                            <li>Dancers are not restricted from performing any move but they must be aware that it is their own responsibility to ensure that they do not perform dangerous moves that could injure themselves or others. Coordinators have the right to bring in safety restrictions.</li>

                            <li>Teams will be judged based on originality, choreography, execution and entertainment value.</li>
                            <ul>
                                <li>Variety of dance positions, dance movements, and/or combinations as appropriate to the specific dance.</li>

                                <li>Difficulty of dance movements and/or combinations from one dance position or alignment to another.</li>

                                <li>Uniqueness or originality of dance movements and/or combinations from one dance position or alignment to another, to include presentation of dance position.</li>

                                <li>Continuity of dance movements and/or combinations to either interpret dance theme and music, or to demonstrate dance control.</li>

                                <li>Coordinated appearance appropriate to Country/Western competition attire; posture, grooming, and use of costume as it complements the contestants and their dance routine.</li>
                            </ul>
                            </li>
                            <li>Lighting of candles, matches or cigarettes on stage is not allowed and will result in disqualification.</li>

                            <li>In case of situations which have been not described in rules, decision taken by judges will be final.</li>

                            <li>Participants must report 2 hours prior to the start of the event.</li>

                            <li>An elimination round may be held depending on the number of participants.</li>

                            <li>Non Compliance of any of the contest rules & regulation shall immediately disqualify the participants.</li>





                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 3000/-</li>
                           <li>Runner-up : 1500/-</li>
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Registration Fees : 300/- per team</li>
                        </ul> 
                    </div>
                </div>

                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['smack2']))
{ ?>
                <button class="register-button" onclick="showLight2('smack')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['smack2']))
{ ?>
                <div class="registered-div">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/smackthat.jpg">
            </div>


        </div>
<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Junoon ( Solo Dance )</div>
                <div class="event-text">
                    <div class="event-caption">
                        <span style="color:rgb(250,100,50);">Some people learn to dance but others are born to"...</span>
                        <br />Talent doesn't remain hidden for long ..And if this talent drives your passion for dance , this is the chance for you to swagger your skills and mesmerise the world with your hellacious moves...
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 3000!</strong> 
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Participation for Junoon is open to all students.</li>

                            <li>Maximum 5 dancers per college.</li>

                            <li>The duration of the performance should be between 3-6 minutes.</li>

                            <li>Negative marking for exceeding the TIME LIMIT.</li>

                            <li>Participant must bring 2 CDs containing their sound track. 1 CD to be submitted to Coordinator, at the time of registration.</li>

                            <li>The dance floor area must be in the same condition after the performances as before.</li>

                            <li>No props will be provided.</li>

                            <li>Teams may use props if they want, for which they should take prior permission from the Coordinator. (Negative marking if not informed before)</li>

                            <li>Participant can perform any dance form/style.</li>

                            <li>Participants are not restricted from performing any move but they must be aware that it is their own responsibility to ensure that they do not perform dangerous moves that could injure themselves or others.</li>

                            <li>Coordinators have the right to bring in safety restrictions.</li>

                            <li>Participants will be judged based on originality, choreography, execution and entertainment value.</li>

                            <li>Variety of dance positions, dance movements, and/or combinations as appropriate to the specific. Difficulty of dance movements and/or combinations from one dance position or alignment to uniqueness or originality of dance movements and/or combinations from one dance position or dance one alignment to another, to include presentation of dance position continuity of dance movements and/or combinations to either interpret dance theme and music, or to demonstrate dance control.</li>

                            <li>Participants must report 2 hours prior to the start of the event.</li>

                            <li>An elimination round may be held depending on the number of participants.</li>

                            <li>Lighting of candles, matches or cigarettes on stage is not allowed and will result in disqualification.</li>

                            <li>In case of situations which have been not described in rules, decision taken by judges will be final.</li>

                            <li>Non Compliance of any of the contest rules & regulation shall immediately disqualify the participants.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span>
					   <ul>
						  <li>Winner : 2000/-</li>

		 				  <li>Runner-up : 1000/-</li>
                        </ul>
                            <span class="event-subtitle">Registration :</span>
                            <ul>
                                <li>Registration Fees : 150/-</li>
                            </ul>  
                    </div>
                </div>
                <?php

if ((!isset($_SESSION['email'])) || (isset($_SESSION['email']) && !isset($_SESSION['junoon1'])))
{ ?>
                <form method="post" <?php
	if ((!isset($_SESSION['email'])) || !isset($_SESSION['user_id']))
	{ ?>
                    action="#/register">
                    <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                </form>
                <?php
	}
	else
	{ ?>>
                <!--closing form tag-->
                <input type="hidden" id="participants" name="participants" value="1" />
                <input type="hidden" id="event_name" name="event_name" value="junoon" />
                <button type="submit" value="REGISTER" class="register-button junoon-button floater">REGISTER</button>
                <?php
	} ?>
                </form>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['junoon1']))
{ ?>
                <div class="registered-div floater">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/junoon.jpg">
            </div>
            <div>
                <!--<a style="color:white;text-decoration:none" href = "javascript:void(0)" onclick = "showLight1('junoon')">REGISTER</a>-->
            </div>
        </div>


        <script type="text/javascript">
            $('#error6').hide();
            $('#error7').hide();
            $('#error8').hide();


            function checkInput(event) {

            }

            function validateForm1() {
                $('#error6').hide();
                $('#error7').hide();
                $('#error8').hide();

                var checker = 0;
                var title5 = $("#name1").val();
                if (title5 == "" || title5 == null) {
                    $('#error6').show();
                    checker = checker + 1;
                } else {}


                var title6 = $("#name2").val();
                if (title6 == "" || title6 == null) {
                    $('#error7').show();
                    checker = checker + 1;
                } else {}
                var title7 = $("#contactno1").val();
                if (title7 == "" || title7 == null) {
                    $('#error8').show();
                    checker = checker + 1;
                } else {}
                if (checker > 0)
                    return false;
            }

            $('#error9').hide();
            $('#error10').hide();
            $('#error11').hide();

            function validateForm2() {
                $('#error9').hide();
                $('#error10').hide();
                $('#error11').hide();

                var checker = 0;
                var title5 = $("#name1d").val();
                if (title5 == "" || title5 == null) {
                    $('#error9').show();
                    checker = checker + 1;
                } else {}


                var title6 = $("#name2d").val();
                if (title6 == "" || title6 == null) {
                    $('#error10').show();
                    checker = checker + 1;
                } else {}
                var title7 = $("#contactno1d").val();
                if (title7 == "" || title7 == null) {
                    $('#error11').show();
                    checker = checker + 1;
                } else {}
                if (checker > 0)
                    return false;
            }
        </script>



        <script type="text/javascript">
            $("#single").hide();
            $("#duet").hide();

            $('input[type="radio"]').click(function() {
                if ($(this).attr("value") == "single") {
                    $("#duet").hide();
                    $("#single").show();
                }
                if ($(this).attr("value") == "duet") {
                    $("#single").hide();
                    $("#duet").show();
                }

            });
        </script>
<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Saaz ( Solo/Duet Singing)</div>
                <div class="event-text">
                    <div class="event-caption">
                        Sometimes, a single heavenly voice is enough to open the floodgates of emotions. This is a chance to solely win the hearts of all by making the crowd swoon by your unbelievably melodious voice.
                        <br />Solo : <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 3000!</strong>
                        <br />Duet : <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 4000!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Participation for Saaz is open to all students.</li>

                            <li>Songs should be in Hindi or English language only.</li>

                            <li>There is no restriction on number of students participating from any institution.</li>

                            <li>Participants will be penalized for exceeding the specified time limits on terms agreed by the judges.</li>

                            <li>Sound check on stage should not take more than 1 min.</li>

                            <li>The participants are allowed to bring only karaoke in MP3 format on CD's (participants are required to give 2 copies on 2 separate CD's). Please note musical instruments or bands of any kind will not be allowed.</li>

                            <li>Karaoke should not contain any human voice in it.</li>

                            <li>Competition comprises of two rounds:
                                <br />
                                <span class="event-subtitle" style="font-size:17px;">Preliminary Round:</span>

                                <ol>
                                    <li>
                                        Each participant is required to prepare 3 songs of different genres (namely rock, pop, folk etc.) and can be asked to sing other song in case judges face any uncertainty. Singing time for this round should not exceed 3 minutes. Participants are required to sing without any karaoke or any musical instrument in this round.
                                    </li>
                                    <li>Participants will be short-listed on the basis of their performance in this round for the final round.
                                    </li>
                                </ol>

                                <span class="event-subtitle" style="font-size:17px;">Final Round:</span>
                                <ol>
                                    <li>Maximum time limit for this round is 5 min. Participants are free to choose any song of their choice. Song can be different from 3 songs that they have prepared for the Preliminary Round. The participants are allowed to bring only karaoke, in MP3 format on CD's for this round.
                                    </li>
                                    <li>
                                        Please note no band would be allowed for this round. Karaoke should not contain any form of human voice in it.
                                    </li>
                                </ol>
                        </ul>

                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Solo : 150/-</li>
                           <li>Duet : 300/- per team</li>
                        </ul> 
                    </div>
                </div>
                <button class="register-button" onclick="showLight1('saaz')">REGISTER</button>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/saaz.jpg">
            </div>


        </div>
<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Nukkad Natak ( Street Play )</div>
                <div class="event-text">
                    <div class="event-caption">
                        What can be a better place than the streets to spread awareness among the 'junta' about social issues in a matter which is purely satirical and rhetorical. Streets, a place where 'Real Eyes, realize, real lies'.
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 16000!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Any number of teams from a college can participate.</li>

                            <li>Participation for Nukkad Natak is open to all students.</li>

                            <li>Each team shall consist of 12-20 members.</li>

                            <li>Each team will be given 15-25 minutes for its performance. The next 2 minutes will be penalised (negative marking). The play will be disqualified if it exceeds 27 minutes.</li>

                            <li>No technical support such as mic and musical systems will be provided.</li>

                            <li>Participants can use their own "dhol, chimta and dhapli" (no other instrument is permitted).</li>

                            <li>No prop except chunni and lathi is allowed.</li>

                            <li>Play will be done during day time in an open ground, where an area of around 40ft*40ft will be provided.</li>

                            <li>Only descent satire is allowed. Vulgarity and bitter insinuations will not be entertained.</li>

                            <li>All rules of street play are applicable.</li>

                            <li>In all cases, the decision of the judges and organizers will be irrefutable.</li>

                            <li>All the participating teams should report to the event co-ordinator atleast 2 hours before the start of the event.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 10000/-</li>
                           <li>Runner-up : 6000/-</li>
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Registration Fees : 1000/- per team</li>
                        </ul> 
                    </div>
                </div>

                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['nukkad']))
{ ?>
                <button class="register-button floater" onclick="showLight('nukkad')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button floater">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['nukkad']))
{ ?>
                <div class="registered-div floater">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/nukkad.jpg">
            </div>


        </div>
<!-- __________________________________________________________________________________________________________________ -->

         <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Yatharth ( Stage Play )</div>
                <div class="event-text">
                    <div class="event-caption">
                        "Life's a stage and we are mere actors in this play called life".
                        Yatharth will dazzle you, will break you into tears and as effortlessely
                        into laughter. It will bring with it the joy of live art and of living
                        life the old way, the Real Way.
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 12000!</strong>
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Plays should be no less than 10 minutes and no longer than 25 minutes. Plays not within time limit will have deductions on a point system as follows: 1 (one) point for every minute over or under the time limit.</li>
                            
                            <li>Please furnish the judge with a copy of the play.</li>
                            
                            <li>Each team must furnish their own props. Tact and taste should be used in selecting clothes, costumes, props, scenery, and etcetera.</li>

                            <li>Curtains should not be pulled closed once the play has begun. If the curtain is closed the play must be finished. Use lighting effects, a narrator, or some other method to achieve scene changes.</li>

                            <li>Team entering a play in the competition will furnish their own stagehands.</li>

                            <li>A waiting area in the corridor leading north from the stage entry area will be designated for each competing team to assemble at. When a play is finished they will have 5 minutes to vacate the stage. The next cast will then have 5 minutes to prepare the stage. For example: play ends at 9:40, stage cleared by 9:45 , next play starts at 9:50.</li>
                         
                            <li>Groups will be verbally critiqued by judges giving comments to group members and directors during the 5 minutes allowed for the next play's set­up (see above).</li>
       
                            <li>One first place, second place and third place winner will be selected. Numbers on critique sheets range from 5 as high (excellent) to 1 as low (weak, needs improvement).</li>

                            <li>Doors into the auditorium will be closed for the duration of each play so as not to cause distractions with entry and exit. Casts waiting to perform or who have performed are strongly encouraged to attend the other performances.</li>

                            <li>Team may enter more than one play as they wish. Individuals may be in no more than four total performances in the Drama .</li>

                            <li>If you will be using sound track, you have to provide one person who will be instructing to playthe sound track. You have to bring that sound track in pen­drive.</li>

                            <li>You will be provided mic .Chairs and tables can be provided if asked in advance.</li>

                            <li>Decision of judge/panel of judges will be final and will not be subject to change in any case.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 8000/-</li>
                           <li>Runner-up : 4000/-</li>
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Registration Fees : 800/- per team</li>
                        </ul> 
                    </div>
                </div>

                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['yatharth']))
{ ?>
                <button class="register-button" onclick="showLight('yatharth')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button" >
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['yatharth']))
{ ?>
                <div class="registered-div">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/yatharth.jpg">
            </div>


        </div>
<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Titan</div>
                <div class="event-text">
                    <div class="event-caption">
                        One-of-a-kind event where one can witness the ultimate showdown challenging the human strength and endurance to the limits unknown and Darwin's "survival of the fittest" will decide the one who earns the glory of being called the "Titan" - the strongest of all ....
                        <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 5000!</strong> 
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Events :</span>
                        <br />
                        <br />
                        <span class="event-subtitle" style="color:rgb(250,100,50);">(a) MEDLEY :</span>

                        <ul>
                            <li>Course length : 20 meters</li>

                            <li>Time limit : 75secs</li>

                            <li>Weights 56Kg log, 70Kg barrel, 80Kg barrel and 150Kg duck/farmer's walk</li>

                            <li>Athletes will load the log and the barrels on a table 20 meters from the starting point and perform duck/farmerÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s walk for the same distance, all within a time limit of 75 seconds. Athletes are not allowed to roll or drag the objects.</li>

                            <li>If completed, time will be noted, otherwise the number of objects carried successfully plus the distance of last object tried will be noted.</li>
                        </ul>

                        <span class="event-subtitle" style="color:rgb(250,100,50);">(b) Overhead Lift :</span>

                        <ul>
                            <li>Weights : 60, 70, 80, 90, 100, 110</li>

                            <li>Time limit : 75secs</li>

                            <li>Athletes will lift all the loaded barbells from the ground to overhead up till their arms are extended within a time limit of 75 seconds. Athletes can use any weightlifting style: clean & jerk, clean & press, snatch.</li>

                            <li>If completed, time will be noted, otherwise the heaviest weight lifted overhead will be noted.</li>

                        </ul>

                        <span class="event-subtitle" style="color:rgb(250,100,50);">(c) Yoke Walking ( Last Man Walking ) :</span>

                        <ul>
                            <li>Starting weight 200Kg</li>

                            <li>Increments multiple of 10Kg</li>

                            <li>Course length : 20 metres</li>

                            <li>Time limit 45 secs for each attempt</li>

                            <li>Athletes will attempt Yoke walk, with their selected weights, for a distance of 20 meters within time limit of 45 seconds. Athletes can increase the weights only by a multiple of 10Kg in their next attempt.</li>

                            <li>Weight and distance of the heaviest Yoke walk will be noted.</li>

                        </ul>

                        <span class="event-subtitle" style="color:rgb(250,100,50);">(d) Deadlift ( Last Man Standing ) :</span>

                        <ul>
                            <li>Starting weight : 150Kg</li>

                            <li>Increments multiple of 5Kg</li>

                            <li>Time limit : 60secs for each attempt</li>

                            <li>Athletes will attempt Deadlift with their selected weights. Athletes can increase the weights only by a multiple of 5Kg in their next attempt.</li>

                            <li>Heaviest successful Deadlift will be noted.</li>

                        </ul>

                        <span class="event-subtitle" style="color:rgb(250,100,50);">(e) Car Pull/Push :</span>

                        <ul>
                            <li>Course length : 40metres</li>

                            <li>Time limit : 60secs</li>

                            <li>Athletes will push/pull a car loaded with people for a distance of 40 meters within a time limit of 60 seconds.</li>

                            <li>Distance travelled by the car will be noted.</li>

                        </ul>


                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Entries are welcome 2 hours prior to the start of the competition.</li>

                            <li>Athletes will be given 30 minutes to get used to the equipment and get warmed up.</li>

                            <li>No lifting costumes will be allowed.</li>

                            <li>Gear allowed : lifting belt, knee, elbow and wrist wraps.</li>

                            <li>If the number of athletes registered are more than 5, then the first event, Medley, will act as a qualifying round, where top 5 athletes will compete in the later events.</li>

                            <li>Before each attempt, athlete will be asked : are you ready?, if the athlete is ready, he shall answer with : yes, after which he will wait for the referee's command : go! and whistle and the timer will start.</li>

                            <li>Decision of the referee will be final.</li>

                            <li>For each event athletes will be given points according to their finish. If 5 athletes are competing in an event, 1st gets 5 points, 2nd gets 4 points, 3rd gets 3 points and so on.</li>

                            <li>Athlete with maximum points in the ends will be Titan'14.</li>

                            <li>We expect brotherhood and healthy competition.</li>


                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 5000/-</li>
                           
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Registration Fees : 200/- </li>
                        </ul> 
                    </div>
                </div>
                <div>

                    <?php

if ((!isset($_SESSION['email'])) || (isset($_SESSION['email']) && !isset($_SESSION['titan'])))
{ ?>
                    <form method="post" <?php
    if (!isset($_SESSION['email']) || !isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>>
                    <input type="hidden" id="event_name" name="event_name" value="titan" />
                    <button type="submit" value="REGISTER" class="register-button titan-button floater">REGISTER</button>
                    </form>
                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div floater">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>
                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/titan.jpg">
            </div>

        </div>
<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Symphony</div>
                <div class="event-text">
                    <div class="event-caption">
                        Where melodious symphonies pluck the strings of your heart..If you think that music has an indispensable place in your life and its more than just songs then you have surely arrived at the right place and we give you this platform to showcase your tribute to music and reach a thousand hearts !! <br />
                        <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 1500!</strong> 
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Participation for Symphony is open to all students.</li>
                            
                            <li>Participants should bring their own instruments. Only mics and amplifiers will be provided by the organisers.</li>
                            
                            <li>Only 1 accompanist (not a vocalist) will be allowed. Accompanist should also bring his own instrument.</li>
                            
                            <li>Synthesizer (for accompanist) allowed in piano mode only.</li>
                            
                            <li>Solo synthesizer player can use any number of sounds.</li>
                            
                            <li>No pre-recorded sound tracks are allowed.</li>
                            
                            <li>4-6 minutes will be allotted for the performance. Negative marking for exceeding the TIME LIMIT.</li>
                            
                            <li>1 minute will be given for setting of the instrument, which will start as soon as the name of the participant is announced.</li>
                            
                            <li>Participants must report 2 hours prior to the start of the event.</li>
                            
                            <li>An elimination round may be held depending on the number of participants.</li>
                            
                            <li>The decision of the judges will be final.</li>
                            
                            <li>Judging criteria:  Rhythm, composition, innovation and overall impact.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 1500/-</li>
                           
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration :</span>
                        <ul>
                           <li>Registration Fees : 100/- </li>
                        </ul> 
                    </div>
                </div>
                <div>

                    <?php

if (!isset($_SESSION['symphony']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="symphony" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>

<!-- This non floater div is added just to enclose floater elements it in parent div. Feel free to replace it -->
<div class="wrap"></div>
    </div>




        <style>
            .hover {
                position: relative;
                z-index: 1;
            }
            .slide {
                top: 15em;
                z-index: -1;
                -webkit-transition: top 1s;
                -moz-transition: top 1s;
                background: rgba(0, 0, 0, 0.0);
                color: rgba(0, 0, 0, 0.0);
                display: none;
            }
            .hover1 {
                cursor: pointer;
                position: relative;
                z-index: 1;
            }
            .slide1 {
                top: 17em;
                z-index: -1;
                -webkit-transition: top 1s;
                -moz-transition: top 1s;
                background: rgba(0, 0, 0, 0.0);
                color: rgba(0, 0, 0, 0.0);
            }
        </style>

        <script>
            function showing(e) {
                e = e || window.event;
                e = e.target || e.srcElement;
                e = $(e).parent().parent();
                e.animate({
                    "width": "100%"
                }, 500, function() {
                    e.find('.event-close').show();
                    e.find('.register-button').show();
                    e.find('.registered-div').show();
                    e.find('.event-text').fadeIn(200);
                });
                e.find('.event-text').hide();
                e.find('.event-description').show();
                e.find('.event-register').hide();
                e.find('.registered-div').hide();
                e.find('.register-button').hide();
            }

            function closing(e) {
                e = e || window.event;
                e = e.target || e.srcElement;
                e = $(e).parent().parent();
                e.animate({
                    "width": "70%"
                }, 500, function() {
                    e.find('.event-register').show();
                    e.find('.register-button').show();
                    e.find('.registered-div').show();
                    e.find('.event-text').fadeIn(200);
                });
                e.find('.event-text').hide();
                e.find('.event-close').hide();
                e.find('.register-button').hide();
                e.find('.registered-div').hide();
                e.find('.event-description').hide();
            }
        </script>



    <div class="r-page category2">
        <button class="r-close-button">
            GO BACK
        </button>
<!-- __________________________________________________________________________________________________________________ -->

        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Conclave ( Open Debate )</div>
                <div class="event-text">
                    <div class="event-caption">
                        Just as pure energy emerge on the collision of atoms, a torrent of raging thoughts is generated when wits collide in this epic oral battle.

                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Any number of participants are allowed from a college.</li>

                            <li>Around 10 participants per batch (individual participant entries).</li>

                            <li>Flexible time limit.</li>

                            <li>Inappropriate (abusive) language will lead to disqualification.</li>

                            <li>In all cases, the decision of the judges will be irrefutable.</li>

                            <li>Following are the judging criteria:
                                <ul>
                                    <li>Content: Awareness and Knowledge of the topic.</li>

                                    <li>Language: Right use of words and no wrong words.</li>

                                    <li>Counter arguments: Valid interjections and satisfactory answers to the opponentÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s questions.</li>

                                    <li>Presentation style: Ways to present ideas, argument and thoughts with good examples.</li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <span class="event-subtitle">Prizes :</span>
				<ul>
					<li>Winner : 1000/-</li>

					<li>Runner-up : 500/-</li>
				</ul> -->
                        <!-- <span class="event-subtitle">Registration Fees :</span>
				<ul>
					<li>Registration Fees: 50 per Participant</li>
				</ul>	 -->

                    </div>
                </div>
                <div>



                    <?php

if (!isset($_SESSION['conclave']))
{ ?>
                    <form method="post" class="literary-form" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
	}
	else
	{ ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="conclave" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
	} ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>
<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Eureka</div>
                <div class="event-text">
                    <div class="event-caption">
                        "You don't have to be clever, just smart" An event which showcases a unique blend of patience, eagerness to press the buzzer, presence of mind and love for trivia.
                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Any number of teams is allowed to participate from one college.</li>

                            <li>Cross college teams are permitted.</li>

                            <li>This will be a team event. Each team will consist of 2 members.</li>

                            <li>This will comprise of 2 rounds, namely the preliminary round (written test) and the final round (on stage)
                                <br />
                                <span class="event-subtitle" style="font-size:17px;">Preliminary Round :</span>
                                <ul>
                                    <li>Duration: 1 Hour</li>

                                    <li>Test will be conducted in teams.</li>

                                    <li>20 MCQÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s</li>

                                    <li>30 Blanks</li>
                                </ul>
                                <span class="event-subtitle" style="font-size:17px;">Final Round :</span>
                                <ul>
                                    <li>This will consist of sub-rounds which will be based on general knowledge, history, entertainment, etc.</li>

                                    <li>Participants must report 2 hours prior to the start of the event.</li>

                                    <li>The decision of the organisers will be binding in all cases of dispute.</li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <span class="event-subtitle">Prizes :</span>
				<ul>
					<li>	Winner : 2000/-</li>

					<li>	1st Runner-up : 1200/-</li>

					<li>	2nd Runner-up : 800/- </li>
				</ul> -->
                        <!-- <span class="event-subtitle">Registration Fees :</span>
				<ul>
 				<li>Registration Fees: 200/- per team</li>
				</ul> -->
                    </div>
                </div>
                <div>
                    <?php

if (!isset($_SESSION['eureka']))
{ ?>
                    <form method="post" class="literary-form" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                    </form>
                    <?php
	}
	else
	{ ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="eureka" />
                    <button type="submit" value="REGISTER" class="floater reg-button">REGISTER</button>
                    </form>

                    <?php
	} ?>
                    <?php
}
else
{ ?>
                    <div class="floater registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>
                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>
        </div>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Blind Painting</div>
                <div class="event-text">
                    <div class="event-caption">
                        Eyes are considered the most vital sense organs as they enable us to admire the world around us in all its beautiful and vibrant colors. But the true talent lies in admiring and impersonating the very beauty in the absense of them.
                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Team consisting 2 members allowed.</li>

                            <li>A sheet with a pattern/figure will be given to each team. They have come up with an idea to further modify that figure/pattern.</li>

                            <li>Participants will be provided with requisite material.</li>

                            <li>After that one of the members will be blindfolded and other member has to guide.</li>

                            <li>Time for competition ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ maximum 15 minutes only.</li>

                            <li>Participants will be provided required materials.</li>
                        </ul>
                        <!-- <span class="event-subtitle">Registration Fees :</span>
					<ul>
						<li>Registration fees: 20/- per participant</li>
					</ul> -->
                    </div>
                </div>
                <div>
                    <?php

if (!isset($_SESSION['blind_painting']))
{ ?>
                    <form method="post" class="literary-form" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
	}
	else
	{ ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="blind_painting" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
	} ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/blindpainting.jpg">
            </div>

        </div>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Viruddh ( Hindi Debate )</div>
                <div class="event-text">
                    <div class="event-caption">
                        Any language particular to a country is its uniqueness and "Hindi" is a language which is unique to us.One can express oneself truly only in a language that one has heard since birth.
                        
                        This year again, Zeitgeist presents <strong style="color:rgb(250,100,50)">"Virudh"</strong>, the Hindi debate competition where opinions, ideas and wits behind the words will collide in the most fascinating and appealing way.
                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Any number of participants are allowed from a college.</li>

                            <li>Around 10 participants per batch (individual participant entries).</li>

                            <li>Flexible time limit.</li>

                            <li>Inappropriate (abusive) language will lead to disqualification.</li>

                            <li>In all cases, the decision of the judges will be irrefutable.</li>

                            <li></li>

                            <li>Following are the judging criteria:
                                <ul>
                                    <li>Content: Awareness and Knowledge of the topic.</li>

                                    <li>Language: Only Hindi Language is allowed. However, English words that are most common can be used.</li>

                                    <li>Counter arguments: Valid interjections and satisfactory answers to the opponentÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s questions.</li>

                                    <li>Presentation style: Ways to present ideas, argument and thoughts with good examples.</li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <span class="event-subtitle">Prizes :</span>
                <ul>
                    <li>Winner : 1000/-</li>

                    <li>Runner-up : 500/-</li>
                </ul> -->
                        <!-- <span class="event-subtitle">Registration Fees :</span>
                <ul>
                    <li>Registration Fees: 50 per Participant</li>
                </ul>    -->

                    </div>
                </div>
                <div>



                    <?php

if (!isset($_SESSION['viruddh']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="viruddh" />
                    <button type="submit" value="REGISTER" class="reg-button floater">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div floater">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>
<!-- __________________________________________________________________________________________________________________ -->

               <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Rangoli</div>
                <div class="event-text">
                    <div class="event-caption">
                        <strong style="color:rgb(250,100,50)">"Art is a collaboration between God and the artist"</strong> especially when it comes to making one of the purest form of folk arts i.e. "Rangoli".Rangoli is art of the common yet very unique. So this time at Zetigeist , be ready to witness the divine feeling of making <strong style="color:rgb(250,100,50)">"Rangoli"</strong><br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>If the entries exceed a particular figure, prelims will be held. Each team will be provided with A4 sheets, the teams have to present their design on the sheets.</li>

                            <li>Team consisting up to 3 members allowed. </li>

                            <li>Participant will be provided with colours.</li>

                            <li>The design should be done on 50*50 cm area.</li>

                            <li>Time for competition – maximum 3 hours only.</li>

                            <li>Participants should not use Internet or other resources.</li>
                        </ul>
                        <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 1500/-</li>
                           <li>Runner-up : 1000/-</li>
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration fees: 100/- per participant</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <?php

if (!isset($_SESSION['rangoli']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="rangoli" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Sketching</div>
                <div class="event-text">
                    <div class="event-caption">
                        If you have a knack of bringing out your imagination making use of just pencil, graphite or charcoal, this is your chance to showcase your strokes and prove the world that it is not the colors but sheer ingenuity that powers a masterpiece.<br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Only individual participation allowed.</li>

                            <li>Participants will be provided with sheets and other required stuffs.</li>

                            <li>Participants can bring their own stuff if they want.</li>

                            <li>Time for competition – maximum 3 hours only.</li>

                            <li>Participants can bring their model for sketching.</li>
                        </ul>
                       <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 1000/-</li>
                           <li>Runner-up : 500/-</li>
                        </ul> 
                        <br />
                </ul> -->
                        <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration Fees: 50 per Participant</li>
                          </ul> 

                    </div>
                </div>
                <div>



                    <?php

if (!isset($_SESSION['sketching']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="sketching" />
                    <button type="submit" value="REGISTER" class="reg-button floater">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div floater">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>

         <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Symposium</div>
                <div class="event-text">
                    <div class="event-caption">
                        Ideas flow, thoughts emerge and knowledge grows when the greatest minds grab seats around a table to discuss, dispute and dominate.
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Groups will be made randomly and on the spot.</li>

                            <li>The number of students allowed per group is 6-8.</li>

                            <li>Every group will be allotted 12 minutes for deliberation on their topic.</li>

                            <li>Topic for the 1st round will be uploaded 2 days prior to the event.</li>

                            <li>Topic will be given 5 minutes prior to the discussion for all the other rounds.</li>

                            <li>1 minute of conclusion time will be given to each student.</li>

                            <li>Proper decorum to be maintained at all times.</li>

                            <li>Participants to remain seated at all times. Use of improper language or display of vulgar action is strictly prohibited and may lead to disqualification.</li>

                            <li>Judges will have absolute authority and can intervene during any time of the discussion. Their decision is incontestable and final.</li>
                        </ul>
                        <strong style="color:rgb(250,100,50)">Round 1:</strong> In the first round, top 2-3 students will be selected from each group.
                        <br /><br />
                        <strong style="color:rgb(250,100,50)">Round 2:</strong> In the second round which will be made totally randomly from the selected students of 1st round top 1-2 students will be selected for final round.
                        <br /><br />
                        <strong style="color:rgb(250,100,50)">Final round:</strong> In the last round, winners of second will go for the final battle in final tiff of ideas.


                        
                        <!-- <span class="event-subtitle">Prizes :</span><br />
                        <ul>
                           <li>Winner : 1500/-</li>
                           <li>Runner-up : 1000/-</li>
                        </ul> 
                        <br />
                        <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration fees: 100/- per participant</li>
                        </ul> -->
                    </div>
                </div>
                <div>
                    <?php

if (!isset($_SESSION['Symposium']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="Symposium" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>

                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>

        </div>

        

        
   </div>



    <div class="r-page category3">

        <button class="r-close-button">
            GO BACK
        </button>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Time-Lining</div>
                <div class="event-text">
                    <div class="event-caption">
                        Your <span style="color:rgb(250,100,50)">Task</span> is to build a line follower robot, which is expected to traverse the whole track from "START" to "END" in least possible time i.e. complete the course as fast as possible.....the earlier "END" comes, the closer you will be to Victory.....
                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Introduction :</span>
                        <br />Mankind took a huge leap in science and technology when it invented robots. Robots are always fascinating to them and are constantly evolving. ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œTime-LiningÃƒÂ¢Ã¢â€šÂ¬Ã‚Â brings you an opportunity of a lifetime to use this opus invention and prove your worth by making and controlling it. A multitude of exciting events awaits you that not only fulfils your appetite for imagination and application but also is a source of ultra-gratification when you bring your imaginative transformers into the real world. You will have to make a robot that meets given specifications and make your way to victory. So gear up, show your intellect and start ROBOTING!
                        <br />
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Students of any recognized college are eligible to participate. All participants should have their college ID cards with them.</li>

                            <li>A team may consist of a maximum of 3 participants. These participants can be from same or different institutes.</li>
                        </ul>
                        <br /><span class="event-subtitle">Gameplay :</span>
                        <ul>
                            <li>Complete the course as fast as possible. If thereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s a tie between the fastest, a run-off will determine the winner. If nobody finishes the run, the farthest one to run on tracks will win.</li>

                            <li>There are a maximum of 3 tries for each robots. The fastest run of the 3 will count.</li>

                            <li>In each try, the participant can touch the bot maximum 5 times (with penalty for each touch)</li>
                        </ul>
                        <br />For Elaborated Rules and Arena, <a style="text-decoration:none" href="http://zeitgeist.org.in/partials/pdf/Time_Lining_Z14.pdf" target="_blank"> Download pdf!</a>
                        <br />
                        <br />
                        <span style="color:rgb(250,100,50)">
					For any further queries, drop an e-mail at support@zeitgeist.org.in</span>.
                        <!-- <span class="event-subtitle">Registration Fees :</span>
						<ul>
							<li>Registration fees: 20/- per participant</li>
						</ul> -->
                    </div>
                </div>

                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['timelining']))
{ ?>
                <button class="register-button" onclick="showLight3('timelining')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['timelining']))
{ ?>
                <div class="registered-div">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>        
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/timelining.jpg">
            </div>
        </div>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">DeKode</div>
                <div class="event-text">
                    <div class="event-caption">
                        If you are someone who loves solving murder mysteries, reading a detective novel or solving cryptograms then DeKode is an event for you. 
                        <br />
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Introduction :</span>
                        <br />DeKode, a cryptic puzzle based contest, is a platform to promote, showcase and reward your logical and lateral thinking abilities. Decrypting ciphers was an invaluable source of military intelligence throughout the World War II. The event draws analogy from this cryptic war, where deciphering countries' messages was a major focus area and played a vital role in deciding the outcome of the war.
                        <br />
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Only participants with valid Identity cards/Bonafide Certificates of their respective institutes are eligible to participate.</li>

                            <li>Students can participate in a team, where each team may consist of atmost 3 members.</li>

                            <li>The event will be conducted in 2 rounds. Round 1 will be an elimination round and only top 10 teams will be selected for Round 2.</li>

                            <li>The decision of the judges and the organizers shall be final and abiding.</li>
                        </ul>
                        <br />For detailed description and preparatory material click <a href="http://zeitgeist.org.in/partials/pdf/DeKode_Z14.pdf" target="_blank">here</a>
                        <br /><br />
                        <span style="color:rgb(250,100,50)">
					For any further queries, drop an e-mail at support@zeitgeist.org.in</span>.
                        <!-- <span class="event-subtitle">Prizes</span>
				<ul>
					<li>Goodies and Coupons</li>
				</ul> -->
                        <!-- <span class="event-subtitle">Registration Fees :</span>
				<ul>
					<li>Registration Fees: 20/- per participant</li>
				</ul> -->
                    </div>
                </div>
                <?php

if (isset($_SESSION['email']) && !isset($_SESSION['dekode']))
{ ?>
                <button class="register-button floater" onclick="showLight3('dekode')">REGISTER</button>
                <?php
}
else
if (!isset($_SESSION['email']))
{ ?>
                <button class="register-button floater">
                    <a href="#/register">REGISTER</a>
                </button>
                <?php
}
else
if (isset($_SESSION['email']) && isset($_SESSION['dekode']))
{ ?>
                <div class="registered-div floater">
                    <p>REGISTERED</p>
                </div>
                <?php
} ?>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/dekode.jpg">
            </div>

        </div>
<!-- 
        <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Robotryst</div>
                <div class="event-text">
                    <div class="event-caption">
                        
                        <br />
                    </div>
                    <div class="event-description">
                        <br /><span class="event-subtitle">Introduction :</span>
                        <br />Mankind took a huge leap in science and technology when it invented robots. Robots are always fascinating to them and are constantly evolving. ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œTime-LiningÃƒÂ¢Ã¢â€šÂ¬Ã‚Â brings you an opportunity of a lifetime to use this opus invention and prove your worth by making and controlling it. A multitude of exciting events awaits you that not only fulfils your appetite for imagination and application but also is a source of ultra-gratification when you bring your imaginative transformers into the real world. You will have to make a robot that meets given specifications and make your way to victory. So gear up, show your intellect and start ROBOTING!
                        <br />
                        <br /><span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>Students of any recognized college are eligible to participate. All participants should have their college ID cards with them.</li>

                            <li>A team may consist of a maximum of 3 participants. These participants can be from same or different institutes.</li>
                        </ul>
                        <br /><span class="event-subtitle">Gameplay :</span>
                        <ul>
                            <li>Complete the course as fast as possible. If thereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s a tie between the fastest, a run-off will determine the winner. If nobody finishes the run, the farthest one to run on tracks will win.</li>

                            <li>There are a maximum of 3 tries for each robots. The fastest run of the 3 will count.</li>

                            <li>In each try, the participant can touch the bot maximum 5 times (with penalty for each touch)</li>
                        </ul>
                        <br />For Elaborated Rules and Arena, <a style="text-decoration:none" href="http://zeitgeist.org.in/partials/pdf/Time_Lining_Z14.pdf" target="_blank"> Download pdf!</a>
                        <br />
                        <br />
                        <span style="color:rgb(250,100,50)">
                    For any further queries, drop an e-mail at support@zeitgeist.org.in</span>.
                        <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration fees: 20/- per participant</li>
                        </ul> 
                    </div>
                </div>
        
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>
        </div>-->

    </div> 



    <div class="r-page category4">

        <button class="r-close-button">
            GO BACK
        </button>

<!-- __________________________________________________________________________________________________________________ -->


        <div class="wrap">
                    <div class="event-desc-container">
                        <div class="event-title">AlgoXtreme</div>
                        <div class="event-text">
                            <div class="event-caption">
                                Wanna have some fun with programming ? If yes , then this is the place to be.
                                <br />This year , Zeitgeist is back to revive the geek in you with its ultra challenging coding contest  <span style="color:rgb(250,100,50)">"AlgoXtreme" ( Powered by HackerEarth )</span>. 
                                <br /><strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 6000 + 10 HackerEarth T-Shirts!</strong>
                            </div>
                            <div class="event-description">
                               <br />If you think, your programmer-self has the ability to rule the world of programming then it's nothing better than now. Register yourself for the event and you will know programming was never much fun than at Zetigeist.
                                <br /><br />The event will begin on 28th September at 9PM.<br /><br />

                                <a href="http://www.hackerearth.com/algoxtreme/" target="_blank">Go to Event Page</a>
                                <br /><br /><span class="event-subtitle">Rules :</span>
                                <ul>
                                    <li>To be eligible for prizes you have to register here. Only those candidates who have registered here will be eligible to avail the Prizes.
                                    
                                    <li>For the programming questions in the contest, you need to choose one language from the given list and attempt.</li>

                                    <li>You can submit solution for a programming problem as many times as you want as there is no time penalty on wrong submissions.</li>

                                    <li>There is partial score for solving a problem partially.</li>

                                    <li>All inputs for the programming problem are from STDIN and output to STDOUT.</li>

                                    <li>To understand more about the judge environment, time limits, etc. you can read the <a href="http://www.hackerearth.com/docs/judge/" target="_blank">FAQ</a> here.</li>

                                    <li>Programming questions have a 'Compile and Test' option where you can run your solution against sample test cases, before submitting.</li>
                                </ul>
                                <br />
                                

                                <span class="event-subtitle">Prizes :</span>
                                <ul>
                                    <li>First Prize Worth <span style="color:rgb(250,100,50)">Rs. 3000.</span></li>
                                    
                                    <li>Second Prize Worth <span style="color:rgb(250,100,50)">Rs. 2000.</span></li>
                                    
                                    <li>Third Prize Worth <span style="color:rgb(250,100,50)">Rs. 1000.</span></li>
                                    
                                    <li>Also<span style="color:rgb(250,100,50)"> HackerEarth T-Shirts</span> to top 10 participants.</li>
                                </ul>
                                
                                <br />For any further queries, drop an e-mail at support@zeitgeist.org.in
                                <!-- <span class="event-subtitle">Prizes</span>
                        <ul>
                            <li>Goodies and Coupons</li>
                        </ul> -->
                                <!-- <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration Fees: 20/- per participant</li>
                        </ul> -->
                            </div>
                        </div>

                                          <?php

if (!isset($_SESSION['algo']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="algo" />
                    <button type="submit" value="REGISTER" class="reg-button">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>
                        <button class="event-register" onclick="showing(event)">SEE MORE</button>
                        <button class="event-close" onclick="closing(event)">CLOSE</button>
                    </div>
                    <div class="event-image">
                        <img src="images/events/algo.jpg">
                    </div>

                </div>
<!-- __________________________________________________________________________________________________________________ -->
        

        <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Z-hunt</div>
                <div class="event-text">
                    <div class="event-caption">
                        <span style="color:rgb(250,100,50)">"You have missed the most important thing ,  I am "Captain" Jack Sparrow " <br /> "And yes, I am a pirate!!"</span> 
                        <br />Have you ever wondered what it feels to be a pirate .If yes, no worries then ,savy!! The time has come for you to unleash the pirate in you.
                        <!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
                    </div>
                    <div class="event-description">
                        <br />Zeitgeist welcomes you to Z-hunt where you can experience the same thrill and adventure without having moved an inch !! Z-hunt is an online treasure hunt where you will have to surf the sea of Google to get through the levels which will lead you to the ultimate treasure.
                        <br />
                        <br />It's a one of a kind event where what matters the most is your lust and Google is the only lifeline. So, Are you ready for this fascinating voyage into the world of pirates ??
                        <br />
                        <br />

                        <span style="color:rgb(250,100,50)">The Hunt will begin at 8 PM on September, the 29th .</span>
                        <br />
                        <br />
                        <a href="http://zhunt.zeitgeist.org.in" target="_blank">Go to Event Page</a>
                        <br />
                        <br />For any queries regarding the event , drop an email at support@zeitgeist.org.in

                        <!--<span style="color:rgb(250,100,50)">
					For any further queries, drop an e-mail at support@zeitgeist.org.in</span>.-->
                        <!-- <span class="event-subtitle">Prizes</span>
				<ul>
					<li>Goodies and Coupons</li>
				</ul> -->
                        <!-- <span class="event-subtitle">Registration Fees :</span>
				<ul>
					<li>Registration Fees: 20/- per participant</li>
				</ul> -->
                    </div>
                </div>
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/zhunt.jpg">
            </div>

        </div>
            
<!-- __________________________________________________________________________________________________________________ -->

            <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Zigmatics</div>
                <div class="event-text">
                    <div class="event-caption">
                        For the first time in forever, Zeitgeist presents 'Zigmatics', an online Math contest, which is going to puzzle you with a kind of math you cannot even imagine!
                        <br /><span style="color:rgb(250,100,50)">And Yes,Math turns Meth here!</span>
                    </div>
                    <div class="event-description">
                        Zigmatics is all set to blend your mind with its perplexingly knotty problems where you will need to emanate the mathematician inside you to get through them. It is a platform where you can have a one-to-one brain clash with the brilliant minds all over India.
                        <br />
                        <br />If you believe, you have the grey cells of a mathematician, then this event surely awaits you with a golden opportunity to nurture your talent and take it leaps and bounds ahead...
                        <br />
                        <span style="color:rgb(250,100,50)">.... and believe us Dr Ramanujan will be so proud !!!<br /><br /></span>

                        <span style="color:rgb(250,100,50)">The Math-a-Marathon will unfold at 8 PM on September, the 27th .</span>
                        <br />
                        <br />
                        <a href="http://zeitgeist.org.in/Zigmatics" target="_blank">Go to Event Page</a>
                        <br />
                        <br />For any queries regarding the event , drop an email at support@zeitgeist.org.in
                    </div>
                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/zigmatics.jpg">
            </div>
        </div>
<!-- __________________________________________________________________________________________________________________ -->


                <div class="wrap floater">
            <div class="event-desc-container floater">
                <div class="event-title">Code-o-mania</div>
                <div class="event-text">
                    <div class="event-caption">
                        Hackers, a grand feast awaits! Limit your moves on the mouth-watering starters as they are followed by some extremely juicy and cruchy algorithm problems. Happy hogging, hackers.
                        <br /><strong style="color:rgb(250,100,50)">- Powered by HackerRank</strong>
                         <br /><br /><strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 7500! </strong>
                    </div>
                   <div class="event-description">
                                The event will begin on 7th October at 9PM.<br /><br />

                                <a href="https://www.hackerrank.com/codeomania" target="_blank">Go to Event Page</a>
                                <br /><br /><span class="event-subtitle">Rules :</span>
                                <ul>
                                    <li>To be eligible for prizes you have to register here. Only those candidates who have registered here will be eligible to avail the Prizes.</li>
                                    
                                    <li>This is an individual event.</li>
                                    
                                    <li>Please refrain from discussing strategy during the contest.</li>
                                    
                                    <li>Any case of code plagiarism will result in disqualification of both the users from the contest. </li>
                                    
                                    <li>There is partial score for solving a problem partially.</li>
                                    
                                    <li>You can code directly on HackerRank's interface. HackerRank supports 20 major languages. You can have a look at the <a href="https://www.hackerrank.com/environment" target="_blank">environment</a> in which HackerRank run your code.</li>
                                </ul>
                                <br />
    

                                <span class="event-subtitle">Prizes :</span>
                                <ul>
                                    <li>First Prize Worth <span style="color:rgb(250,100,50)">Rs. 4000.</span></li>
                                    
                                    <li>Second Prize Worth <span style="color:rgb(250,100,50)">Rs. 2000.</span></li>
                                    
                                    <li>Third Prize Worth <span style="color:rgb(250,100,50)">Rs. 1500.</span></li>
                                    
                                    <li>Also<span style="color:rgb(250,100,50)"> HackerRank T-Shirts</span> to top 3 participants.</li>
                                </ul>
                                
                                <br />For any further queries, drop an e-mail at support@zeitgeist.org.in
                                <!-- <span class="event-subtitle">Prizes</span>
                        <ul>
                            <li>Goodies and Coupons</li>
                        </ul> -->
                                <!-- <span class="event-subtitle">Registration Fees :</span>
                        <ul>
                            <li>Registration Fees: 20/- per participant</li>
                        </ul> -->
                            </div>
                </div>
                                         <?php

if (!isset($_SESSION['codomania']))
{ ?>
                    <form method="post" class="literary-form" <?php
    if (!isset($_SESSION['user_id']))
    { ?>
                        action="#/register">
                        <button type="submit" value="REGISTER" class="register-button floater">REGISTER</button>
                    </form>
                    <?php
    }
    else
    { ?>id="singleone">
                    <input type="hidden" id="event_name" name="event_name" value="codomania" />
                    <button type="submit" value="REGISTER" class="reg-button floater">REGISTER</button>
                    </form>

                    <?php
    } ?>
                    <?php
}
else
{ ?>
                    <div class="registered-div floater">
                        <p>REGISTERED</p>
                    </div>
                    <?php
} ?>                
                <button class="event-register floater" onclick="showing(event)">SEE MORE</button>
                <button class="event-close floater" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/codeomania.jpg">
            </div>

        </div>

        <!-- __________________________________________________________________________________________________________________ -->

         <div class="wrap">
            <div class="event-desc-container">
                <div class="event-title">Click Freaks</div>
                <div class="event-text">
                    <div class="event-caption">
                        <span style="color:rgb(250,100,50)">"In photography there is a reality so subtle that it becomes more real than reality."</span>
                        <br />
                        Zeitgeist presents <span style="color:rgb(250,100,50)">"Click Freaks"</span> for all the photography lovers to showcase their snapping skills and win exciting prizes. Let the zenith of your imagination meet reality through the eyes of your camera.
                        <br />
                    </div>
                    <div class="event-description">
                        <span class="event-subtitle">Guidelines :</span>
                        <ul>
                            <li>Themes for the event:
                            <ul>
                                <li>Street photography</li>

                                <li>Nature</li>
                            </ul></li>
                            <li>It is a single round Online Event.</li>

                            <li>Participants have to visit <a href="http://www.rechargery.com/zeitgeist/clickfreaks" target="_blank">www.rechargery.com/zeitgeist/clickfreaks</a> to upload their entries and details.</li>

                            <li>The photograph should be accompanied by a suitable Caption.</li>

                            <li>A participant is allowed a maximum of 2 entries (1 entry per theme).</li>

                            <li>If any problem occurs participants can mail their photographs via Email with SUBJECT clearly mention - "Caption_College name_Participant name_Event name"</li>

                            <li>Entries should be mailed to "hello@rechargery.com" (with a caption, college name, participant name and event name in subject line) before Mid-night on 9th Oct, 2014.</li>
                        </ul>
                        <span class="event-subtitle">Rules :</span>
                        <ul>
                            <li>This event is open to all colleges with a limit of 1 entry per theme.</li>

                            <li>The picture should be saved as " Participant's College_Participant's Name.jpeg ".</li>

                            <li>The entries are to be accompanied with a caption not longer than 20 words.</li>

                            <li>Copyright : The copyright in all images submitted to the Competition will remain with the owner who will be credited. Each entrant grants to the Organizers a license to use their images in relation to the Competition and the Exhibition, if required.</li>

                            <li>There must not be any watermarks, copyright marks or any text/graphic on the picture.</li>

                            <li>Please limit your adjustment to minor changes of cropping, sharpening and contrast. Avoid significant over or under color saturation. Dodging (to brighten shadows) or burning (to darken highlights) is allowed, but the alterations should enable the photograph to closely resemble what you see. Please avoid any extensive manipulation.</li>
                            
                            <li>The participant should be ready with the original image when asked upon by the organisers.</li>

                            <li>The minimum resolution of the pictures should be 2000 pixels on the shorter side. However, images should not exceed 8 MB in size.</li>

                            <li>Stitched panoramas are allowed.</li>

                            <li>The photo should not have been previously entered in any competition/exhibition.</li>

                            <li>Plagiarism should be strictly avoided and such photographs shall be immediately disqualified from the competition.</li>

                            <li>A participant is allowed a maximum of 2 entries (1 entry per theme).</li>

                            <li>The Evaluation Criteria is as follows: 
                            <ul>
                                <li>40% - Number of Facebook likes</li>

                                <li>10% - Caption</li>

                                <li>50% - Judges' Ratings</li>

                                <li>The theme and originality of the photograph will also be considered.</li>
                            </ul></li>
                            <li>Each theme will have its own individual winner. Overall, there will be 2 separate winners. </li>

                            <li>The decision of the organizers shall be final and binding on all contestants.</li>

                            <li>The photographs submitted by all the participants will be uploaded on <a href="https://www.facebook.com/zeitgeist.iitrpr" target="_blank">www.facebook.com/zeitgeist.iitrpr</a> Photographs will be updated every day once in between 8 PM - 11 PM. Once uploaded, the participant will be acknowledged through an e-mail. The final result will be announced on 14th October.</li>
                    </ul>
                    </div>
                </div>
                <button class="event-register" onclick="showing(event)">SEE MORE</button>
                <button class="event-close" onclick="closing(event)">CLOSE</button>
            </div>
            <div class="event-image">
                <img src="images/events/z.jpg">
            </div>
        </div>


            </div>
            

    </div>





    <!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
    <div class="dashboard clearfix">
        <span style='font-size:30px;font-variant:small-caps'> Register For the Events Here</span>
        <ul class="tiles">
            <div class="col1 clearfix">
                <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="category1">
                    <div>
                        <p style="font-size:2em;">Cultural Events</p>
                    </div>
                    <div>
                        <p style="font-size:2em;">Click Here To View!</p>
                    </div>
                </li>
                <!--<li class="tile tile-big tile tile-1 slideTextRight" data-page-type="r-page" data-page-name ="">
          <div><p>Fun Events</p></div>
          <div><p>Coming Soon!</p></div>
        </li>-->
                <li class="tile tile-big tile-4 rotate3d rotate3dY" data-page-type="r-page" data-page-name="category3">
                    <div class="faces">
                        <div class="front">
                            <p style="font-size:2em;padding:4.3em 2em;">Technical Events</p>
                        </div>
                        <div class="back">
                            <p style="font-size:2em;padding-top:4.3em;">Click Here To View!</p>
                        </div>
                    </div>
                </li>
            </div>

            <div class="col2 clearfix">
                <li class="tile tile-big tile-5 slideTextRight" data-page-type="r-page" data-page-name="category2">
                    <div>
                        <p class="icon-arrow-right">Click Here To View!</p>
                    </div>
                    <div>
                        <p>Arts/Literary Events</p>
                    </div>
                </li>
                <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="category4">
                    <div>
                        <p>Online Events</p>
                    </div>
                    <div>
                        <p>Click Here To View!</p>
                    </div>
                </li>
                <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
                <!--<li class="tile tile-big tile-4 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><p>Gaming Events</p></div>
            <div class="back"><p>Coming Soon</p></div>
          </div>
        </li>-->
                <!--<li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-instagram"></span></div>
            <div class="back"><p>Launch Instagram</p></div>
          </div>
        </li>-->
            </div>

            <!--<div class="col3 clearfix">      
        <li class="tile tile-2xbig tile-9 fig-tile" data-page-type="custom-page" data-page-name="random-r-page">
          <figure>
            <img src="partials/images/summer.jpg" />
            <figcaption class="tile-caption caption-bottom">Fixed Caption: Some Subtitle or Tile Description Goes Here with some kinda link or anything
            </figure>
        </li>
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
          <div><p>Windows-8-like Animations with CSS3 &amp; jQuery &copy; Sara Soueidan. Licensed under MIT.</p></div>
        </li>
      </div>-->
        </ul>
    </div>
    <!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->

<script src="partials/js/scripts.js"></script>


<!-- fold effect end-->




<div id="light1" class="white_content">
    <div id="fade1" class="black_overlay">
        <button class="event-register-close" onclick="document.getElementById('light1').style.display='none';">CLOSE</button>
        <?php

if (!isset($_SESSION['saaz1']))
{ ?>
        <label>
            <input style="margin-left:0;height:20px;width20px;" type="radio" name="colorRadio" value="single">Single&nbsp;&nbsp;&nbsp;&nbsp;
            <br />
        </label>
        <?php
}
else
{
	echo "<span style='color:red'>Registered as single performer</span><br />";
}

if (!isset($_SESSION['saaz2']))
{ ?>
        <label>
            <input style="height:20px;width20px;" type="radio" name="colorRadio" value="duet">Duet
            <br />
        </label>
        <?php
}
else
{
	echo "<span style='color:red'>Registered for duet</span><br />";
} ?>

        <?php

if (!isset($_SESSION['saaz1']))
{ ?>
        <form method="post" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
            action="#/register"
            <?php
	}
	else
	{ ?>action="partials/register_duet.php"
            <?php
	} ?>id="single1">
            <input type="hidden" id="event_name" name="event_name" value="saaz" />
            <input type="hidden" name="participants" value="1" />
            <div class="register-input-container">
                <button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
            </div>
        </form>
        <?php
} ?>
        <?php

if (!isset($_SESSION['saaz2']))
{ ?>
        <form method="post" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
            action="#/register"
            <?php
	}
	else
	{ ?>action="partials/register_duet.php"
            <?php
	} ?>id="duet1" onsubmit="return validateForm1();">
            <input type="hidden" id="event_name" name="event_name" value="saaz" />
            <input type="hidden" name="participants" value="2" />
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant 1.." name="name1" id="name1">
                <div id="error6" style="color:red;">Enter Name of Participant 1</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant 2.." name="name2" id="name2">
                <div id="error7" style="color:red;">Enter Name of Participant 2</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Contact.." name="contact" id="contactno1" onkeypress="checkInput(event)">
                <div id="error8" style="color:red;">Enter your Contact</div>
            </div>
            <div class="register-input-container">
                <button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
            </div>
        </form>
        <?php
} ?>

        <br />

    </div>
</div>


<div id="light2" class="white_content">
    <div id="fade2" class="black_overlay">
        <button class="event-register-close" onclick="document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'">CLOSE</button>
        <?php

if (!isset($_SESSION['smack2']))
{ ?>
        <form method="post" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
            action="#/register"
            <?php
	}
	else
	{ ?>action="partials/register_duet.php"
            <?php
	} ?>onsubmit="return validateForm2();">
            <input type="hidden" id="event_name" name="event_name" value="smack" />
            <input type="hidden" name="participants" value="2" />
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant 1.." name="name1" id="name1d">
                <div id="error9" style="color:red;">Enter Name of Participant 1</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant 2.." name="name2" id="name2d">
                <div id="error10" style="color:red;">Enter Name of Participant 2</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Contact.." name="contact" id="contactno1d" onkeypress="checkInput(event)">
                <div id="error11" style="color:red;">Enter your Contact</div>
            </div>
            <div class="register-input-container">
                <button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
            </div>
        </form>
        <?php
} ?>

        <br />

    </div>
</div>


<script type="text/javascript">
    $("#single1").hide();
    $("#duet1").hide();

    $('input[type="radio"]').click(function() {
        if ($(this).attr("value") == "single") {
            $("#duet1").hide();
            $("#single1").show();
        }
        if ($(this).attr("value") == "duet") {
            $("#single1").hide();
            $("#duet1").show();
        }

    });
</script>

<div id="light" class="white_content">
    <p style="color:red;"></p>
    <div id="fade" class="black_overlay">
        <button class="event-register-close" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">CLOSE</button>
        <br />
        <?php

if (!isset($_SESSION['torque']) || !isset($_SESSION['tarang']) || !isset($_SESSION['yatharth']) || !isset($_SESSION['nukkad']) || !isset($_SESSION['lashkara']))
{ ?>
        <form method="post" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
            action="#/register"
            <?php
	}
	else
	{ ?>action="partials/register_team.php"
            <?php
	} ?>onsubmit="return validateForm();">
            <div class="register-input-container">
                <input class="register-input" name="team_name" id="team_name" placeholder="Group Name..">
                <div id="error1" class="register-error" style="color:red;">Enter your Group Name</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Group Lead.." name="leader_name" id="leader_name">
                <div id="error2" class="register-error">Enter your Group Leader</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Contact.." name="contact" id="contactno" onkeypress="checkInput(event)">
                <div id="error3" class="register-error">Enter your Contact</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Size of group.." name="team_size" id="team_size" onkeypress="checkInput(event)">
                <div id="error4" class="register-error">Enter your Group Size</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="College.." name="college_name" id="college_name">
                <div id="error5" class="register-error">Enter your College Name</div>
            </div>
            <input type="hidden" id="event_name" name="event_name" value="torque" />
            <div class="register-input-container">
                <button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
            </div>
        </form>
        <?php
}
else
{
	echo "<span style='color:red'>Registered</span>";
} ?>
        <br />
    </div>
</div>

<div id="light3" class="white_content">
    <p style="color:red;"></p>
    <div id="fade3" class="black_overlay">
        <button class="event-register-close" onclick="document.getElementById('light3').style.display='none';document.getElementById('fade3').style.display='none'">CLOSE</button>
        <br />
        <?php

if (!isset($_SESSION['dekode']) || !isset($_SESSION['timelining']))
{ ?>
        <form method="post" <?php
	if (!isset($_SESSION['user_id']))
	{ ?>
            action="#/register"
            <?php
	}
	else
	{ ?>action="partials/register_technical.php"
            <?php
	} ?>onsubmit="return validateForm4();">
            <div class="register-input-container">
                <input class="register-input" name="name1" id="namer1" placeholder="Name of Participant1..">
                <div id="error11" class="register-error" style="color:red;">Enter name of participant 1</div>
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant2.." name="name2" id="namer2">
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Name of Participant3.." name="name3" id="namer3">
            </div>
            <div class="register-input-container">
                <input class="register-input" placeholder="Team Name.." name="team_name" id="team_namer">
                <div id="error44" class="register-error">Enter your Team Name</div>
            </div>
            <input type="hidden" id="event_name" name="event_name" value="dekode" />
            <div class="register-input-container">
                <button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
            </div>
        </form>
        <?php
}
else
{
	echo "<span style='color:red'>Registered</span>";
} ?>
        <br />
    </div>
</div>

<div id="light4" class="white_content">
    <p style="color:red;"></p>
    <div id="fade4" class="black_overlay">
        <button class="event-register-close" onclick="document.getElementById('light4').style.display='none';document.getElementById('fade4').style.display='none'">CLOSE</button>
        <br />
        <?php
        if(isset($_SESSION['user_id']))     //checking if the user is logged in, only then the form is visible
{
    if(!isset($_SESSION['accomodation']))
    {
    ?>
    <form action="partials/accomodate.php" method="post">
    Gender:<br>

    <select name="gender">
    <option value="male">Male</option><br>

    <option value="female">Female</option><br>

    </select><br>
    Check the dates you require to stay:<br>

    9 <input type="checkbox" name="date[]" value="9"><br>

    10 <input type="checkbox" name="date[]" value="10"><br>

    11 <input type="checkbox" name="date[]" value="11"><br>
    <input type="hidden" name="type" value="accomodate"/>
    <input type="submit" value="Get Accomodation"/><br>
    </form>
    <?php
    }
    else        //for updating the accomodation
    {
        include('config.php');
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM accomodation WHERE user_id=$user_id;";
        $res = mysqli_query($connect,$query);
        $result = mysqli_fetch_array($res);
        ?>
        <form action="partials/accomodate.php" method="post">
    Update the dates:
    9 <input type="checkbox" name="date[]" value="9" <?php if($result['date9']) { ?> checked <?php } ?>>
    10 <input type="checkbox" name="date[]" value="10" <?php if($result['date10']) { ?> checked <?php } ?>>
    11 <input type="checkbox" name="date[]" value="11" <?php if($result['date11']) { ?> checked <?php } ?>><br>
    <input type="hidden" name="type" value="update"/>
    <input type="submit" name="action" value="Update"/> <input type="submit" name="action" value="delete"/>
    <?php
}
}
?>
    </div>
</div>


<style type="text/css">
    .black_overlay {
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.0);
        z-index: 1001;
        -moz-opacity: 0.8;
        opacity: .80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: fixed;
        top: 15%;
        left: 25%;
        right: 25%;
        min-width: 480px;
        padding: 16px;
        margin: 10px;
        /*border: 2px solid white;*/
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 1002;
        overflow: auto;
    }
    .register-error {
        color: red;
    }
    .register-input {
        position: relative;
        width: 50%;
        height: 3em;
        margin-top: 1em;
        background-color: rgba(0, 0, 0, 0.0);
        border: 2px solid white;
    }
    .register-input-container {
        position: relative;
        width: 65%;
        margin-left: 35%;
        text-align: left;
    }
    .register-input-container .register-button {
        left: auto;
        position: relative;
    }
    .black_overlay1 {
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.0);
        z-index: 1001;
        -moz-opacity: 0.8;
        opacity: .80;
        filter: alpha(opacity=80);
    }
    .white_content1 {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        right: 25%;
        min-width: 480px;
        padding: 16px;
        margin: 10px;
        /*border: 2px solid white;*/
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 1002;
        overflow: auto;
    }
</style>



<script type="text/javascript">
    $('#error1').hide();
    $('#error2').hide();
    $('#error3').hide();
    $('#error4').hide();
    $('#error5').hide();


    function validateForm() {
        $('#error1').hide();
        $('#error2').hide();
        $('#error3').hide();
        $('#error4').hide();
        $('#error5').hide();

        var check = 0;
        var title = $("#team_name").val();
        if (title == "" || title == null) {
            $('#error1').show();
            check = check + 1;
        } else {}


        var title1 = $("#leader_name").val();
        if (title1 == "" || title1 == null) {
            $('#error2').show();
            check = check + 1;
        } else {}
        var title2 = $("#contactno").val();
        if (title2 == "" || title2 == null) {
            $('#error3').show();
            check = check + 1;
        } else {}
        var title3 = $("#team_size").val();
        if (title3 == "" || title3 == null) {
            $('#error4').show();
            check = check + 1;
        } else {}
        var title4 = $("#college_name").val();
        if (title4 == "" || title4 == null) {
            $('#error5').show();
            check = check + 1;
        } else {}
        if (check > 0)
            return false;
    }


    $('#error11').hide();
    $('#error44').hide();


    function validateForm4() {
        $('#error11').hide();
        $('#error44').hide();


        var check = 0;
        var title = $("#namer1").val();
        if (title == "" || title == null) {
            $('#error11').show();
            check = check + 1;
        } else {}



        var title4 = $("#team_namer").val();
        if (title4 == "" || title4 == null) {
            $('#error44').show();
            check = check + 1;
        } else {}
        if (check > 0)
            return false;
    }


    function checkInput(evt) {



        // only alpha-numeric characters



        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        if (key === 8) {
            return;
        }
        if (key === 37) {
            return;
        }
        if (key === 38) {
            return;
        }
        if (key === 39) {
            return;
        }
        if (key === 40) {
            return;
        }
        if (key === 46) {
            return;
        }
        if (key === 9) {
            return;
        }
        if (key === 32) {
            return;
        }
        key = String.fromCharCode(key);
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }


    }

    function showLight(s) {
        $('#error1').hide();
        $('#error2').hide();
        $('#error3').hide();
        $('#error4').hide();
        $('#error5').hide();
        $("#light").find('#event_name').val(s);
        document.getElementById('light').style.display = 'block';
        document.getElementById('fade').style.display = 'block';
    }

    function showLight1(s) {
        $('#error6').hide();
        $('#error7').hide();
        $('#error8').hide();
        $("#light1").find('#event_name').val(s);
        document.getElementById('light1').style.display = 'block';
        document.getElementById('fade1').style.display = 'block';
    }

    function showLight2(s) {
        $('#error9').hide();
        $('#error10').hide();
        $('#error11').hide();
        $("#light2").find('#event_name').val(s);
        document.getElementById('light2').style.display = 'block';
        document.getElementById('fade2').style.display = 'block';
    }

    function showLight3(s) {
        $('#error11').hide();
        $('#error44').hide();
        $("#light3").find('#event_name').val(s);
        document.getElementById('light3').style.display = 'block';
        document.getElementById('fade3').style.display = 'block';
    }
     function showAccomodation(){
        document.getElementById('light4').style.display = 'block';
        document.getElementById('fade4').style.display = 'block';
     }
</script>