@extends('layouts.main')

@section('content')

@include('layouts.top-navbar')

<div id="layoutSidenav">

    @include('layouts.side-navbar')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="breadcrumb rounded-pill mb-4 bg-light" style="color: RGBA(107,107,107,0.75); background-color: rgbA">
                    <div class="item px-3">
                        <i class="fas fa-home pt-1"></i>&nbsp;Beranda
                    </div>
                </div>

                
                <div class="row">
                    <?php $hari_ini = date('Y-m-d');  ?>
                    <div class="d-flex justify-content-start mb-2 mt-1 text-secondary">
                        <h2 class="text-secondary"><?= hari_ini() . dateIndonesia($hari_ini) . ',' ?></h2> &nbsp; &nbsp;
                        <h2 class="text-secondary">
                            <div id="clock"> &nbsp;</div>
                        </h2>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-user fa-6x"></i>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <h3>30 Siswa Terdaftar</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-user-shield fa-6x"></i>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <h3>30 Admin Terdaftar</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-book-bookmark fa-6x"></i>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <h3>30 Topik Materi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Statistik Perkembangan Siswa
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Statistik Perkembangan Siswa
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>


@if(Session::has('success'))
<script type="text/javascript">
    swal({
        title: 'Berhasil',
        text: "{{Session::get('success')}}",
        timer: 2000,
        icon: "success",
        type: 'success'
    }).then((value) => {
        //location.reload();
    }).catch(swal.noop);
</script>
@endif

<!-- GET CURRENT DATE AND TIME INDONESIA -->

<?php function dateIndonesia($date)
{
    if ($date != '0000-00-00') {
        $date = explode('-', $date);

        $data = $date[2] . ' ' . bulan($date[1]) . ' ' . $date[0];
    } else {
        $data = 'Format tanggal salah';
    }

    return $data;
}

function bulan($bln)
{
    $bulan = $bln;

    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
    }
    return $bulan;
}

function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return $hari_ini . ', ';
}
?>


<script>
    // Comment out the PHP line you will actually use for demostration purposes
    var d = new Date(<?php echo time() * 1000 ?>);
    // var d = new Date(1389971032 * 1000);

    function updateClock() {
        // Increment the date
        d.setTime(d.getTime() + 1000);

        // Translate time to pieces
        var currentHours = d.getHours();
        var currentMinutes = d.getMinutes();
        var currentSeconds = d.getSeconds();

        // Add the beginning zero to minutes and seconds if needed
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

        // Add either "AM" or "PM"
        var timeOfDay = (currentHours < 12) ? "am" : "pm";

        // Convert the hours our of 24-hour time
        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
        currentHours = (currentHours == 0) ? 12 : currentHours;

        // Generate the display string
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

        // Update the time
        document.getElementById("clock").firstChild.nodeValue = currentTimeString;
    }

    window.onload = function() {
        updateClock();
        setInterval('updateClock()', 1000);
    }
</script>

@endsection