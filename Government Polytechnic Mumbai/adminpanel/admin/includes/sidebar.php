
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Dashboard - <?php $_SESSION['username']?></title>

     <!-- google font -->

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/studentstyle.css">
  </head>

    <body>
    


               </body>
    </html>
    

























    <!-- <div class="app-container app-theme-dark body-tabs-shadow fixed-sidebar fixed-header">  -->
    <div class="app-sidebar sidebar-shadow">
    
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    

                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                               











































 



                <li class="app-sidebar__heading">  <button type="button" class="btn btn-light"><a href="Home1.php">
                <i class="bi bi-house-door-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg>
                    DASHBOARD</a></button></li>

<!-- <li class="app-sidebar__heading">  <button type="button" class="btn btn-outline-warning"><a href="home.php">
Dashboards</a></button>   btn btn-warning -->
</li>
<li class="app-sidebar__heading"class="btn btn-dark">MANAGE COURSE</li>
<li>
    <a href="#">
     <!-- <button type="button" class="btn btn-warning"><a href="home.php">DASHBOARD</a></button> -->

           <!-- <i class="metismenu-icon pe-7s-display2"></i>   -->
           <i class="metismenu-icon pe-7s-display2"></i> 
           
             <button type="button"class="btn btn-primary"><i class="bi bi-book-fill"></i>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
<path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
              COURSE    </button>
           <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
        
    </a>
    <ul>
        <li>
             <a href="#" data-toggle="modal" data-target="#modalForAddCourse"> 
                <!-- <i class="metismenu-icon"></i> -->
                
                <!-- <button type="button" class="btn btn-outline-light">Add Course</button> -->
                <button type="button" class="btn btn-outline-warning">Add Course</button></br>
            </a>
        </li>
        <li>
            <a href="home.php?page=manage-course">
                <!-- <i class="metismenu-icon"> 
                </i> -->
                <button type="button" class="btn btn-outline-warning">Manage Course</button>
                
            </a>
        </li>
       
    </ul>
</li>

<li class="app-sidebar__heading"class="btn btn-dark">MANAGE EXAM</li>
<li>
    <a href="#">
         <i class="metismenu-icon pe-7s-display2"></i>
         <button type="button" class="btn btn-danger"><i class="bi bi-vector-pen"></i>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
<path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
</svg>
         EXAM</button>
         
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="#" data-toggle="modal" data-target="#modalForExam">
                <i class="metismenu-icon"></i>
                <button type="button" class="btn btn-outline-info">Add Exam</button>
                
            </a>
        </li>
        <li>
            <a href="home.php?page=manage-exam">
                <i class="metismenu-icon"> </i>
                <button type="button" class="btn btn-outline-info">Manage Exam</button>
                
            </a>
        </li>
       
    </ul>
</li>


<li class="app-sidebar__heading"class="btn btn-dark">MANAGE EXAMINEE</li>
<li>
    <a href="" data-toggle="modal" data-target="#modalForAddExaminee">
    <i class="bi bi-person-fill"></i>
       
        <button type="button" class="btn btn-warning"><i class="bi bi-person-plus-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        
        
        ADD STUDENT</button>
        
    </a>
</li>
<li>
    <a href="home.php?page=manage-examinee">
        <i class="metismenu-icon pe-7s-users">
        </i>
        

<button type="button" class="btn btn-info">
<i class="bi bi-person-fill"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


</svg>
        MANAGE STUDENT</button>
        
        
    </a>
</li>
 


<li class="app-sidebar__heading">REPORTS</li>
<li>
    <a href="home.php?page=examinee-result">
        <i class="metismenu-icon pe-7s-cup">
        </i>
        <button type="button" class="btn btn-success">
        <i class="bi bi-hand-thumbs-up-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
</svg>
        STUDENT RESULT</button>
        
    </a>
</li>


 <li class="app-sidebar__heading"class="btn btn-dark">FEEDBACKS</li>
<li>
    <a href="home.php?page=feedbacks">
        <i class="metismenu-icon pe-7s-chat">
        </i>
        <button type="button" class="btn btn-secondary">
       DOUBT SOLVING SECTION
       </button>
        
    </a>
</li>

<!-- 
<li class="app-sidebar__heading"class="btn btn-dark">RANKING</li>
<li>
    <a href="home.php?page=ranking-exam">
        <i class="metismenu-icon pe-7s-cup">
        </i>
        <button type="button" class="btn btn-dark"> STUDENT RANKING BY EXAM</button>
       
    </a>
</li> 
 -->






</div>
                    </div>
                </div>  