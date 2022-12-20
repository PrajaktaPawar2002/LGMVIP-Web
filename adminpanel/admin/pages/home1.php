
<!-- 
<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
            <div class="app-page-title">
                    <div class="page-title-actions">  
                        <div class="d-inline-block dropdown">   
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                 </div>
            </div>            
            <div class="row">
                

 -->

    



 <!-- <div class="vid-content"> -->
<!-- <a class="navbar-brand"><h1 class="my-content">Welcome To Online Exam</a></h1>  -->
 
 <!-- <a class="navbar-brand" ><h1 class="my-content">Welcome To Online Exam !</h1></a>
 <a class="navbar-brand" ><small class="my-content">Government Poltechnic Mumbai !</small><br> 

  -->
<!-- </div> -->
                              
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
<!-- Bootrap CSS -->
<link rel="stylesheet" href="css3/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css3/all.min.css">
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">



<!-- Custom CSS -->
<link rel="stylesheet" href="css3/style.css">

  

        
</a>
</li>

        </ul>
        </div>
</nav>

<!-- End Navigation -->






<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home.php">
    <button type="button" class="btn btn-outline-warning" >
        <i class="bi bi-arrow-left-circle-fill"></i>  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
        HOME</button>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>










































<div class="col-sm-9 mt-5">
    <div class ="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
            <div class="card text-Black bg-danger mb-3"
            style="max-width: 18rem;">
            <div class="card-header">TOTAL COURSE</div>
            <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
            <div class="card-body">
                <h4 class="card-title">
                GPM
            </h4>
            <a class="btn text-white" href="home.php?page=manage-course">View</a>
</div>
</div>
</div>
        <div class="col-sm-4 mt-5">
            <div class="card text-Black bg-success mb-3"
            style="max-width: 18rem;">
            <div class="card-header">TOTAL EXAM</div>
            <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
            <div class="card-body">
                <h4 class="card-title">
                GPM
</h4>
<a class="btn text-white" href="home.php?page=manage-exam">View</a>
</div>
</div>
</div>
<div class="col-sm-4 mt-5">
            <div class="card text-Black bg-warning mb-3"
            style="max-width: 18rem;">
            <div class="card-header">TOTAL STUDENT</div>
            <div class="widget-numbers text-white">
            <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                    
                                </div>
            <div class="card-body">
                <h4 class="card-title">
                GPM
</h4>
<a class="btn text-white" href="home.php?page=manage-examinee">View</a>
</div>
</div>
</div>




<div class="col-sm-4 mt-5">
            <div class="card text-Black bg-info mb-3"
            style="max-width: 18rem;">
            <div class="card-header">STUDENT RESULT</div>
            
            <div class="card-body">
                <h4 class="card-title">
                GPM
</h4>
<a class="btn text-white" href="home.php?page=examinee-result">View</a>
</div>
</div>
</div>
<div class="col-sm-4 mt-5">
            <div class="card text-Black bg-secondary mb-3"
            style="max-width: 18rem;">
            <div class="card-header">ALL FEEDBACKS</div>
            
            <div class="card-body">
                <h4 class="card-title">
                GPM
</h4>
<a class="btn text-white" href="home.php?page=feedbacks">View</a>
</div>
</div>
</div>

<div class="mx-5 mt-5 text-center">

  </body> 
    
    </html>



























            <!-- <?php include("includes/graph.php"); ?> -->
      
        
        </div>
         
    </div>
