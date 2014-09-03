<?php
ob_start();
session_start();
?>
<link rel="stylesheet" href="partials/css/demo-styles.css" />
  <!--<script src="partials/js/modernizr-1.5.min.js"></script>-->	
  
  <div class="demo-wrapper">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  
  <div class="r-page category1">

	<button class="r-close-button">
		GO BACK
	</button>
<div class="wrap">
	<div class="event-desc-container">
		<div class="event-title">Mr. and Ms. Zeitgeist</div>
		<div class="event-text">
			<div class="event-caption">
				Send your photographs along with your name, your college name and a writeup at <span style="color:rgb(250,100,50)">mrandmsz@zeitgeist.org.in</span> of not more than 100 words describing why you should be hailed as Mr/Ms Zeitgeist.
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br>
				<div class="event-subtitle">Online Selection :</div>
				A total of <span style="color:rgb(250,100,50)">14 candidates (7 boys and 7 girls)</span> will be selected based on the likes on their photographs posted on zeitgeist’s facebook page. Those who have been selected online will be exempted of the registration fee and will get direct entry to the final/semi-final round of the event, that is to be held during Zeitgeist 2014.<br><br>
				  <div class="event-subtitle">Offline Selection :</div>
				A candidate willing to participate in the competition can do so by registering himself/herself on-the-spot. The registration fee for the event is <span style="color:rgb(250,100,50)">Rs. 300/-</span>. After registration he/she will have to clear a set of rounds to reach the final/semi-final round to compete with those selected online. A maximum of <span style="color:rgb(250,100,50)">6 candidates (3 boys and 3 girls)</span> will be selected from the offline entry.<br><br>
				       
				 If the number of boys and girls who turn up on the day of event are unequal, we’ll have a semi-final round to <span style="color:rgb(250,100,50)">equal the number of girls and boys</span> qualifying for the next round. In such a case the number of qualifying participants will depend on the number of the boys/girls, whichever is smaller. For e.g. if 4 girls and 5 boys turn up at the event then a total of 8 participants (4 boys and 4 girls) will be shortlisted for the final rounds.<br>
				 <ol >
					<li> In case if the number of participants is 10 or less than 10 and are equal, these will automatically qualify for the final rounds.</li>
					<li> In case if more than 10 participants turn up, then we’ll have a semi-final round to select a total of 10 candidates (5 girls and 5 boys).</li>
					<li> The finalists will then compete to win the title of Mr. and Miss Zeitgeist 2014.</li>
					<li> The tentative dates for the semifinal and final rounds are <span style="color:rgb(250,100,50)">10th October</span> and <span style="color:rgb(250,100,50)">11th October</span> respectively.</li>
				</ol>
				<div class="event-subtitle">Offline Selection Round :</div>
				The offline selection would consist a written test that would test your skills.<br><br>
				<div class="event-subtitle">Semi-Final Round(If held) :</div>
				    The participants will be judged by their fashion sense. Girls are supposed to bring their best cocktail dresses for judgement. Boys should bring their formals with blazers. The sequence of entry will be informed before the commencement of the event. Henceforth, candidates will be shortlisted for the final round.<br><br>
				<div class="event-subtitle">Final Round(On-Stage) :</div>
				<ol>
					<li> Best Attire:<span style="color:rgb(250,100,50)">*</span>Pairs would be formed among the short-listed participants to judge the body language, sense of dressing and personality.</li>
					<li> Talent Round:Each participant will have to showcase his/her talent on stage. Each participant will be given a maximum of 2 minutes to display his/her talent.</li>
					<li> Questionnaire:The last round… Each participant will be asked a question by the judges. He/she gets two minute to think and to answer.</li>
				</ol>
				<span class="event-subtitle">Result</span>:<br>The result will be based on the total sum of points obtained in the all the three rounds .<br>
				<span style="color:rgb(250,100,50)">*</span>The criteria for the formation of pairs will be decided on the spot. <br><br>
				<div class="event-subtitle">Disclaimer :</div>
				If you have any further queries related to this event, mail your queries at support@zeitgeist.org.in.
			</div>
		</div>
		<button class="event-register" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/mrnmsz.jpg"></div>								
</div>
								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Torque ( War Of Bands )</div>
		<div class="event-text">
			<div class="event-caption">
				An unprecedented platform where the top-notch bands from every part of the country compete for the ultimate glory. Be prepared to hold your hands high as they jam up their electrifying chords and rolls to numb your senses ... <span style="color:rgb(250,100,50);">BUT IN THE END NOTHING ELSE MATTERS ..</span>
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span><br>
				<ul>
					<li>Maximum band strength (on stage members) is seven (7).</li>
					<li>Each band will be given 20 minutes to perform and 10 minutes sound check.</li>
					<li>Language of lyrics is not a criterion.</li>
					<li>Details of the prelims (if any) will be announced well in advance.</li>
					<li>An elimination round may be held depending on the number of participants.</li>
					<li>Drum kit will be provided to the participants.</li>
				</ul>
				<br><!-- <span class="event-subtitle">Prizes :</span><br>
				<ul>
					<li>Winner : 15000/-</li>
					<li>Runner-up : 10000/-</li>
				</ul> -->
				<br><!-- <span class="event-subtitle">Registration :</span><br>
				<ul>
					<li>Registration Fees: 1500/- per team</li>
				</ul> -->
			</div>
		</div>
		<?php
		if(!isset($_SESSION['torque']))
			{?>
		 <button class="register-button" id="floater" onclick = "showLight('torque')">REGISTER</button>
		<?php }
		else
		{ ?>
			<div class="registered-div" id="floater" ><p>REGISTERED</p></div>
		<?php } ?>
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>	
	<div>
	                         
	
