<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            FarhaN<span>Admin</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">

            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Manage</li>
            @if (Auth::user()->can('agent.menu'))
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false"
                        aria-controls="charts">
                        <i class="link-icon" data-feather="pie-chart"></i>
                        <span class="link-title">Agent</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav sub-menu">
                            @if (Auth::user()->can('agent.all'))
                                <li class="nav-item">
                                    <a href="{{ route('all.agent') }}" class="nav-link">All Agent</a>
                                </li>
                            @endif
                            @if (Auth::user()->can('agent.add'))
                                <li class="nav-item">
                                    <a href="{{ route('create.agent') }}" class="nav-link">Add Agent</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

            <li class="nav-item nav-category">Realstate</li>
            @if (Auth::user()->can('type.menu'))
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                        aria-expanded="false" aria-controls="uiComponents">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Type</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="uiComponents">
                        <ul class="nav sub-menu">
                            @if (Auth::user()->can('type.all'))
                                <li class="nav-item">
                                    <a href="{{ route('type.index') }}" class="nav-link">All Type</a>
                                </li>
                            @endif
                            @if (Auth::user()->can('type.add'))
                                <li class="nav-item">
                                    <a href="{{ route('type.create') }}" class="nav-link">Add Type</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

            @if (Auth::user()->can('amenity.menu'))
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                        aria-expanded="false" aria-controls="advancedUI">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Amenity</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            @if (Auth::user()->can('amenity.all'))
                                <li class="nav-item">
                                    <a href="{{ route('amenity.index') }}" class="nav-link">All Amenity</a>
                                </li>
                            @endif
                            @if (Auth::user()->can('amenity.add'))
                                <li class="nav-item">
                                    <a href="{{ route('amenity.create') }}" class="nav-link">Add Amenity</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

            @if (Auth::user()->can('property.menu'))
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                        aria-controls="forms">
                        <i class="link-icon" data-feather="inbox"></i>
                        <span class="link-title">Property</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav sub-menu">
                            @if (Auth::user()->can('property.all'))
                                <li class="nav-item">
                                    <a href="{{ route('property.index') }}" class="nav-link">All Property</a>
                                </li>
                            @endif
                            @if (Auth::user()->can('property.add'))
                                <li class="nav-item">
                                    <a href="{{ route('property.create') }}" class="nav-link">Add Property</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

            <li class="nav-item">
                <a href="{{ route('package.history') }}" class="nav-link">
                    <i class="link-icon" data-feather="layout"></i>
                    <span class="link-title">Package History</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false"
                    aria-controls="icons">
                    <i class="link-icon" data-feather="smile"></i>
                    <span class="link-title">Testimonial Message</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('testimonial.index') }}" class="nav-link">All Testimonial Message</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonial.create') }}" class="nav-link">Add Testimonial Message</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">User Function</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Blog</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('blog.category.index') }}" class="nav-link">Add Blog Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog.post.index') }}" class="nav-link">All Blog Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('setting.smtp') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Setting : Smtp</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

            @if (Auth::user()->can('role_permission.menu'))
                <li class="nav-item nav-category">Roll & Permission</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button"
                        aria-expanded="false" aria-controls="general-pages">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="link-title">Permission</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('all.permission') }}" class="nav-link">All Permission</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('add.permission') }}" class="nav-link">Add Permission</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button"
                        aria-expanded="false" aria-controls="authPages">
                        <i class="link-icon" data-feather="unlock"></i>
                        <span class="link-title">Roll</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="authPages">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('all.role') }}" class="nav-link">All Role</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('add.role') }}" class="nav-link">Add Role</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('all.role.permission') }}" class="nav-link">All Role in
                                    Permission</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('add.role.permission') }}" class="nav-link">Add Role in
                                    Permission</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button"
                        aria-expanded="false" aria-controls="errorPages">
                        <i class="link-icon" data-feather="cloud-off"></i>
                        <span class="link-title">Admin</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="errorPages">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('all.admin') }}" class="nav-link">All Admin</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('add.admin') }}" class="nav-link">Add Admin</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item" href="../demo1/dashboard.html">
                <img src="../assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item active" href="../demo2/dashboard.html">
                <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
