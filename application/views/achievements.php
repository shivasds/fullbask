<style>
.card-link,.card-link:hover{
    text-decoration: none;
    color: inherit;
}
.card{
    background: white;
    margin-bottom:20px;
}
/* .well{
    background-image: url("http://localhost:8081/assets/img/listing-bg.png");
}
.card-block{
    background: #d1dfe0;
  } */

</style>
<div class="container-fluid">
<div class="row about-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12 pull-right">
                    <h3>ACHIEVEMENTS</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 link">
        <a href="http://localhost:8081/">Home</a> &gt; ACHIEVEMENTS
    </div>
</div>
</div>
<br>
<div class="achievement-section">
<br>
<div class="container">
<div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="h2">OUR ACHIEVEMENTS</h2>
                </div>
            </div>
            <div class="clearfix"></div>

<ul class="nav nav-pills">
            <?php 
           // $achievements = json_decode(json_encode($achievements),true);
           // print_r($achievements);
           // echo array_count_values(date('Y', strtotime($achievements->award_date)));
 
        $s_date = date('Y');
        $c_date='1947'; 
        $year =array();
        $i=1;

 foreach ($achievements as $achievements  ) { 
    //echo $s_date.'=='.date('Y', strtotime($achievements->award_date)).' \n';
    if($s_date==date('Y', strtotime($achievements->award_date)))
    {   

            if($s_date == date('Y'))
            {
                echo '<li class="active"><a href="#tab-'.$i.'" data-toggle="tab">Award '.$s_date.'</a></li>';
                $year[$i] = $s_date; 
                $s_date = $s_date-1;
                //echo $s_date;
                $i++;
            }
            elseif($s_date == date('Y')-1 && $i==1)
            {
 
                echo '<li class="active"><a href="#tab-'.$i.'" data-toggle="tab">Award '.$s_date.'</a></li>'; 
                $year[$i] = $s_date;
                $s_date = $s_date-1;
                $i++;
            } 
            else 
            {
               echo '<li><a href="#tab-'.$i.'" data-toggle="tab">Award '.$s_date.'</a></li>'; 
               $year[$i] = $s_date;
               $s_date = $s_date-1;
                $i++;
            } 
       
    }
    elseif ($s_date>date('Y', strtotime($achievements->award_date))) {
        $s_date = date('Y', strtotime($achievements->award_date));

         echo '<li><a href="#tab-'.$i.'" data-toggle="tab">Award '.$s_date.'</a></li>'; $year[$i] = $s_date;$i++;
      }  
      else
      {
//echo "null manual";
      }

  /*  else
         {$s_date = date('Y', strtotime($achievements->award_date));}

   /* else
    {
        echo '<li><a href="#tab-'.$i.'" data-toggle="tab">Award '.$s_date.'</a></li>'; 
               $s_date = $s_date-1;
               echo $s_date;
                $i++;
    } */
    
} 
  //echo $i;           ?>
   <!-- Nav pills --> 
 
 
</ul>

<!-- Tab panes -->
<div class="tab-content well">
    <?php
    //print_r($year);
    for($x=$i-1;$x>0;$x--)

    { 
if($x==1)
{
  //echo $year[$x]. ' = '. $x;
    $this->load->model('achievements_model');
    $data =  $this->achievements_model->load_by_year($year[$x]);
   // print_r($data);
   ?>
    <div class="tab-pane active" id="tab-<?=$x?>">
      <div class="row">
            <?php
            foreach ($data as $data) {
        
    
        ?>
            <div class="col-sm-4 col-md-4 col-lg-4">
                     
                            <div class="card" data-toggle="modal" data-target="#exampleModal">
                                <div class="card-link">
                                   <img class="card-img-top" style="height: 250px;background-image:url(<?=base_url('uploads/achievements/').$data['image'];?>);background-size: contain;width: 100%;background-repeat: no-repeat;height: 195px;background-position: center;">
                                </div>
                                <div class="card-block" style="min-height:190px;margin-bottom: 5px;position: relative;">
                                <div class="card-link">
                                    <h4 class="card-title mt-3"></h4><h3><?=$data['image_desc'];?></h3>
                                    <?=$data['comment'];?>

                                  </div>
                                </div>
                            </div>
                        
            </div> 
              <?php } ?>
        </div>
  </div>
    <?php


    }
    else
    {
    // echo $year[$x]. ' = '. $x;
        
        $data =  $this->achievements_model->load_by_year($year[$x]);
    ?>

<div class="tab-pane" id="tab-<?=$x?>">
      <div class="row">
         <?php
         foreach ($data as $data) {
       
  
           ?>
            <div class="col-sm-4 col-md-4 col-lg-4">
                        
                            <div class="card" data-toggle="modal" data-target="#exampleModal">
                                <div class="card-link">
                                <img class="card-img-top" style="height: 250px;background-image:url(<?=base_url('uploads/achievements/').$data['image'];?>);background-size: contain;width: 100%;background-repeat: no-repeat;height: 195px;background-position: center;">
                                </div>
                                <div class="card-block" style="min-height: 190px;margin-bottom: 5px;position: relative;">
                                
                                <div class="card-link">
                                    <h4 class="card-title mt-3"></h4><h3><?=$data['image_desc'];?></h3>
                                    <?=$data['comment'];?>

                                    </div>
                                </div>
                            </div>
                        
                    </div> 
                <?php } ?>
            </div>
      </div>
  <?php
    }
    $i--;
        }
        ?>
    
  
</div>


</div>

                    <div class="clearfix">
        
        </div>
        
        <br>
    </div>
 
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Achievents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h1>HELLO</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
</div> -->