</div>
</div>

 
							
<div class="wrap">
	<div class="event-desc-container">
		<div class="event-title">Tarang ( Group Dance )</div>
		<div class="event-text">
			<div class="event-caption">
				<span style="color:rgb(250,100,50);"> We are only as strong as we are united , as weak as we are divided " - J.K. Rowling</span>  <br>

				Zeitgeist brings you the manifestation of synchronization, coordination and spirit of unity in a spanking new avatar "TARANG" where colleges from across country come up with unique styles of dancing maintaining a perfect harmony between eastern and western dance forms...And we are pretty sure that this event will compel you to be on your toes and ride the Gala wave... 

				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
			<br><span class="event-subtitle">Rules :</span><br>
				<ul>
					<li>Any number of teams from a college can participate.</li>
					
					<li>Participation for Tarang is open to all students.</li>
					
					<li>Group members per team should be between 8 and 15, including the member(s) involved in Backstage Activities.</li>
					
					<li>Sequence should be in the range of 6 to 10 minutes.</li>
					
					<li>Teams have to apply through their respective colleges.</li>
					
					<li>Teams must bring 2 CD’s containing their sound track. 1 CD to be submitted to Coordinator, at the time of registration.</li>
					
					<li>No props will be provided.</li>
					
					<li>Props are allowed but any team using any kind of prop which can be a possible threat on stage for the audience or the stage itself will not be allowed. </li>
					
					<li>The dance floor area must be in the same condition after the performances as before.</li>
					
					<li>Size of the stage will be 40ft*32ft.</li>
					
					<li>Teams will be judged based on originality, choreography, execution and entertainment value.</li>
					
					<li>Variety of dance positions, dance movements, and/or combinations as appropriate to the specific difficulty of dance movements and/or combinations from one dance position or alignment to Uniqueness or originality of dance movements and/or combinations from one dance position or continuity of dance movements and/or combinations to either interpret dance theme and music, or dance one alignment to another, to include presentation of dance position, to demonstrate dance control, coordinated appearance appropriate to Country/Western competition attire; posture, grooming.</li> 

					<li>Participants must report 2 hours prior to the start of the event.</li>

					<li>An elimination round may be held depending on the number of participants.</li>

					<li>In case of situations which have been not described in rules, decision of the judges will be final.</li>

					<li>Non Compliance of any of the contest rules & regulation shall immediately disqualify the participants and use of costume as it complements the contestants and their dance routine.</li>
				</ul>
		 			<!-- <span class="event-subtitle">Prizes :</span>
		 		<ul>
					<li>Winner : 15000/-</li>

					<li>Runner-up : 10000/-</li>
				</ul> -->
					<!-- <span class="event-subtitle">Registration :</span>
				<ul>
					<li>Registration Fees : 1500/- per team</li>
				</ul> -->
			</div>
		</div>

		
		<?php
		if(!isset($_SESSION['tarang']))
			{?>
		<button class="register-button" onclick = "showLight('tarang')">REGISTER</button>
		<?php }
		else
		{ ?>
			<div class="registered-div"><p>REGISTERED</p></div>
		<?php } ?>
		<button class="event-register" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>


							
</div>


