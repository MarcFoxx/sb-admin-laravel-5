@extends('layouts.dashboard')
@section('page_heading','Manual Lead Entry')
@section('section')
           

  <div class="col-lg-6">
                    <h2>Enter Lead into Infusionsoft</h2>
              
                      
                      <?php echo $leadEntryForm ?>


                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-2"></i></span>
                          <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" id="inf_field_FirstName" name="inf_field_FirstName" required="required">
                        </div>

                          <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope fa-2"></i></span>
                          <input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" id="inf_field_Email" name="inf_field_Email" required="required" validate="">
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone fa-3"></i></span>
                          <input type="text" class="form-control" placeholder="Phone (Optional)" aria-describedby="basic-addon1" id="inf_field_Phone1" name="inf_field_Phone1">
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-comment-o fa-3"></i></span>
                          <textarea class="form-control" placeholder="Questions or Comments" aria-describedby="basic-addon1"  id="inf_custom_QuestionsComments" name="inf_custom_QuestionsComments" rows="3"></textarea>

                        </div>


                        <div class="btn-center">
                          <button type="submit" class="btn btn-primary" value="Submit" aria-expanded="false">Connect</button>
                        </div>
</div> <!-- close responsive column --> 


  <div class="col-lg-6">
                    <h2>Scan Company by Website</h2>
              
                          <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope fa-2"></i></span>
                          <input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" id="inf_field_Email" name="inf_field_Email" required="required" validate="">
                          </div>

                          <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-globe fa-2"></i></span>
                          <input type="text" class="form-control" placeholder="Website" aria-describedby="basic-addon1" id="inf_field_Website" name="inf_field_Website" required="required" validate="">
                          </div>

                        <div class="btn-center">
                          <button type="submit" class="btn btn-primary disabled" value="Submit" aria-expanded="false">Scan</button>
                        </div>
</div> <!-- close responsive column --> 



            
@stop
