<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('js/jquery.js') }}"></script>
    <script src="{{asset('js/popper.js') }}"></script>
    <script src="{{asset('js/bootstrap.js') }}"></script>
    <script src="{{asset('js/perfect-scrollbar.js') }}"></script>

    <script src="{{asset('js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('js/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    {{-- datataBle --}}
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script async defer src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script async defer src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

    <script type="text/javascript">
        // new DataTable('#example');
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