<div id="fade" class="black_overlay"></div>								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Junoon ( Solo Dance )</div>
		<div class="event-text">
			<div class="event-caption">
				<span style="color:rgb(250,100,50);">Some people learn to dance but others are born to"...</span><br>Talent doesn't remain hidden for long ..And if this talent drives your
				passion for dance , this is the chance for you to swagger your skills and mesmerise the world with your hellacious moves...
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
					<ul>	
						<li>Participation for Junoon is open to all students.</li>

						<li>Maximum 5 dancers per college.</li>

						<li>The duration of the performance should be between 3-6 minutes.</li> 

						<li>Negative marking for exceeding the TIME LIMIT.</li>

						<li>Participant must bring 2 CD’s containing their sound track. 1 CD to be submitted to Coordinator, at the time of registration. </li>

						<li>The dance floor area must be in the same condition after the performances as before.</li>

						<li>No props will be provided. </li>

						<li>Teams may use props if they want, for which they should take prior permission from the Coordinator. (Negative marking if not informed before)</li>

						<li>Participant can perform any dance form/style. </li>

						<li>Participants are not restricted from performing any move but they must be aware that it is their own responsibility to ensure that they do not perform dangerous moves that could injure themselves or others.</li> 

						<li>Coordinators have the right to bring in safety restrictions.</li>

						<li>Participants will be judged based on originality, choreography, execution and entertainment value.</li>

						<li>Variety of dance positions, dance movements, and/or combinations as appropriate to the specific. Difficulty of dance movements and/or combinations from one dance position or alignment to uniqueness or originality of dance movements and/or combinations from one dance position or dance one alignment to another, to include presentation of dance position continuity of dance movements and/or combinations to either interpret dance theme and music, or to demonstrate dance control.</li> 

						<li>Participants must report 2 hours prior to the start of the event.</li>

						<li>An elimination round may be held depending on the number of participants.</li>

						<li>Lighting of candles, matches or cigarettes on stage is not allowed and will result in disqualification. </li>
			
						<li>In case of situations which have been not described in rules, decision taken by judges will be final. </li>

						<li>Non Compliance of any of the contest rules & regulation shall immediately disqualify the participants.</li>
					</ul>
						<!-- <span class="event-subtitle">Prizes :</span>
					<ul>
						<li>Winner : 3000/-</li>

		 				<li>Runner-up : 1500/-</li>
		 			</ul> -->
			</div>
		</div>
		<?php
				if(!isset($_SESSION['junoon1']))
				{
					?>
				<form method="post"
		         <?php
				if(!isset($_SESSION['user_id']))
				{
				?>
		        action="#/register" 
		        <?php
				}
				else { ?>action="partials/register_duet.php"<?php } ?>>
						<input type="hidden" name="participants" value="1"/>
						<input type="hidden" name="event_name" value="junoon"/>
		        		<button type="submit" value="REGISTER" class="register-button" id="floater" >REGISTER</button>
		        </form>
		<?php
				}
				else
				{ ?>
					<div class="registered-div" id="floater"><p>REGISTERED</p></div>
				<?php }
				?>
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>		
	<div>
	<!--<a style="color:white;text-decoration:none" href = "javascript:void(0)" onclick = "showLight1('junoon')">REGISTER</a>-->
	
	

	</div>     
</div>


<script type="text/javascript">
	$('#error6').hide();
	$('#error7').hide();
	$('#error8').hide();
	
	
		function checkInput(event)
	{

	}

    	function validateForm1()
    	{
    $('#error6').hide();
	$('#error7').hide();
	$('#error8').hide();
	
    	var checker=0;
    	var title5 = $("#name1").val();
    	if (title5=="" || title5==null) { $('#error6').show();checker=checker+1;} else	{}
    	
    	
    	var title6 = $("#name2").val();
    	if (title6=="" || title6==null) { $('#error7').show();checker=checker+1;} else{}
    	var title7 = $("#contactno1").val();
    	if (title7=="" || title7==null) { $('#error8').show();checker=checker+1;} else{}
    	if (checker>0)
    	return false;
    }

    	
</script>



<script type="text/javascript">
$("#single").hide();
$("#duet").hide();

$('input[type="radio"]').click(function(){
            if($(this).attr("value")=="single"){
                $("#duet").hide();
                $("#single").show();
            }
            if($(this).attr("value")=="duet"){
                $("#single").hide();
                $("#duet").show();
            }
            
        });

</script>

<div class="wrap">
	<div class="event-desc-container">
		<div class="event-title">Saaz ( Solo/Duet Singing)</div>
		<div class="event-text">
			<div class="event-caption">
				Sometimes, a single heavenly voice is enough to open the floodgates of emotions. This is a chance to solely win the hearts of all by making the crowd swoon by your unbelievably melodious voice.
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
					<ul>
						<li>Participation for Saaz is open to all students.</li>

						<li>Songs should be in Hindi or English language only.</li>

						<li>There is no restriction on number of students participating from any institution.</li>

						<li>Participants will be penalized for exceeding the specified time limits on terms agreed by the judges.</li>

						<li>Sound check on stage should not take more than 1 min.</li>

						<li>The participants are allowed to bring only karaoke in MP3 format on CD's (participants are required to give 2 copies on 2 separate CD's). Please note musical instruments or bands of any kind will not be allowed. </li>

						<li>Karaoke should not contain any human voice in it.</li>

						<li>Competition comprises of two rounds:
							<br>
								<span class="event-subtitle" style="font-size:17px;">Preliminary Round:</span>

								<ol>
									<li>	
									Each participant is required to prepare 3 songs of different genres (namely rock, pop, folk etc.) and can be asked to sing other song in case judges face any uncertainty. Singing time for this round should not exceed 3 minutes. Participants are required to sing without any karaoke or any musical instrument in this round. 
										</li>
									<li>Participants will be short-listed on the basis of their performance in this round for the final round.
											</li></ol>

								<span class="event-subtitle" style="font-size:17px;">Final Round:</span>
								<ol>
									<li>Maximum time limit for this round is 5 min. Participants are free to choose any song of their choice. Song can be different from 3 songs that they have prepared for the Preliminary Round. The participants are allowed to bring only karaoke, in MP3 format on CD's for this round. 
									</li>
									<li>
									Please note no band would be allowed for this round. Karaoke should not contain any form of human voice in it.
									</li>
									</ol>
					</ul>
			</div>
		</div>
		<button class="register-button" onclick = "showLight1('saaz')">REGISTER</button>
		<button class="event-register" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>	
	
		
