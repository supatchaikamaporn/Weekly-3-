	
<!DOCTYPE html>
<html lang="en">
	 <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622; 
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
     
      .banner {
      position: relative;
      height: 280px;
      background-image: url("https://seeklogo.com/images/D/denso-logo-55E00551B5-seeklogo.com.png");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 10px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      } 
      
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
	  
	 .radio span {
     margin-left: 25px;
      }
}

    </style>
  <body>
  <div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
	<?php
	include("header.php")?>
		
	    <div class="main-panel">
          <div class="content-wrapper">
		  	  
            <div class="row">
			
		  
			<li class="nav-item sidebar-actions">
              <span class="nav-link">  
			 
              </span>
            </li>
			
			<div class="col-12 grid-margin stretch-card">
            
			<div class="card">

				 <h3 class="page-title" style="background-color:#b66dff">
					<span class="page-title-icon bg-gradient-primary text-white mr-10">
					  <i class="mdi mdi-border-color" ></i>
					</span> <b class= "text-white" style="text-align: center" >Process Change Report</b> 
				  </h3>
				  
	<fieldset>
        <!-- <legend class="text-white"  style="background-color:#b66dff"><p style="text-align: center;"><b>Process Change Report Form</b></p></legend> -->
			
		  <div class="card-body">  	
        
<!-- Start form section 1 -->      
					<div class="card-header">
						<div class="columns">
							<div class="item">
									<!-- have Not data input //type = hidden -->
									<input id="name" type="hidden" name="name" /> 		
							</div>
							<div class="item">
									<label for="Employee_No"><b>Create Date :</b><span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>
							
							<div class="item">
									<label for="name"><b>Department / Section :</b><span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No"><b>Registant :</b><span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>
							<div class="item">
									<label for="Employee_No"><b>No.(Automatic) :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>
						</div>
					</div>	
<!-- end form section 1 -->					
          <br>
          


<!-- Start form section 2 -->          
					<div class="card-header">
						<div class="item">
								<div align ="left">
									<input type="radio" value="none" id="radio_company_SDM" name="choice_company"/>
									<label for="radio_company_SDM" class="radio"><span>Normal</span></label>
									<input  type="radio" value="none" id="radio_company_SKD" name="choice_company"/>
									<label for="radio_company_SKD" class="radio"><span>Urgent</span></label>
								</div>     
						</div>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////-->				
						<div class="columns">
							<div class="item">
									<label for="name">Addition item :<span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No">Anuual Plan No :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>				
						</div>
							<div class="item">
										<label for="name">Title :<span></span></label>
										<input id="name" type="text" name="name" />
							</div>
	<!--/////////////////////////////////////////////////////////////////////////////////////////////////////-->				
						<div class="columns">	
							<div class="item">
									<label for="name">Change type :<span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No">Rank :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>	
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////-->				
							<div class="item">
									<label for="name">Customer submission :<span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No">Planning review :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>	
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////-->
							<div class="item">
									<label for="name">Product :<span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No">Part name :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>	
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////-->
							<div class="item">
									<label for="name">Part number :<span></span></label>
									<input id="name" type="text" name="name" />
							</div>
							<div class="item">
									<label for="Employee_No">Change point :<span></span></label>
									<input id="Employee_No" type="text" name="Employee_No" required />
							</div>
						
						</div>
						
						<br>
					<label>Priority Management Category :</label>
					<div class="row">
						<div class="col-md-3">
                          <div class="form-group">
						  <label></label>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">  
								</label>
								<img src="../assets/images/simbol/S2-removebg.png" class="imageC2" >
                            </div>
							<div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"></label>
								<img src="../assets/images/simbol/S3-removebg.png" class="imageC2" >
                            </div>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" >  </label>
								<img src="../assets/images/simbol/S1-removebg.png" class="imageC2" >
                            </div>
                            
                          </div>
                        </div>
						<div class="col-md-3">
                           <div class="form-group">
						  <label></label>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">  
								</label>
								<img src="../assets/images/simbol/F2-removebg.png" class="imageC2" >
                            </div>
							<div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"></label>
								<img src="../assets/images/simbol/F3-removebg.png" class="imageC2" >
                            </div>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" >  </label>
								<img src="../assets/images/simbol/F1-removebg.png" class="imageC2" >
                            </div>
                            
                          </div>
                        </div>
						<div class="col-md-3">
                          <div class="form-group">
						  <label></label>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">  
								</label>
								<img src="../assets/images/simbol/E2-removebg.png" class="imageC2" >
                            </div>
							<div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"></label>
								<img src="../assets/images/simbol/E3-removebg.png" class="imageC2" >
                            </div>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" >  </label>
								<img src="../assets/images/simbol/E1-removebg.png" class="imageC2" >
                            </div>
                            
                          </div>
                        </div>
						<div class="col-md-3">
                          <div class="form-group">
						  <label></label>
                            <div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">  
								</label>
								<img src="../assets/images/simbol/C2-removebg.png" class="imageC2" >
                            </div>
							<div class="form-check col-sm-6">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"></label>
								<img src="../assets/images/simbol/C3-removebg.png" class="imageC2" >
                            </div>    
                          </div>
                        </div>
                      </div>
            </div>
