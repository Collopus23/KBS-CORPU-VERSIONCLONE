<div class="col-sm-12 col-lg-12 col-xl-8">
    <!--row-->
    <div class="row row-sm">
        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header border-bottom-0">
                    <div>
                        <label class="main-content-label mb-2">Project Budget</label> <span
                            class="d-block tx-12 mb-0 text-muted">The Project Budget is a tool
                            used by project managers to estimate the total cost of a
                            project</span>
                    </div>
                </div>
                <div class="card-body ps-0">
                    <div class>
                        <div class="container">
                            <canvas id="project" class="chart-dropshadow2 ht-250"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card custom-card mg-b-20">
                <div class="card-body">
                    <div class="card-header border-bottom-0 pt-0 ps-0 pe-0 d-flex">
                        <div>
                            <label class="main-content-label mb-2">Tasks</label> <span
                                class="d-block tx-12 mb-3 text-muted">A task is accomplished by
                                a set deadline, and must contribute toward work-related
                                objectives.</span>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0)" class="option-dots" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i
                                    class="fe fe-more-vertical"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Task</a>
                                <a class="dropdown-item" href="javascript:void(0)">Team</a>
                                <a class="dropdown-item" href="javascript:void(0)">Status</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-cog me-2"></i>
                                    Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive tasks">
                        <table class="table card-table table-vcenter text-nowrap mb-0  border">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p">Task</th>
                                    <th class="wd-lg-20p">Team</th>
                                    <th class="wd-lg-20p text-center">Open task</th>
                                    <th class="wd-lg-20p">Prority</th>
                                    <th class="wd-lg-20p">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-semibold d-flex"><label
                                            class="ckbox my-auto me-4 mt-1"><input checked=""
                                                type="checkbox"><span></span></label><span
                                            class="mt-1">Evaluating the design</span></td>
                                    <td class="text-nowrap">
                                        <div class="demo-avatar-group my-auto float-end">
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/1.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/2.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/3.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/4.jpg') }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">37<i class=""></i></td>
                                    <td class="text-primary">High</td>
                                    <td><span class="badge bg-pill bg-primary-light">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold d-flex"><label
                                            class="ckbox my-auto me-4"><input checked=""
                                                type="checkbox"><span></span></label><span
                                            class="mt-1"> Generate ideas for design</span></td>
                                    <td class="text-nowrap">
                                        <div class="demo-avatar-group my-auto float-end">
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/5.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/6.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/7.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/8.jpg') }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">37<i class=""></i></td>
                                    <td class="text-secondary">Normal</td>
                                    <td><span class="badge bg-pill bg-warning-light">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold d-flex"><label
                                            class="ckbox my-auto me-4"><input
                                                type="checkbox"><span></span></label><span
                                            class="mt-1">Define the problem</span></td>
                                    <td class="text-nowrap">
                                        <div class="demo-avatar-group my-auto float-end">
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/11.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/12.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/9.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/10.jpg') }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">37<i class=""></i></td>
                                    <td class="text-warning">Low</td>
                                    <td><span class="badge bg-pill bg-primary-light">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold d-flex"><label
                                            class="ckbox my-auto me-4"><input
                                                type="checkbox"><span></span></label><span
                                            class="mt-1">Empathize with users</span></td>
                                    <td class="text-nowrap">
                                        <div class="demo-avatar-group my-auto float-end">
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/7.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/9.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/11.jpg') }}">
                                            </div>
                                            <div class="main-img-user avatar-sm">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/user-area/img/users/12.jpg') }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">37<i class=""></i></td>
                                    <td class="text-primary">High</td>
                                    <td><span class="badge bg-pill bg-danger-light">Rejected</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- col end -->
    </div><!-- Row end -->
</div><!-- col end -->