</div>


	<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Titan</div>
		<div class="event-text">
			<div class="event-caption">
				One-of-a-kind event where one can witness the ultimate showdown challenging the human strength and endurance to the limits unknown and Darwin's "survival of the fittest" will decide the one who earns the glory of being called the "Titan" - the strongest of all ....
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Events :</span><br><br>
				<span class="event-subtitle" style="color:rgb(250,100,50);">(a) MEDLEY :</span>
				
				<ul>
						<li>Course length : 20 meters</li> 

						<li>Time limit : 75secs</li> 

						<li>Weights 56Kg log, 70Kg barrel, 80Kg barrel and 150Kg duck/farmer’s walk</li> 

						<li>Athletes will load the log and the barrels on a table 20 meters from the starting point and perform duck/farmer’s walk for the same distance, all within a time limit of 75 seconds. Athletes are not allowed to roll or drag the objects.</li> 

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

						<li>Course length : 20 metres </li>

						<li>Time limit 45 secs for each attempt </li>

						<li>Athletes will attempt Yoke walk, with their selected weights, for a distance of 20 meters within time limit of 45 seconds. Athletes can increase the weights only by a multiple of 10Kg in their next attempt. </li>

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


				<br><span class="event-subtitle">Rules :</span>
					<ul>	
						<li>Entries are welcome 2 hours prior to the start of the competition.</li>

						<li>Athletes will be given 30 minutes to get used to the equipment and get warmed up.</li>

						<li>No lifting costumes will be allowed.</li> 

						<li>Gear allowed – lifting belt, knee, elbow and wrist wraps.</li>

						<li>If the number of athletes registered are more than 5, then the first event, Medley, will act as a qualifying round, where top 5 athletes will compete in the later events. </li>

						<li>Before each attempt, athlete will be asked “are you ready”, if the athlete is ready, he shall answer with “yes” after which he will wait for the referee’s command “go”/whistle and the timer will start.</li>

						<li>Decision of the referee will be final. </li>

						<li>For each event athletes will be given points according to their finish. If 5 athletes are competing in an event, 1st gets 5 points, 2nd gets 4 points, 3rd gets 3 points and so on.</li>

						<li>Athlete with maximum points in the ends will be Titan’14. </li>

						<li>We expect brotherhood and healthy competition.</li> 

						
					</ul>
						<!-- <span class="event-subtitle">Prizes :</span>
					<ul>
						<li>Winner : 3000/-</li>

		 				<li>Runner-up : 1500/-</li>
		 			</ul> -->
			</div>
		</div>
			<div>
		    
				<?php
				if(!isset($_SESSION['titan']))
				{
					?>
				<form method="post"
		         <?php
				if(!isset($_SESSION['user_id']))
				{
				?>
		        action="#/register" 
		        <?php
				}
				else { ?>action="partials/register_titan.php"<?php } ?>>
		        		<button type="submit" value="REGISTER" class="register-button" id="floater" >REGISTER</button>
		        </form>
		<?php
				}
				else
				{ ?>
					<div class="registered-div" id="floater"><p>REGISTERED</p></div>
				<?php }
				?>
			</div>	
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>	
							
</div>



			

<style>
.hover
{
    position: relative;
    z-index: 1;
}

.slide
{
    
    top: 15em;
    z-index: -1;
    -webkit-transition: top 1s;
    -moz-transition: top 1s;
	background:rgba(0,0,0,0.0);
	color:rgba(0,0,0,0.0);
	display:none;
}


.hover1
{
    cursor: pointer;
    position: relative;
    z-index: 1;
}

.slide1
{
   
   top: 17em;
	
    z-index: -1;
    -webkit-transition: top 1s;
    -moz-transition: top 1s;
	background:rgba(0,0,0,0.0);
	color:rgba(0,0,0,0.0);
}
</style>

<script>
function showing(e)
{
	e = e || window.event;
    e = e.target || e.srcElement;
    e = $(e).parent().parent();
    e.animate({"width":"100%"},500,function(){
		e.find('.event-close').show();
		e.find('.register-button').show();
		e.find('.event-text').fadeIn(200);
	});
	e.find('.event-text').hide();
	e.find('.event-description').show();
	e.find('.event-register').hide();
	e.find('.register-button').hide();
}

function closing(e)
{
	e = e || window.event;
    e = e.target || e.srcElement;
    e = $(e).parent().parent();
	e.animate({"width":"70%"},500,function(){
			e.find('.event-register').show();
			e.find('.register-button').show();
			e.find('.event-text').fadeIn(200);
	});
	e.find('.event-text').hide();
	e.find('.event-close').hide();
	e.find('.register-button').hide();
	e.find('.event-description').hide();
}
</script>
</div>



