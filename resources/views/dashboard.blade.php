<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
	    <link rel="icon" href="favi.png"/>
        <style>
            body {
                background-image: url('{{ asset("images/background.jpg") }}');
                background-repeat: no-repeat;
                background-size: cover;
                }

                .bg-cover {
                min-height: 100vh;
                }
        </style>
    </head>
    <body class="bg-cover">
        <div class="row" style="height:250px;margin-top:15px;" >
            @if ($etudiant->id>1)
            <div class="col-lg-2">
                <form methode="POST" action="{{route('dashboard',$etudiant->id-1)}}">
                    <button class="marg btn btn-outline-primary shadow-lg" >left</button> 
                </form>
            </div>   
            @else
            <div class="col-lg-2">
                
            </div>   
                
            @endif
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5">
                        <form>
                            <div class="form-group headlabels" style="margin-top:15px">
							    <label for="nom" class="headerlabel">NOM : </label>
							    <label class="headerlabel">{{$etudiant->nom}} </label>
							    </div>
							    <div class="form-group headlabels">
							    <label for="prenom" class="headerlabel">PRENOM :</label>
							    <label class="headerlabel">{{$etudiant->prenom}} </label>
							    </div>
							    <div class="form-group headlabels">
							    <label for="field" class="headerlabel">Filiere :</label>
							    <label class="headerlabel">SSI</label>
							    </div>
							    <div class="form-group headlabels">
							    <label for="date" class="headerlabel">Date de Naissance :</label>
							    <label class="headerlabel">{{$etudiant->date_naissance}} </label>
							</div>
                        </form>    
                    </div>
                    <div class="col-lg-2">
                        <img id="pp" src="{{ asset('images/pic.jpg') }}"  />
                    </div> 
                    <div class="col-lg-5">
                        <form>
                            <div class="form-group headlabels atop" >
							<label for="code" class="headerlabel">Code Apogéee :</label>
							<label class="headerlabel">{{$etudiant->code_a}} </label>
							</div>
							<div class="form-group headlabels">
							<label for="email" class="headerlabel"> EMAIL :</label>
							<label class="headerlabel">{{$etudiant->email}} </label>
							</div>
							<div class="form-group headlabels">
							<label for="cin" class="headerlabel">C.I.N :</label>
							<label class="headerlabel">{{$etudiant->cin}}</label>
							</div>
                        </form>   
                    </div>    
                </div>    

            </div>
            <div class="col-lg-2">
                <form methode="POST" action="{{route('dashboard',$etudiant->id+1)}}">
                    <button class="marg btn btn-outline-primary shadow-lg" >right</button>
                </form>
            </div>   
        </div>
        <div class="centre">
            <p class="p1" >Graphes</p>
        </div>   
        <div style="width:1200px">       
        <div class="row">
            <div class="col-lg-2 test" >
                <div class="box" style="width:150px;margin-left:60px;">
				    <button class="shadow-lg btn btn-outline-dark " id="buttons1">S1</button><br><br>
				    <button class="shadow-lg btn btn-outline-dark " id="buttons2">S2</button><br><br>
				    <button class="shadow-lg btn btn-outline-dark " id="buttongen">Gen</button><br><br>
                 </div>
            </div>    
            <div class="col-lg-10 test">
                <div class="S1 row" id="s1">
                    <div class="col-lg-6 g1">
                        <canvas id="c1" height="300" width="300"></canvas>
                    </div>
                    <script>
                			const S11 = document.getElementById('c1');
                            const labels = [];
                            const data = [];
                            let MS1 = 0;
                            let j = 0;

                            @foreach ($tableData as $index => $data)
                                if ({{$index}} < 4) {
                                    labels.push('{{ $data['module'] }}');
                                    data.push({{ $data['note'] }});
                                    MS1=MS1+{{$data['note']}};
                                    j++;
                                            }
                            @endforeach
                            MS1=MS1/j;
               				 new Chart(S11, {  
                 		 	type: 'line',
                 		 	data: {
                    				labels:labels,
                    				datasets: [
                    			{
                     			 label: 'Notes S1',
                    			  data:  data,
                    			  borderWidth: 1,
					  borderColor:'Navy',
                   				 },
                   
                   		     	    ]
                    
                   		  	   },
 
              			   	 options: {
                		 	   scales: {
                      				y: {
                      			  beginAtZero: true,
					  ticks: {
						font: {
							weight:'bold',
							}
						}
                     			 }
                    			}
                  			}
               				 });
                	
              				</script>
                    <div class="col-lg-6 g2">
                        <canvas id="c2" height="300" width="300"></canvas>
                    </div>
                    <script>
    					const S111 = document.getElementById('c2');
  
    					new Chart(S111, {
      					type: 'bar',
      					data: {
        				labels: labels, 
        
        				datasets: [{
         				label: ['abscence S1',],
          
          				data: [2,4,3,5,],
          				borderWidth: 1,
					borderColor:'grey',
        					}]
      						},
      
    						});
    	
  					</script>
                </div>
                <div class="S2 row" id="s2">
                    <div class="col-lg-6 g1">
                        <canvas id="c3" height="300" width="300" ></canvas>
                    </div>
                    <script>
                        var abss1= [1,2,3,2];
                    </script>
                    <script>
    				        const S22 = document.getElementById('c3');
                            const Labels1 = [];
                            const Data1 = [];
                            let MS2 = 0;
                            let i =0;
                            @foreach ($tableData as $index => $data)
                                 if ({{$index}} >= 4) {
                                        Labels1.push('{{ $data['module'] }}');
                                        Data1.push({{ $data['note'] }});
                                        MS2=MS2+{{$data['note']}};
                                        i++;
                                            }
                            @endforeach
                            MS2=MS2/i;                 
   				             new Chart(S22, {  
      				        type: 'line',
     			        	 data: {
        			        labels: Labels1,
       				        datasets: [
       
      					         {
        			        label: 'Notes S2',
        			        data: Data1,
         			        borderWidth: 1,
				            borderColor:'Navy',	
      				         }
            			         ]
        			
         			    },

     				     options: {
        			     scales: {
         				     y: {
           			        beginAtZero: true,
				            ticks : {
					            font : {
						        weight:'bold',
						            }
					            }
       					             }
    				             }
     				        }
   				            });
    
  			        </script>
                    <div class="col-lg-6 g2">
                        <canvas id="c4" height="300" width="300"></canvas>
                    </div>
                    <script>
      			            const S222 = document.getElementById('c4');
    
      			            new Chart(S222, {
        		            type: 'bar',
      			            data: {
          		            labels: Labels1, 
          
         		            datasets: [
           		            {
            		        label: ['abscence S2',],
            
            		            data: abss1,
          		             borderWidth: 1,
                             backgroundColor:'grey',
			                borderColor:'black',
         		                }]
       			                },
        
      			                });
                    </script>
                </div>
                <div class="row General" id="general">
                    <div class="col-lg-6 g1">
                        <canvas id="c5" height="300" width="300" ></canvas>
                    </div>
                    <script>
                        const g1 = document.getElementById('c5');
  
    						new Chart(g1, {
     						type: 'pie',
      						data: {
       						labels: ['S1', 'S2'],
       						datasets: [{
         
          					data: [12, 15,],
          					borderWidth: 1,
                            backgroundColor: ['grey', 'white']
     							}]
      						},
      
    						 plugins: [ChartDataLabels]
    						});
                    </script>

                    <div class="col-lg-6 g2">
                        <canvas id="c6" height="300" width="300"></canvas>
                    </div>
                    <script>
                        const g2 = document.getElementById('c6');
  
                        new Chart(g2, {
                        type: 'bar',
                        data: {
                        labels: ['S1', 'S2'], 

                        datasets: [
                             {
                        label: ['Moyenne',],

                        data: [MS1, MS2],
                        borderWidth: 1,
                        borderColor:'Navy'
                            }]
                                },

                            });
                    </script>
                </div>
                <script>
                    var buttons1 = document.getElementById("buttons1");
       				var buttons2 = document.getElementById("buttons2");
				var buttongen = document.getElementById("buttongen");
        			var s1 = document.getElementById("s1");
       				var s2 = document.getElementById("s2");
				var general = document.getElementById("general");
				general.style.display = "block";
				buttons1.addEventListener("click", function() {
            				s1.style.display = "block";
            				s2.style.display = "none";
					general.style.display = "none";
        					});
				buttons2.addEventListener("click", function() {
            				s1.style.display = "none";
            				s2.style.display = "block";
					general.style.display = "none";
        					});
				buttongen.addEventListener("click",function() {
					s1.style.display = "none";
					s2.style.display = "none";
					general.style.display = "block";
						});
                </script>
            </div>
        </div>
        </div>
        <div class="box2">
            <div class="buttons">
                <form method="POST" action="{{route('valide',$etudiant->id)}}">
                     @csrf
                     @method('POST')
                    <button class="shadow-lg btn btn-outline-success" id="valide">Validation</button>
				</form>
            </div> 
            <div class="buttons">
                <form method="POST" action="{{route('ajourne',$etudiant->id)}}">
                    @csrf
                     @method('POST')
    				<button class="shadow-lg btn btn-outline-danger" id="ajourne">Ajournement</button>
				</form>
            </div> 
            <div class="buttons">
                <form method="POST" action="{{route('bulletin',$etudiant->id)}}">
                    @csrf
                    @method('POST')
    				<button class="shadow-lg btn btn-outline-primary" id="bulletin">Bulletin</button>
				</form>
            </div> 
            <div class="buttons">
                <form method="POST" action="{{route('pv',$etudiant->id)}}" >
                    @csrf
                    @method('POST')
                    <button class="shadow-lg btn btn-outline-primary" id="pv">PV de class</button>
                </form>
            </div> 
            <div>
                <form method="POST" action="{{route('parametrage',$etudiant->id)}}">
                    @csrf
                    @method('POST')
                    <button class="shadow-lg btn btn-outline-primary" id="parametrage">Paramétrage</button>
                </form>
            </div>        
        </div>
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <a class="btn btn-outline-dark btn-block shadow-lg" role="button" href="{{route('deliberer')}}" style="margin-top:50px;margin-bottom:50px;">Page List Etudiants </a>
            </div>
            <div class="col-lg-2"></div>
        </div>   
    </body>
</html>