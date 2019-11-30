@extends('layouts.app')

@section('title', 'Report Error')

@section('content')
<div class="container">
	<div class="page-content-wrap white-bag">
        <div class="row">    
            <div class="col-md-12">
                <h4 class="custom-heading">Report Error</h4>
                <!-- breadcrumb -->
                <ol class="breadcrumb mx-border-top-bottom">
                    <li>
                        <a itemprop="item" href="{{ route('dashboard') }}">
                            <span itemprop="name">Dashboard</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li>
                        <a itemprop="item" href="">
                            <span itemprop="name">Report Error</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>

                @if (session('sendReportToDevelopmentTeamSuccess'))
                    <div class="alert alert-success">
                      {{ session('sendReportToDevelopmentTeamSuccess') }}
                    </div>                           
                @endif                

                @if (count($reports) > 0)
                    <section class="articles">
                        @include('report.load')
                    </section>
                @endif                               
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">
    $(function() {
        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();

            $('#load a').css('color', '#dfecf6');
            $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href');
            getArticles(url);
            window.history.pushState("", "", url);
        });

        function getArticles(url) {
            $.ajax({
                url : url
            }).done(function (data) {
                $('.articles').html(data);
            }).fail(function () {
                alert('Articles could not be loaded.');
            });
        }
    });
</script>
@endsection