<div class="r-page category2">
					<button class="r-close-button">
					GO BACK
					</button>
							    
	<div class="wrap">
		<div class="event-desc-container">
			<div class="event-title">Conclave ( Open Debate )</div>
				<div class="event-text">
				<div class="event-caption">
				Just as pure energy emerge on the collision of atoms, a torrent of raging thoughts is generated when wits collide in this epic oral battle. 

				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
				</div>
				<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
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

							<li>Counter arguments: Valid interjections and satisfactory answers to the opponent’s questions. </li>

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
						if(!isset($_SESSION['conclave']))
						{
							?>
						<form method="post" <?php
						if(!isset($_SESSION['user_id']))
						{
						?>
				        action="#/register" 
				        <?php
						}
						else { ?>action="partials/register_literary.php"<?php } ?>id="singleone">
				        		<input type="hidden" id="event_name" name="event_name" value="conclave"/>
		        				<button type="submit" value="REGISTER" class="register-button">REGISTER</button>
				        		
				                
				        </form>
				        <?php
						}
						else
						{ ?>
							<div class="registered-div"><p>REGISTERED</p></div>
						<?php }
						?>

					</div>		
				<button class="event-register" onclick="showing(event)" >SEE MORE</button>
				<button class="event-close" onclick="closing(event)" >CLOSE</button>
			</div>
		<div class="event-image"><img src="images/events/z.jpg"></div>	
							
	</div>
								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Eureka</div>
		<div class="event-text">
			<div class="event-caption">
				"You don't have to be clever, just smart" An event which showcases a unique blend of patience, eagerness to press the buzzer, presence of mind and love for trivia.
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
				<ul>
						<li>Any number of teams is allowed to participate from one college.</li>

						<li>Cross college teams are permitted.</li>

						<li>This will be a team event. Each team will consist of 2 members.</li>

						<li>This will comprise of 2 rounds, namely the preliminary round (written test) and the final round (on stage)
							<br>
							<span class="event-subtitle" style="font-size:17px;">Preliminary Round :</span>
							<ul>
								<li>Duration: 1 Hour</li>

								<li>Test will be conducted in teams.</li>

								<li>20 MCQ’s</li>

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
			if(!isset($_SESSION['eureka']))
			{
				?>
			<form method="post" <?php
			if(!isset($_SESSION['user_id']))
			{
			?>
		action="#/register"         
		<?php
			}
			else { ?>action="partials/register_literary.php"<?php } ?>id="singleone">
	        		<input type="hidden" id="event_name" name="event_name" value="eureka"/>
	        		<button type="submit" value="REGISTER" class="register-button" id="floater" >REGISTER</button>
	        </form>
	        <?php
			}
			else
			{ ?>
				<div class="registered-div" id="floater"><p>REGISTERED</p></div>
			<?php }
			?>

		</div>		
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>						
</div>


							    
					<div class="wrap">
	<div class="event-desc-container">
		<div class="event-title">Blind Painting</div>
		<div class="event-text">
			<div class="event-caption">
				Eyes are considered the most vital sense organs as they enable us to admire the world around us in all its beautiful and vibrant colors. But the true talent lies in admiring and impersonating the very beauty in the absense of them.
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
				<ul>
					<li>Team consisting 2 members allowed. </li>

					<li>A sheet with a pattern/figure will be given to each team. They have come up with an idea to further modify that figure/pattern.</li>

					<li>Participants will be provided with requisite material.</li>

					<li>After that one of the members will be blindfolded and other member has to guide.</li>

					<li>Time for competition – maximum 15 minutes only.</li>

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
				if(!isset($_SESSION['blind_painting']))
				{
					?>
				<form method="post" <?php
				if(!isset($_SESSION['user_id']))
				{
				?>
		        action="#/register" 
		        <?php
				}
				else { ?>action="partials/register_literary.php"<?php } ?>id="singleone">
		        		<input type="hidden" id="event_name" name="event_name" value="blind_painting"/>
		        		<button type="submit" value="REGISTER" class="register-button" >REGISTER</button>
		        </form>
		        <?php
				}
				else
				{ ?>
				<div class="registered-div"><p>REGISTERED</p></div>
				<?php }
				?>

			</div>
		<button class="event-register" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>
									
