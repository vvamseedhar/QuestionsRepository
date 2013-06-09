<div id="wrap">
<div id="top">
    <!-- .navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html">Metis</a>
                <!-- .topnav -->
                <div class="btn-toolbar topnav">
                    <div class="btn-group">
                        <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                        data-original-title="Show / Hide Sidebar" data-placement="bottom">
                            <i class="icon-resize-horizontal"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" data-original-title="E-mail" data-placement="bottom">
                            <i class="icon-envelope"></i>
                            <span class="label label-warning">5</span>
                        </a>
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Messages"
                           data-placement="bottom">
                            <i class="icon-comments"></i>
                            <span class="label label-important">4</span>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Document"
                           data-placement="bottom">
                            <i class="icon-file"></i>
                        </a>
                        <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                           data-original-title="Help" data-toggle="modal">
                            <i class="icon-question-sign"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                           href="login.html"><i class="icon-off"></i></a></div>
                </div>
                <!-- /.topnav -->
                <div class="nav-collapse collapse">
                    <!-- .nav -->
                    <ul class="nav">
                        <li class="active"><a href="index.html">Dashboard</a></li>
                        <li><a href="table.html">Tables</a></li>
                        <li><a href="file.html">File Manager</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                Form Elements <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="form-general.html">General</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.navbar -->
</div>
</div>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo HTTP_ROOT;?>">Ques...Repo...</a>
      <div class="nav-collapse collapse">
        <div class="bs-docs-example">
            <ul class="nav nav-pills">
              <li class="active"><a href="<?php echo HTTP_ROOT; ?>">Dashboard</a></li>
              <li class="dropdown">
                  <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="javascript:void(0);">
                                      <span class="icon-user"></span>
                      Users 
                      <b class="caret"></b>
                  </a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo HTTP_ROOT; ?>?action=addusers">Add User</a></li>
                                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo HTTP_ROOT; ?>?action=userslist">Users List</a></li>

                </ul>
              </li>
                              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
                <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>  /tabs 
            
          </div> 
      </div>
    </div>
  </div>
</div>