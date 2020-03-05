 <!DOCTYPE html>
<html>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="intereststyle.css" type="text/css" >
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<script src="interestselect.js"></script>
	
    
   <!------------------------------------->
   <!-- SCRIPT ->
      <!------------------------------------>
     
   <head>
	   <title>Your Interests ?</title> 
   </head>
  
   <body>
  
      <section id="header" class="jumbotron text-center">
         <h1 class="display-4 ">What's your Interest</h1>
         <p class="lead">People are waiting to meet you :) </p>
      </section>
      
      <?php echo '
	   
	   <div class="container">
		   
		   
      	 <!------------------------------------->
      	 <!-- FIRST ROW ->
         <!------------------------------------>
          
      
         <div class="row">
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#musicModal" src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Music</h5>
                     <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#musicModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#moviesModal" src="https://images.unsplash.com/photo-1505686994434-e3cc5abf1330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Movies</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#moviesModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top"  data-toggle="modal" data-target="#gamesModal" src="https://images.unsplash.com/photo-1531594896955-305cf81269f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Games</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#gamesModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>
         
		  
         <!------------------------------------->
         <!-- SECOND ROW ->
         <!------------------------------------>
		  
         <div class="row">
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#techModal" src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Tech</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#techModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4  ">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#softModal" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Software Dev</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#softModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#seriesModal" src="https://images.unsplash.com/photo-1467293622093-9f15c96be70f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">TV Series</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#seriesModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>
		  
		  
		  <!------------------------------------->
         <!-- THIRD ROW ->
         <!------------------------------------>
		  
         <div class="row">
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#insrtumentsModal" src="https://images.pexels.com/photos/995301/pexels-photo-995301.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Instruments</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#insrtumentsModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4  ">
               <div class="card">
                  <img class="card-img-top" data-toggle="modal" data-target="#sportsModal" src="https://images.pexels.com/photos/61135/pexels-photo-61135.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Sports</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#sportsModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
               <div class="card">
                  <img class="card-img-top"  data-toggle="modal" data-target="#booksModal" src="https://images.unsplash.com/photo-1521714161819-15534968fc5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Books</h5>
                     <a href=" " class="btn btn-outline-danger" data-toggle="modal" data-target="#booksModal"><i class="fas fa-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>

         <!------------------------------------->
         <!-- FOURTH ROW ->
         <!------------------------------------>   
		  
         <div class="row">
            <div class ="col-lg-3 mb-4 smallpic" >
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1531320512173-3a98af29a66c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Photography</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Fitness</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.pexels.com/photos/1040685/pexels-photo-1040685.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Cooking</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1460398495418-62c9b5d79fbf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Art</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
		  
         <!------------------------------------->
         <!-- FIFTH ROW ->
          <!------------------------------------> 
		  
         <div class="row">
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1478641300939-0ec5188d3802?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Poetry</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1506196533592-e26941aecc9d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Travel</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1453227588063-bb302b62f50b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Pets</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Startups</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
		  
		  
		  
		<!------------------------------------->
        <!-- SIXTH ROW ->
        <!------------------------------------> 
		  
         <div class="row">
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1464802686167-b939a6910659?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1033&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Space</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Singing</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1525012758503-e9e7c93032b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Bike Rides</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
            <div class ="col-lg-3 mb-4">
               <div class="card">
                  <img class="card-img-top" src="https://images.pexels.com/photos/270837/pexels-photo-270837.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                  <div class="card-body d-flex justify-content-between">
                     <h5 class="card-title">Dance</h5>
                     <a href=" " class="btn btn-outline-danger"><i class="far fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <!------------------------------------->
         <!--here container end ->
         <!------------------------------------> 
		  
      </div>
	   
	   
 <!------------------------------------->
 <!--MODALS STARTS HERE ->
 <!------------------------------------>       
	   
	   
	  <!---------->
      <!--Music-->
      <!----------> 
	   
      <div class="modal fade" id="musicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chose your type of Music?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="pop">
                        <div class = "overlay">
                           <h4 id="hidden">Pop</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1527683611643-4009f3a76197?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="rap">
                        <div class = "overlay">
                           <h4>Rap</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.pexels.com/photos/697672/pexels-photo-697672.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="melody">
                        <div class = "overlay">
                           <h4>Melody</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1482476/pexels-photo-1482476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="edm">
                        <div class = "overlay">
                           <h4>EDM</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/230800/pexels-photo-230800.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="country">
                        <div class = "overlay">
                           <h4>Country</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1519326773765-3ae3b02c44cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="rock">
                        <div class = "overlay">
                           <h4>Rock</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="musicselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	  
	  <!---------->
      <!--Movies-->
      <!---------->
	   
	   <div class="modal fade" id="moviesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">What are You ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
				
               <div class="modal-body">
                 
				   <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1543831973-481fbf6dc4a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80">
						 <div class = "overlay pt-2">
                           <h4>Sci-Fi</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1598182/pexels-photo-1598182.jpeg?auto=compress&cs=tinysrgb&h=650&w=940">
						  <div class = "overlay pt-2">
                           <h4>Horror</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1115680/pexels-photo-1115680.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
						 <div class = "overlay pb-1">
                           <h4>Comedy</h4>
                        </div>
                     </div>
                  </div>
				   
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-4 subint">
                        <img class="card-img-top" src="https://images.pexels.com/photos/163347/war-desert-guns-gunshow-163347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
						 <div class = "overlay">
                           <h4>Action</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1518610424324-79ca316bd290?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
						 <div class = "overlay pb-3">
                           <h4>Adventure</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1458040937381-49c067dfd49a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
						 <div class = "overlay pb-3">
                           <h4>Mystery</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/5390/sunset-hands-love-woman.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
						 <div class = "overlay">
                           <h4>Love</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1514539079130-25950c84af65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80">
						 <div class = "overlay">
                           <h4>Fantasy</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1531907700752-62799b2a3e84?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
						 <div class = "overlay">
                           <h4>Super Hero</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="musicselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
      
	  <!---------->
      <!--Games-->
      <!---------->
	   
      <div class="modal fade" id="gamesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">What are You ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
				   
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top " src="https://c1.staticflickr.com/5/4711/39943037982_cfc6bfd3c2_b.jpg">
						 <div class = "overlay">
                       		<h4 class="hide">Fortnite</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://c1.staticflickr.com/8/7305/12844824643_d337810b76_b.jpg">
						 <div class = "overlay">
                          	<h4 class="hide">Minecraft</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint" src="https://c1.staticflickr.com/5/4612/40176727491_31da2b03d8_b.jpg">
						 <div class = "overlay">               
						 	<h4 class="hide"> PUBG	</h4>
						 </div>
                     </div>
                  </div>
				   
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint mb-3" src="https://c1.staticflickr.com/9/8110/8638067405_786d6104b5_b.jpg">
						 <div class = "overlay">
                         	<h4 class="hide">Clash of Clans</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint mt-3" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/08/DotA2.jpg/330px-DotA2.jpg">
						 <div class = "overlay">
                           	<h4 class="hide">Dota 2</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint" src="Call_of_Duty_Black_Ops_4_official_box_art%20(1).jpeg">
						 <div class = "overlay">
                           	<h4 class="hide">Call of Duty Black Ops 4</h4>
                        </div>
                     </div>
                  </div>
				   
				    <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/77/League_of_Legends_logo.png/330px-League_of_Legends_logo.png">
						 <div class = "overlay">
                           	<h4 class="hide">League of Legends</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint mt-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Need_For_Speed_logo.svg/1280px-Need_For_Speed_logo.svg.png">
						 <div class = "overlay">
                          	<h4 class="hide">Need for Speed</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top subint" src="http://c1.staticflickr.com/3/2852/33848624946_4f501f796b_b.jpg">
						 <div class = "overlay">
                          	<h4 class="hide">Clash Royal</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="musicselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	  <!---------->
      <!--Tech-->
      <!----------> 
	   
      <div class="modal fade" id="techModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">What Tech do you like?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.unsplash.com/photo-1519558260268-cde7e03a0152?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="pop">
                        <div class = "overlay">
                           <h4>IOT</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/756439/pexels-photo-756439.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="rap">
                        <div class = "overlay">
                           <h4>VR</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1413708617479-50918bc877eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1953&q=80" alt="melody">
                        <div class = "overlay">
                           <h4>Gadgets</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1516245834210-c4c142787335?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80" alt="edm">
                        <div class = "overlay">
                           <h4>Blockchain</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1535136072409-ff0c7a947733?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1032&q=80" alt="country">
                        <div class = "overlay">
                           <h4>Arduino</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1509803874385-db7c23652552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="rock">
                        <div class = "overlay">
                           <h4>Cloud</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="techselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	   
	  <!---------------->
      <!--Software Dev-->
      <!----------------> 
	   
      <div class="modal fade" id="softModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">What do you Develop?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
         				   
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.pexels.com/photos/270404/pexels-photo-270404.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="pop">
                        <div class = "overlay">
                           <h4>WEB</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/777001/pexels-photo-777001.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="rap">
                        <div class = "overlay">
                           <h4>Game</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint mb-3">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="melody">
                        <div class = "overlay">
                           <h4>Coding</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1506729623306-b5a934d88b53?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="edm">
                        <div class = "overlay">
                           <h4>UI</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1516089996551-0fe8a38413b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="country">
                        <div class = "overlay">
                           <h4>App</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/97077/pexels-photo-97077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260x" alt="rock">
                        <div class = "overlay">
                           <h4>AI</h4>
                        </div>
                     </div>
                  </div>
                  </div>
               
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="musicselect()">Save </button>
               </div>
				</div>
            </div>
         </div>
      
	   
	   
	  <!---------------->
      <!--TV Series-->
      <!----------------> 
	   
      <div class="modal fade" id="seriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chose your type of Music?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
				            <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e0/Game_of_Thrones_Season_8.png/330px-Game_of_Thrones_Season_8.png" alt="pop">
                        <div class = "overlay">
                          <h4 class="hide">Game of Thrones</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://upload.wikimedia.org/wikipedia/en/c/c1/You_%28TV_series%29_intertitle.png" alt="rap">
                        <div class = "overlay">
                           <h4 class="hide">YOU</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/61/Breaking_Bad_title_card.png/375px-Breaking_Bad_title_card.png" alt="melody">
                        <div class = "overlay">
                           <h4 class="hide">Breaking Bad</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://farm4.staticflickr.com/3800/9638057459_2faf06b178_b.jpg" alt="edm">
                        <div class = "overlay">
                          <h4 class="hide">Friends</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://upload.wikimedia.org/wikipedia/en/9/98/Riverdale.png" alt="country">
                        <div class = "overlay">
                           <h4 class="hide">Riverdale</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://upload.wikimedia.org/wikipedia/en/thumb/3/32/Rick_and_Morty_opening_credits.jpeg/375px-Rick_and_Morty_opening_credits.jpeg" alt="rock">
                        <div class = "overlay">
                           <h4 class="hide">Rick and Morty</h4>
                        </div>
                     </div>
                  </div>
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   

               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="seriesselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	  <!---------------->
      <!--Instruments-->
      <!----------------> 
	   
      <div class="modal fade" id="insrtumentsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chose your type of Music?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="pop">
                        <div class = "overlay">
                           <h4>Guitar</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1512165187346-ae48e51df3a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="rap">
                        <div class = "overlay">
                           <h4>Piano</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="melody">
                        <div class = "overlay">
                           <h4>Drums </h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1460036521480-ff49c08c2781?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80" alt="edm">
                        <div class = "overlay">
                           <h4> Violin</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1524392749318-209b690c93c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="country">
                        <div class = "overlay">
                           <h4>Tabla </h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/159278/launch-pad-music-live-band-stage-159278.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="rock">
                        <div class = "overlay">
                           <h4> Launchpad</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="instrumentsselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	  <!---------------->
      <!--Sports-->
      <!----------------> 
	   
      <div class="modal fade" id="sportsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chose your type of Sport?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.pexels.com/photos/364308/pexels-photo-364308.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="pop">
                        <div class = "overlay">
                           <h4 class="hide"> Football</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1752757/pexels-photo-1752757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="rap">
                        <div class = "overlay">
                           <h4 class="hide">  Basketball</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="melody">
                        <div class = "overlay">
                           <h4 class="hide">Tennis </h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/976873/pexels-photo-976873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="edm">
                        <div class = "overlay">
                           <h4 class="hide"> Table Tennis</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1594943/pexels-photo-1594943.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="country">
                        <div class = "overlay">
                           <h4 class="hide">Cricket </h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.pexels.com/photos/1415810/pexels-photo-1415810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="rock">
                        <div class = "overlay">
                           <h4 class="hide"> Swimming</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="sportsselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	  <!--------->
      <!--Books-->
      <!---------> 
	   
      <div class="modal fade" id="booksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chose your type of Music?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-3 subint">
                        <img class="card-img-top  " src="https://images.unsplash.com/photo-1531501410720-c8d437636169?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="pop">
                        <div class = "overlay">
                           <h4>Fiction</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top mt-1" src="https://images.unsplash.com/photo-1534774592507-488885376ad3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="rap">
                        <div class = "overlay">
                           <h4 class="mb-3">Biography</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1473755504818-b72b6dfdc226?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="melody">
                        <div class = "overlay black">
                           <h4>Novels</h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1544059926-4e033d2cccfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1069&q=80" alt="edm">
                        <div class = "overlay">
                           <h4>Thriller</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1458040937381-49c067dfd49a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="country">
                        <div class = "overlay">
                           <h4>Mystery</h4>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 subint">
                        <img class="card-img-top " src="https://images.unsplash.com/photo-1507413245164-6160d8298b31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="rock">
                        <div class = "overlay">
                           <h4>Science</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer pr-3">
                  <button type="button" class="btn btn-primary musicbtn " data-dismiss="modal" onclick="booksselect()">Save </button>
               </div>
            </div>
         </div>
      </div>
	   
	   
	   
   </body>
</html>
'?>