</div>
								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Graffiti</div>
		<div class="event-text">
			<div class="event-caption">
				Do you love spreading your messages, ideas or knowledge by scribbling them on a wall in the funkiest way possible? If yes, what can be a better way to express your love than creating masterpieces in the form of graffiti. Just ideate and paint.
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
				<br><span class="event-subtitle">Rules :</span>
				<ul>
					<li>Only individual participation allowed.</li>

					<li>Time allowed is 1hour.</li>

					<li>Participant will have to draw graffiti on 10x10 cm paper.</li>

					<li>All the materials required will be provided.</li>

					<li>Participants will have to use their imagination and no external sources will be allowed.</li>
				</ul>
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
			<div>
		    <?php
				if(!isset($_SESSION['graffiti']))
				{
					?>
				<form method="post" <?php
				if(!isset($_SESSION['user_id']))
				{
				?>
		        action="#/register"  
		        <?php
				}
				else { ?>action="partials/register_literary.php"<?php } ?>id="singleone">
		        		<input type="hidden" id="event_name" name="event_name" value="graffiti"/>
		        		<button type="submit" value="REGISTER" class="register-button" id="floater" >REGISTER</button>
		        </form>
				<?php
				}
				else
				{ ?>
				<div class="registered-div" id="floater"><p>REGISTERED</p></div>
				<?php }
				?>
			</div>	
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>
								
</div>



  </div>



<div class="r-page category3">

		<button class="r-close-button">
					GO BACK
		</button>

		<div class="wrap">
		<div class="event-desc-container">
			<div class="event-title">Time-Lining</div>
			<div class="event-text">
				<div class="event-caption">
					Your <span style="color:rgb(250,100,50)">Task</span> is to build a line follower robot, which is expected to traverse the whole track from "START" to "END" in least possible time i.e. complete the course as fast as possible.....the earlier "END" comes, the closer you will be to Victory.....
					<br>
					<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
				</div>
				<div class="event-description">
				    <br><span class="event-subtitle">Introduction :</span><br>
				    Mankind took a huge leap in science and technology when it invented robots. Robots are always fascinating to them and are constantly evolving. “Time-Lining” brings you an opportunity of a lifetime to use this opus invention and prove your worth by making and controlling it. A multitude of exciting events awaits you that not only fulfils your appetite for imagination and application but also is a source of ultra-gratification when you bring your imaginative transformers into the real world. You will have to make a robot that meets given specifications and make your way to victory. So gear up, show your intellect and start ROBOTING!
					<br><br><span class="event-subtitle">Rules :</span>
					<ul>
						<li>Students of any recognized college are eligible to participate. All participants should have their college ID cards with them.</li>

						<li>A team may consist of a maximum of 3 participants. These participants can be from same or different institutes.</li>
					</ul>
					<br><span class="event-subtitle">Gameplay :</span>
					<ul>
						<li>Complete the course as fast as possible. If there’s a tie between the fastest, a run-off will determine the winner. If nobody finishes the run, the farthest one to run on tracks will win.</li>

						<li>There are a maximum of 3 tries for each robots. The fastest run of the 3 will count.</li> 

						<li>In each try, the participant can touch the bot maximum 5 times (with penalty for each touch)</li>
					</ul>
					<br>
					For Elaborated Rules and Arena, <a style="text-decoration:none" href="http://zeitgeist.org.in/partials/pdf/Time_Lining_Z14.pdf"> Download pdf!</a><br><br>
					<span style="color:rgb(250,100,50)">
					For any further queries, drop an e-mail at support@zeitgeist.org.in</span>.
						<!-- <span class="event-subtitle">Registration Fees :</span>
						<ul>
							<li>Registration fees: 20/- per participant</li>
						</ul> -->
				</div>
			</div>
			<button class="event-register" onclick="showing(event)" >SEE MORE</button>
			<button class="event-close" onclick="closing(event)" >CLOSE</button>
		</div>
		<div class="event-image"><img src="images/events/z.jpg"></div>								
</div>
								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">DeKode</div>
		<div class="event-text">
			<div class="event-caption">
				If you are someone who loves solving murder mysteries, reading a detective novel or solving cryptograms then DeKode is an event for you. DeKode, a cryptic puzzle based contest, is a platform to promote, showcase and reward your logical and lateral thinking abilities. 
				<br>
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
			<br><span class="event-subtitle">Introduction :</span><br>
			    If you are someone who loves solving murder mysteries, reading a detective novel or solving cryptograms then DeKode is an event for you. DeKode, a cryptic puzzle based contest, is a platform to promote, showcase and reward your logical and lateral thinking abilities. Decrypting ciphers was an invaluable source of military intelligence throughout the World War II. The event draws analogy from this cryptic war, where deciphering countries' messages was a major focus area and played a vital role in deciding the outcome of the war.
				<br><br><span class="event-subtitle">Rules :</span>
				<ul>
					<li>Only participants with valid Identity cards/Bonafide Certificates of their respective institutes are eligible to participate.</li>

					<li>Students can participate in a team, where each team may consist of atmost 3 members.</li>

					<li>The event will be conducted in 2 rounds. Round 1 will be an elimination round and only top 10 teams will be selected for Round 2.</li>

					<li>All the participants will be contacted shortly after they register for the event and will be provided with some basic preparatory material.</li>

					<li>The decision of the judges and the organizers shall be final and abiding Contestants will be judged for the following skills:
					<ul>
						<li>Inductive reasoning</li>

						<li>Deductive reasoning</li>

						<li>General Knowledge</li>

						<li>Lateral thinking</li>
					</ul>
				</ul>
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
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z.jpg"></div>								
   
