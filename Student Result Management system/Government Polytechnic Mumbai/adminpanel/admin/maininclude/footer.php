<!-- start student registartion Modal-->
<!-- Button trigger modal -->

      
      <!-- Modal -->
      <div class="modal fade" id="sturegmodalCenter" tabindex="-1" aria-labelledby="sturegmodalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sturegmodalCenter">Student Registration</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- start student registartion Modal-->

                <!-- Body -->
                <form>
  <div class="mb-3">
    <label for="stuname" class="form-label">Name</label>
    <input type="text" class="form-control" id="stuname" aria-describedby="emailHelp">
    <div id="stuname" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="stuemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="stuemail">
  </div>
  <div class="mb-3">
    <label for="stupass" class="form-label">New Password</label>
    <input type="password" class="form-control" id="stupass">
  </div>
  
  <button type="submit" class="btn btn-primary"onclick="addstu()">Sign up</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>



              








                 
<!-- End student registartion Modal-->

<!-- start student Login Modal-->

<div class="modal fade" id="stuLoginmodalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stuLoginModalCenter">Student Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<form>
  <!-- Start Student Login Form -->
  <form id="stuLoginForm">
  <div class="mb-3">
    <label for="stuLogemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" id="stuLoginBtn">Login</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
</form>




              
<!-- End student Login Modal-->


    
<!---Jquery and Bootrap JavaScript -->
<script src="js1/jquery.min.js"></script>
<script src="js1/popper.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<!---Font Awesome Js -->
<script src="js1/all.min.js"></script>

<!---Student ajax call Javascript -->
<script type="text/javascript" src="js1/ajaxrequest.js"></script>



</body>
</html>
