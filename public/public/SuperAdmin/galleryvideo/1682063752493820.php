 <? ob_start(); ?>
 <?php include_once 'include/head.php'?>
 
 
 <?php 

if(isset($_GET['id'])){
	$id=preg_replace('#[^0-9]#i', '', $_GET["id"]);
    
     $sql = mysql_query("UPDATE support_mail SET read_status='1' WHERE support_mail_id ='$id' "); 
             
    }
    ?>
 
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li>View Message</li>
                                </ul>
                                <h4>View Message</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        <div class="row">
                            
                            
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                
                             
                                
                                <div class="panel-group panel-group-msg" id="accordion">
                                     <?                   
                $result=mysql_query("select * FROM support_mail where support_mail_id ='$id' ");
                $row=mysql_fetch_array($result);
                $i=1;
                ?>

            <?do{?>       
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <span class="time text-muted pull-right"><i class="fa fa-paperclip mr5"></i> <?echo $row["date"];?></span>
                                                <a data-toggle="collapse" href="#collapseOne">
                                                    <?echo $row["first_name"];?> <?echo $row["last_name"];?>
                                                    <small>&lt;<?echo $row["email"];?>&gt;</small>
                                                    (<?echo $row["phone"];?>)
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                               <p><?echo substr($row["text"],0,5000);?> </p>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                   <?}while($row=mysql_fetch_array($result));?>   
                                    
                                    
                                </div><!-- panel-group -->
                                
                                
                        </div>
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
                </div>
            </div><!-- mainwrapper -->
        </section>


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>

        <script src="js/custom.js"></script>

    </body>
</html>