</div>
							    
 </div>



<div class="r-page category4">

						<button class="r-close-button">
							GO BACK
						</button>
						<button class="r-close-button">
					GO BACK
		</button>

		<div class="wrap">
		<div class="event-desc-container">
			<div class="event-title">Zigmatics</div>
			<div class="event-text">
				<div class="event-caption">
					<span style="color:rgb(250,100,50)">Math turns meth</span><br>
				</div>
				<div class="event-description">
				    
				</div>
			</div>
			<button class="event-register" onclick="showing(event)" >SEE MORE</button>
			<button class="event-close" onclick="closing(event)" >CLOSE</button>
		</div>
		<div class="event-image"><img src="images/events/zigmatics.jpg"></div>								
</div>
								

<div class="wrap" id="floater">
	<div class="event-desc-container" id="floater">
		<div class="event-title">Z-hunt</div>
		<div class="event-text">
			<div class="event-caption">
				<span style="color:rgb(250,100,50)">"You have missed the most important thing ,  I am "Captain" Jack Sparrow " <br> "And yes, I am a pirate!!"</span> 
				<br>
				Have you ever wondered what it feels to be a pirate .If yes, no worries then ,savy!! The time has come for you to unleash the pirate in you.
				<!-- <strong style="color:rgb(250,100,50)">Win Prizes worth Rs. 15000!</strong> -->
			</div>
			<div class="event-description">
			<br>
			   	Zeitgeist welcomes you to Z-hunt where you can experience the same thrill and adventure without having moved an inch !! Z-hunt is 
			   	an online treasure hunt where you will have to surf the sea of Google to get through the levels which will lead you to the 
			   	ultimate treasure.
				<br><br>It's a one of a kind event where what matters the most is your lust and Google is the only lifeline.
				So, Are you ready for this fascinating voyage into the world of pirates ??
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
		<button class="event-register" id="floater" onclick="showing(event)" >SEE MORE</button>
		<button class="event-close" id="floater" onclick="closing(event)" >CLOSE</button>
	</div>
	<div class="event-image"><img src="images/events/z-hunt.jpg"></div>								
   
</div>
	    
								
  </div>








<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="category1">
          <div><p style="font-size:2em;">Cultural Events</p></div>
          <div><p style="font-size:2em;">Participate in <br>Mr. and Ms. Zeitgeist</p></div>
        </li>
        <!--<li class="tile tile-big tile tile-1 slideTextRight" data-page-type="r-page" data-page-name ="">
          <div><p>Fun Events</p></div>
          <div><p>Coming Soon!</p></div>
        </li>-->
        <li class="tile tile-big tile-4 rotate3d rotate3dY" data-page-type="r-page" data-page-name="category3">
          <div class="faces">
            <div class="front"><p style="font-size:2em;padding:4.3em 2em;">Technical Events</p></div>
            <div class="back"><p style="font-size:2em;padding-top:4.3em;">Click Here To View!</p></div>
          </div>
        </li>
      </div>

      <div class="col2 clearfix">
        <li class="tile tile-big tile-5 slideTextRight" data-page-type="r-page" data-page-name="category2">
         <div><p class="icon-arrow-right">Click Here To View!</p></div>
          <div><p>Arts/Literary Events</p></div>
        </li>
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="">
          <div><p>Online Events</p></div>
          <div><p>Coming Soon!</p></div>
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
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  
  <script src="partials/js/scripts.js"></script>
		
		
	<!-- fold effect end-->
	
	
	
	
<div id="light1" class="white_content">
	<div id="fade1" class="black_overlay">
        <button class="event-register-close" onclick = "document.getElementById('light1').style.display='none';">CLOSE</button>
<?php
if(!isset($_SESSION['saaz1']))
{
	?>
			<label><input style="margin-left:0;height:20px;width20px;" type="radio" name="colorRadio" value="single"> Single&nbsp;&nbsp;&nbsp;&nbsp;<br></label>
            <?php
}
else
		{
			echo "<span style='color:red'>Registered as single performer</span><br>";
		}
if(!isset($_SESSION['saaz2']))
{
			?>
        	<label><input style="height:20px;width20px;" type="radio" name="colorRadio" value="duet"> Duet<br></label>
            <?php
}
else
{
			echo "<span style='color:red'>Registered for duet</span><br>";
}
		
