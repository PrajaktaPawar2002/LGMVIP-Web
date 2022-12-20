



<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                    <!-- <a class="navbar-brand" ><small class="my-content">Government Poltechnic Mumbai !</small><br>  -->
                    <!-- <h3>Example heading <span class="badge bg-secondary">New</span></h3> -->
                     <!-- <button type="button" class="btn btn-light">EXAM COURSE MANAGEMENT !!</button>  -->
                     <button type="button"  class="btn btn-outline-light">EXAM COURSE MANAGEMENT !!</button>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header"><button type="button" class="btn btn-secondary">EXAM COURSE LIST !!</button>
                    
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                            <!-- <button type="button" class="btn btn-dark">Dark</button> -->

                                <th class="text-left pl-4"><button type="button" class="btn btn-info">Course Name</button>
                               </th>
                                <th class="text-center" width="20%"><button type="button" class="btn btn-info">Action</button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                                if($selCourse->rowCount() > 0)
                                {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4">
                                                <?php echo $selCourseRow['cou_name']; ?>
                                            </td>
                                            <td class="text-center">
                                                <a rel="facebox" style="text-decoration: none;" class="btn btn-outline-info"   
                                                href="facebox_modal/updateCourse.php?id=<?php echo $selCourseRow['cou_id']; ?>" id="updateCourse">UPDATE</a>
                                             <button type="button" id="deleteCourse" data-id='<?php echo $selCourseRow['cou_id']; ?>' 
                                             class="btn btn-outline-danger">DELETE</button>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="2">
                                        <h3 class="p-3">No Course Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        
</div>
         
