<div class="horizontal-menu mx-1">
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminDashboard')}}">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-book menu-icon"></i>
                        <span class="menu-title">Category</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('category.create')}}">Add</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{route('category.index')}}">List</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-laptop-mac menu-icon"></i>
                        <span class="menu-title">Class</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('classes.create')}}">Add</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{route('classes.index')}}">List</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-book-open menu-icon"></i>
                        <span class="menu-title">Subject</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('subject.create')}}">Add</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{route('subject.index')}}">List</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-content-paste menu-icon"></i>
                        <span class="menu-title">Q&A</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('questions.create')}}">Add</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{route('questions.create')}}">List</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminDashboard')}}">
                        <i class="mdi mdi-account-circle menu-icon"></i>
                        <span class="menu-title">User</span>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="pages/forms/basic_elements.html" class="nav-link">
                        <i class="mdi mdi-chart-areaspline menu-icon"></i>
                        <span class="menu-title">Form Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                        <i class="mdi mdi-finance menu-icon"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/tables/basic-table.html" class="nav-link">
                        <i class="mdi mdi-grid menu-icon"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/icons/mdi.html" class="nav-link">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-codepen menu-icon"></i>
                        <span class="menu-title">Sample Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="pages/samples/lock-screen.html">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="docs/documentation.html" class="nav-link">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span></a>
                </li> -->
            </ul>
        </div>
    </nav>
</div>