<!-- end form section 2 -->

<br>

<!-- Start form section 3  // Upload file-->
        
				<div class="card-header">
              <label>Details of Process Change :</label>
 
						<div class="columns">
                    <div class="item">                  
                      <label for="Employee_No">Create Date :<span></span></label>
                      <input id="Employee_No" type="text" name="Employee_No" required />      
                    </div>
                    
                    <div class="item">
                        <label for="Employee_No">Create Date :<span></span></label>
                        <input id="Employee_No" type="text" name="Employee_No" required />
                    </div>
                    
                    <div class="item">
                        <label for="name"><b>Department / Section :</b><span></span></label>
                        <input id="name" type="text" name="name" />
                    </div>
                    <div class="item">
                        <label for="Employee_No"><b>Registant :</b><span></span></label>
                        <input id="Employee_No" type="text" name="Employee_No" required />
                    </div>
                    <div class="item">
                        <label for="Employee_No"><b>No.(Automatic) :<span></span></label>
                        <input id="Employee_No" type="text" name="Employee_No" required />
                    </div>
						</div>
				</div>	
<!-- end form section 3 -->    

<br>

<!-- Start form section 4  // Upload file-->
                    
            <div class="card-header">
                          <label>Details of Process Change :</label>
            
                        <div class="columns">
                                <div class="item">                  
                                  <label for="Employee_No">Create Date :<span></span></label>
                                  <input id="Employee_No" type="text" name="Employee_No" required />      
                                </div>
                                
                                <div class="item">
                                    <label for="Employee_No"><b>Create Date :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                
                                <div class="item">
                                    <label for="name"><b>Department / Section :</b><span></span></label>
                                    <input id="name" type="text" name="name" />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>Registant :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>No.(Automatic) :<span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                        </div>
                    </div>	
<!-- end form section 4 -->    

<br>

<!-- Start form section 5  // Upload file-->
                    
                    <div class="card-header">
                          <label>Data attachments :</label>
            
                        <div class="columns">
                                <div class="item">                  
                                  <label for="Employee_No">Create Date :<span></span></label>
                                  <input id="Employee_No" type="text" name="Employee_No" required />      
                                </div>
                                
                                <div class="item">
                                    <label for="Employee_No"><b>Create Date :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                
                                <div class="item">
                                    <label for="name"><b>Department / Section :</b><span></span></label>
                                    <input id="name" type="text" name="name" />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>Registant :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>No.(Automatic) :<span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                        </div>
                    </div>	
<!-- end form section 5 -->    

<br>

<!-- Start form section 6  // Upload file-->
                    
                    <div class="card-header">
                          <label>Approve plan :</label>
            
                        <div class="columns">
                                <div class="item">                  
                                  <label for="Employee_No"><b>Create Date :</b><span></span></label>
                                  <input id="Employee_No" type="text" name="Employee_No" required />      
                                </div>
                                
                                <div class="item">
                                    <label for="Employee_No"><b>Create Date :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                
                                <div class="item">
                                    <label for="name"><b>Department / Section :</b><span></span></label>
                                    <input id="name" type="text" name="name" />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>Registant :</b><span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                                <div class="item">
                                    <label for="Employee_No"><b>No.(Automatic) :<span></span></label>
                                    <input id="Employee_No" type="text" name="Employee_No" required />
                                </div>
                        </div>
                    </div>	
