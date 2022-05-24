
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('backend.home')}}"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Dashboard</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('backend.gallery.index')}}"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Gallery</span></a
                    >
                </li>

                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('backend.services.index')}}"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Services</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Work Section</span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('backend.categories.index')}}" class="sidebar-link"
                            ><i class="mdi mdi-note-outline"></i
                                ><span class="hide-menu">Work Category</span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('backend.works.index')}}" class="sidebar-link"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu">Works</span></a
                            >
                        </li>
                    </ul>
                </li>
            </ul>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
