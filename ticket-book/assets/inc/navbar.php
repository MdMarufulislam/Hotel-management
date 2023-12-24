<?php
   /**
    *Server side code to get details of single passenger using id 
    */
    $aid=$_SESSION['pass_id'];
    $ret="select * from orrs_passenger where pass_id=?";//fetch details of pasenger
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
<style>
.redirect_Ticket{
  background-color: #4285f4;
    color: white;
    /* border: 1px solid red; */
    padding: 5px 10px;
    border-radius: 20px;
    text-decoration: none;
    list-style: none;
  }
  .redirect_Ticket:hover{
     color:white;
    
  }

  .rakib{
    display: flex;
    align-items: center;
    justify-content: center;

  }

  .ticket{
    font-size: 24px;
    font-weight: bold;
    text-align: center;
  }
.rktext{    justify-content: center;}
</style>
    <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid ">
          <div class="be-navbar-header rktext"><a class="ticket" href="pass-dashboard.php">Ticket</a>
          </div>
          <div class="page-title rakib" >
            
          <div><a href="../#home" class="redirect_Ticket">
        Home
    </a></div> </div>
          <!-- <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/profile/<?php echo $row->pass_dpic;?>" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <div class="dropdown-menu" role="menu">     
                  <a class="dropdown-item" href="pass-profile.php"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="pass-logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
          </div> -->
        </div>
      </nav>
<?php }?>