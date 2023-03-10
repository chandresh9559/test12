<?php
$myTemplates = [
  'inputContainer' => '<div class="input-group input-group-outline">{{content}}</div>'
];
$this->Form->setTemplates($myTemplates);
?>

<div class="row">
  <div class="col-12">
    <!-- Navbar -->

    <!-- End Navbar -->
  </div>
</div>
</div>
<main class="main-content  mt-0">
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
                <p class="text-light text-center font-weight-bold">Enter your details to register</p>
                <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-facebook-f text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center px-1">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-github text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-google text-white text-lg"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">



              <?php echo $this->Form->create($user) ?>
              <?php echo $this->Form->control('user_profile.first_name', ['required' => false, 'class' => 'form-control mb-3', 'label' => ['class' => 'form-label']]) ?>
              <?php echo $this->Form->control('user_profile.last_name', ['required' => false, 'class' => 'form-control mb-3', 'label' => ['class' => 'form-label']]) ?>
              <?php echo $this->Form->control('email', ['required' => false, 'class' => 'form-control mb-3', 'label' => ['class' => 'form-label']]) ?>
              <label for="">Choose User Type</label><br>
              <?php echo $this->Form->radio(
                'user_type',
                [
                  ['value' => '1', 'text' => 'Owner'],
                  ['value' => '2', 'text' => ' General Contractor'],
                  ['value' => '3', 'text' => 'Sub-Contractor'],
                ]
              ); ?>
              <?= $this->Form->button(__('Sign Up'), ['class' => 'btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0']) ?>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <p class="mb-2 text-sm mx-auto">
                Don't have an account?
                <?php echo $this->Html->link(__('Sign in'), ['action' => 'login'], ['class' => 'text-primary text-gradient font-weight-bold']) ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer position-absolute bottom-2 py-2 w-100">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-12 col-md-6 my-auto">
          <div class="copyright text-center text-sm text-white text-lg-start">
            ?? <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart" aria-hidden="true"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="col-12 col-md-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
</main>