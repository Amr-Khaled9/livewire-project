<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('admin-assets')}}/vendor/libs/jquery/jquery.js"></script>
<script src="{{asset('admin-assets')}}/vendor/libs/popper/popper.js"></script>
<script src="{{asset('admin-assets')}}/vendor/js/bootstrap.js"></script>
<script src="{{asset('admin-assets')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{asset('admin-assets')}}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('admin-assets')}}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{asset('admin-assets')}}/js/main.js"></script>

<!-- Page JS -->
<script src="{{asset('admin-assets')}}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
    document.addEventListener('livewire:init', () => {

    Livewire.on('show-success', () => {

        setTimeout(() => {
            const el = document.getElementById('success-alert');

            if (el) {
                el.style.transition = '0.5s';
                el.style.opacity = '0';

                setTimeout(() => {
                    el.remove();
                }, 500);
            }

        }, 3000);

    });

});
</script>