<div class="col-sm-12 col-lg-12 col-xl-4">
    <div class="card custom-card overflow-hidden">
        <div class="card-header  border-bottom-0 pb-0">
            <div>
                <div class="d-md-flex">
                    <label class="main-content-label my-auto pt-2">Today tasks</label>
                    <div class="ms-auto mt-3 d-flex">
                        <div class="me-3 d-flex text-muted tx-13"><span
                                class="legend bg-primary rounded-circle"></span>Project
                        </div>
                        <div class="d-flex text-muted tx-13"><span
                                class="legend bg-light rounded-circle"></span>Inprogress
                        </div>
                    </div>
                </div>
                <span class="d-block tx-12 mt-2 mb-0 text-muted"> UX UI & Backend
                    Developement. </span>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 my-auto">
                    <h6 class="mb-3 font-weight-normal">Project-Budget</h6>
                    <div class="text-start">
                        <h3 class="font-weight-bold me-3 mb-2 text-primary">$5,240</h3>
                        <p class="tx-13 my-auto text-muted">May 28 - June 01 (2018)</p>
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="forth circle">
                        <div class="chart-circle-value circle-style">
                            <div class="tx-16 font-weight-bold">75%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card custom-card card-dashboard-calendar pb-0">
        <label class="main-content-label mb-2 pt-1">Recent transcations</label>
        <span class="d-block tx-12 mb-2 text-muted">Projects where development work is on
            completion</span>
        <table class="table table-hover m-b-0 transcations mt-2">
            <tbody>
                <tr>
                    <td class="wd-5p">
                        <div class="main-img-user avatar-md">
                            <img alt="avatar" class="rounded-circle me-3"
                                src="{{ asset('assets/user-area/img/users/5.jpg') }}">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-middle ms-3">
                            <div class="d-inline-block">
                                <h6 class="mb-1">Flicker</h6>
                                <p class="mb-0 tx-13 text-muted">App improvement</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        <div class="d-inline-block">
                            <h6 class="mb-2 tx-15 font-weight-semibold">$45.234<i
                                    class="fas fa-level-up-alt ms-2 text-success m-l-10"></i>
                            </h6>
                            <p class="mb-0 tx-11 text-muted">12 Jan 2020</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="wd-5p">
                        <div class="main-img-user avatar-md">
                            <img alt="avatar" class="rounded-circle me-3"
                                src="{{ asset('assets/user-area/img/users/6.jpg') }}">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-middle ms-3">
                            <div class="d-inline-block">
                                <h6 class="mb-1">Intoxica</h6>
                                <p class="mb-0 tx-13 text-muted">Milestone</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        <div class="d-inline-block">
                            <h6 class="mb-2 tx-15 font-weight-semibold">$23.452<i
                                    class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                            </h6>
                            <p class="mb-0 tx-11 text-muted">23 Jan 2020</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="wd-5p">
                        <div class="main-img-user avatar-md">
                            <img alt="avatar" class="rounded-circle me-3"
                                src="{{ asset('assets/user-area/img/users/7.jpg') }}">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-middle ms-3">
                            <div class="d-inline-block">
                                <h6 class="mb-1">Digiwatt</h6>
                                <p class="mb-0 tx-13 text-muted">Sales executive</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        <div class="d-inline-block">
                            <h6 class="mb-2 tx-15 font-weight-semibold">$78.001<i
                                    class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                            </h6>
                            <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="wd-5p">
                        <div class="main-img-user avatar-md">
                            <img alt="avatar" class="rounded-circle me-3"
                                src="{{ asset('assets/user-area/img/users/8.jpg') }}">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-middle ms-3">
                            <div class="d-inline-block">
                                <h6 class="mb-1">Flicker</h6>
                                <p class="mb-0 tx-13 text-muted">Milestone2</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        <div class="d-inline-block">
                            <h6 class="mb-2 tx-15 font-weight-semibold">$37.285<i
                                    class="fas fa-level-up-alt ms-2 text-success m-l-10"></i>
                            </h6>
                            <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="wd-5p pb-0">
                        <div class="main-img-user avatar-md">
                            <img alt="avatar" class="rounded-circle me-3"
                                src="{{ asset('assets/user-area/img/users/4.jpg') }}">
                        </div>
                    </td>
                    <td class="pb-0">
                        <div class="d-flex align-middle ms-3">
                            <div class="d-inline-block">
                                <h6 class="mb-1">Flicker</h6>
                                <p class="mb-0 tx-13 text-muted">App improvement</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-end pb-0">
                        <div class="d-inline-block">
                            <h6 class="mb-2 tx-15 font-weight-semibold">$25.341<i
                                    class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                            </h6>
                            <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card custom-card">
        <div class="card-body">
            <div class="d-flex">
                <label class="main-content-label my-auto">Website Design</label>
                <div class="ms-auto  d-flex">
                    <div class="me-3 d-flex text-muted tx-13">Running</div>
                </div>
            </div>
            <div class="mt-2">
                <div>
                    <span class="tx-15 text-muted">Task completed : 7/10</span>
                </div>
                <div class="container mt-2 mb-2">
                    <canvas id="bar-chart" class="ht-180"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mt-4">
                        <div class="d-flex mb-2">
                            <h5 class="tx-15 my-auto text-muted font-weight-normal">Client :
                            </h5>
                            <h5 class="tx-15 my-auto ms-3">John Deo</h5>
                        </div>
                        <div class="d-flex mb-0">
                            <h5 class="tx-13 my-auto text-muted font-weight-normal">Deadline :
                            </h5>
                            <h5 class="tx-13 my-auto text-muted ms-2">25 Dec 2020</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-auto">
                    <div class="mt-3">
                        <div class="">
                            <img alt="" class="ht-50" src="{{ asset('assets/user-area/img/media/project-logo.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- col end -->