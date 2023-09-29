<!-- Jquery js-->
<script src="{{ asset('assets/user-area/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/user-area/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/user-area/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Internal Chart.Bundle js-->
<script src="{{ asset('assets/user-area/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Peity js-->
<script src="{{ asset('assets/user-area/plugins/peity/jquery.peity.min.js') }}"></script>

<!-- Select2 js-->
<script src="{{ asset('assets/user-area/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/user-area/js/select2.js') }}"></script>

<!-- Perfect-scrollbar js -->
<script src="{{ asset('assets/user-area/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Sidemenu js -->
<script src="{{ asset('assets/user-area/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- Sidebar js -->
<script src="{{ asset('assets/user-area/plugins/sidebar/sidebar.js') }}"></script>

<!-- Internal Morris js -->
<script src="{{ asset('assets/user-area/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/user-area/plugins/morris.js/morris.min.js') }}"></script>

<!-- Circle Progress js-->
<script src="{{ asset('assets/user-area/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/user-area/js/chart-circle.js') }}"></script>

<!-- Internal Dashboard js-->
<script src="{{ asset('assets/user-area/js/index.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('assets/user-area/js/themeColors.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('assets/user-area/js/sticky.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('assets/user-area/js/custom.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const btnSetRole = document.getElementById("btnSetRole");
        btnSetRole.addEventListener("click", function () {
            const role_id = document.getElementsByName("role_id")[0].value;
            const current_role = '{{ session('defaultRole')->id }}';
            if(role_id == current_role) {
                $('#modalChangeRole').modal('hide');
            }
            else {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        window.location.replace("{{ url('/dashboard') }}");
                    }
                };
                xhttp.open("GET", "{{ url('/changeRole') }}" + "/" + role_id, true);
                xhttp.send();
            }
        });
    });
</script>