<!-- end form section 6 -->    




					
					
					
	
					
					
		  
  
			  
          <div class="item">
            <label for="Section">Section<span>*</span></label>
            <input id="Section" type="text"   name="Section" />
          </div>
          <div class="item">
            <label for="Section_Code">Section Code<span>*</span></label>
            <input id="Section_Code" type="text"  name="Section_Code" required/>
          </div>
          <div class="item">
            <label for="Approved">Approved (Manaqer Up)<span>*</span></label>
            <input id="Approved" type="text"   name="Approved" />
          </div>
          <div class="item">
            <label for="Requester">Requester<span>*</span></label>
            <input id="Requester" type="text"   name="Requester" />
          </div>
          <div class="item">
            <label for="Position">Position<span>*</span></label>
            <input id="Position" type="text"   name="Position" />
          </div>
          <div class="item">
            <label for="Travei_to">Travei to<span>*</span></label>
            <input id="Travei_to" type="tel"   name="Travei_to" />
          </div>
		   <div class="item">
			  <label for="checkoutdate">Planned : Depart <span>*</span></label>
			
			  <input id="checkoutdate" type="date" name="checkoutdate" />
			   <!--<i class="fas fa-calendar-alt"></i>-->
			  </div>
			  <div class="item">
			  <label for="checkoutTime">Time<span>*</span></label>
			  <input id="checkoutTime" type="time" name="checkoutTime" />
			</div>
			
			
			 <div class="item">
			  <label for="checkindate">Schedule : Return <span>*</span></label>
			
			  <input id="checkindate" type="date" name="checkindate" />
			  <!--<i class="fas fa-calendar-alt"></i>-->
			  </div>
			  <div class="item">
			  <label for="checkinTime">Time<span>*</span></label>
			  <input id="checkinTime" type="time" name="checkinTime" />
			</div>
		  
		    <label for="Duration">Duration<span>*</span></label>
            <input id="Duration" type="number"   name="Duration" />
			
		   <div class="item">
            <label for="House_No">House No.(บ้านเลขที่)<span>*</span></label>
            <input id="House_No" type="text"   name="House_No" />
          </div>
          <div class="item">
            <label for="Village_No">Village No.(หมู่ที่)<span>*</span></label>
            <input id="Village_No" type="tel"   name="Village_No" />
          </div>
		  
		   <div class="item">
            <label for="Lane">Lane (ซอย)<span>*</span></label>
            <input id="Lane" type="text"   name="Lane" />
          </div>
          <div class="item">
            <label for="Road">Road (ถนน)<span>*</span></label>
            <input id="Road" type="tel"   name="Road" />
          </div> 
		  <div class="item">
            <label for="Sub_district">Sub-district (ตำบล / แขวง)<span>*</span></label>
            <input id="Sub_district" type="text"   name="Sub_district" />
          </div>
          <div class="item">
            <label for="District">District (อำเภอ / เขต)<span>*</span></label>
            <input id="District" type="tel"   name="District" />
          </div> 
		  <div class="item">
            <label for="Province">Province (จังหวัด )<span>*</span></label>
            <input id="Province" type="text"   name="Province" />
          </div>
          <div class="item">
            <label for="Postal_Code">Postal Code (รหัสไปรษณีย์)<span>*</span></label>
            <input id="Postal_Code" type="tel"   name="Postal_Code" />
          </div> 
		  
		  
		     
          <div class="question">
			<label>Personal Mobile Phone (ข้อมูลโทรศัพท์ส่วนบุคคล)</label>
			<div>
                <input type="radio" value="none" id="radio_1" name="Personal_Mobile"/>
                <label for="radio_1" class="radio"><span>นำโทรศัพท์ส่วนบุคคลติดตามไปด้วย</span></label>
			</div>
                <input  type="radio" value="none" id="radio_2" name="Personal_Mobile"/>
                <label for="radio_2" class="radio"><span>ฝากโทรศัพท์ส่วนบุคคลไว้ที่หัวหน้างงาน</span></label>
          </div>
             
		  <div>
            <label for="Purpose">Purpose (วัตถุประสงค์)<span>*</span></label>
           <textarea id="Purpose" rows="3"></textarea>
		  </div>
	</fieldset>
		<!-- </div> /////////////--> 
				 
				 
                  </div>
              </div> 
              </div>
                  <!--</div>
                </div>
              </div>-->
			  
            </div>

              </div>
            </div>
	</div>

	</div>	
	

  </body>
</html>