?>

        	<?php
		if(!isset($_SESSION['saaz1']))
		{
			?>
		<form method="post" <?php
		if(!isset($_SESSION['user_id']))
		{
		?>
        action="#/register" 
        <?php
		}
		else { ?>action="partials/register_duet.php"<?php } ?> id="single1">
        <input type="hidden" id="event_name" name="event_name" value="saaz"/>
        <input type="hidden" name="participants" value="1"/>
        <div class="register-input-container">
		<button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
		</div>
        </form>
<?php
		}
		
		?>
			<?php
		if(!isset($_SESSION['saaz2']))
		{
			?>
		<form method="post" <?php
		if(!isset($_SESSION['user_id']))
		{
		?>
        action="#/register" 
        <?php
		}
		else { ?>action="partials/register_duet.php"<?php } ?> id="duet1" onsubmit="return validateForm1();">
        <input type="hidden" id="event_name" name="event_name" value="saaz"/>
        <input type="hidden" name="participants" value="2"/>
			<div class="register-input-container">
			<input class="register-input" placeholder="Name of Participant 1.." name="name1" id="name1">
			<div id="error6" style="color:red;">Enter Name of Participant 1</div>
			</div>
			<div class="register-input-container">
			<input class="register-input" placeholder="Name of Participant 1.." name="name2" id="name2">
			<div id="error7" style="color:red;">Enter Name of Participant 1</div>
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
		}
		
		?>

		<br>
            
	</div>
</div>	

<script type="text/javascript">
$("#single1").hide();
$("#duet1").hide();

$('input[type="radio"]').click(function(){
            if($(this).attr("value")=="single"){
                $("#duet1").hide();
                $("#single1").show();
            }
            if($(this).attr("value")=="duet"){
                $("#single1").hide();
                $("#duet1").show();
            }
            
        });

</script>
	
	<div id="light" class="white_content"><p style="color:red;"></p> 
        <div id="fade" class="black_overlay">
        <button class="event-register-close" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">CLOSE</button>
                        <br>
                         <?php
			if(!isset($_SESSION['torque']) || !isset($_SESSION['tarang']))
		{
			?>
		<form method="post" <?php
		if(!isset($_SESSION['user_id']))
		{
		?>
        action="#/register" 
        <?php
		}
		else { ?>action="partials/register_team.php"<?php } ?> onsubmit="return validateForm();">
					<div class="register-input-container">
					<input class="register-input" name="team_name" id="team_name" placeholder="Group Name..">
					<div id="error1" class="register-error"style="color:red;">Enter your Group Name</div>
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
					<input type="hidden" id="event_name" name="event_name" value="torque"/>
					<div class="register-input-container">
					<button type="submit" value="REGISTER" class="register-button" style="margin-left:12%;margin-top:2em;">REGISTER</button>
					</div>
		    </form>			
            <?php
		}
		else
		{
			echo "<span style='color:red'>Registered</span>";
		}
		?>
            <br>
		   	</div>
		</div>

   
   
<style type="text/css">
	
	.black_overlay{
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.0);
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
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
        background-color: rgba(0,0,0,0.9);
        z-index:1002;
        overflow: auto;
    }
    .register-error
    {
    	color: red;
    }
    .register-input
    {
    	position: relative;
    	width: 50%;
    	height: 3em;
    	margin-top: 1em;
    	background-color: rgba(0,0,0,0.0);
    	border: 2px solid white;
    }
    .register-input-container
    {
    	position: relative;
    	width: 65%;
    	margin-left: 35%;
    	text-align: left;
    }
    .black_overlay1{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.0);
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
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
        background-color: rgba(0,0,0,0.9);
        z-index:1002;
        overflow: auto;
    }
</style>

    
	
	<script type="text/javascript">
	$('#error1').hide();
	$('#error2').hide();
	$('#error3').hide();
	$('#error4').hide();
	$('#error5').hide();
	

    	function validateForm()
    	{
    $('#error1').hide();
	$('#error2').hide();
	$('#error3').hide();
	$('#error4').hide();
	$('#error5').hide();
	
    	var check=0;
    	var title = $("#team_name").val();
    	if (title=="" || title==null) { $('#error1').show();check=check+1;} else	{}
    	
    	
    	var title1 = $("#leader_name").val();
    	if (title1=="" || title1==null) { $('#error2').show();check=check+1;} else{}
    	var title2 = $("#contactno").val();
    	if (title2=="" || title2==null) { $('#error3').show();check=check+1;} else{}
    	var title3 = $("#team_size").val();
    	if (title3=="" || title3==null) { $('#error4').show();check=check+1;} else{}
    	var title4 = $("#college_name").val();
    	if (title4=="" || title4==null) { $('#error5').show();check=check+1;} else{}
    	if (check>0)
    	return false;
    }


    function checkInput(evt)
{
    //only alpha-numeric characters
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    if(key===8){return;}
    if(key===37){return;}
    if(key===38){return;}
    if(key===39){return;}
    if(key===40){return;}
    if(key===46){return;}
    if(key===9){return;}
       if(key===32){return;}
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }


}

    function showLight(s)
    {
    	$('#error1').hide();
		$('#error2').hide();
		$('#error3').hide();
		$('#error4').hide();
		$('#error5').hide();
    	$("#light").find('#event_name').val(s);
    	document.getElementById('light').style.display='block';
    	document.getElementById('fade').style.display='block';
    }
    function showLight1(s)
    {
    	$('#error6').hide();
		$('#error7').hide();
		$('#error8').hide();
    	$("#light1").find('#event_name').val(s);
    	document.getElementById('light1').style.display='block';
    	document.getElementById('fade1').style.display='block';
    }
</script>
	