@extends('app')

@section('content')
    <div class="page-container">
        <div class="row">
            <div class="header-container">
                <h2>Why Early Detection?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Cancer is part of the natural biological process of life; certain changes in our bodies and cells can
                    occur from environmental and genetic factors that eventually lead to the development of cancer.
                    Identifying the lifestyle, environmental, social and genetic factors that lead to cancer will help
                    us to continue to reduce the impact of cancer. There are both modifiable and non-modifiable risk
                    factors that are associated with cancer development. These modifiable risk factors (obesity,
                    smoking, etc.) can be changed to reduce the risk of developing cancer. Alternatively, non-modifiable
                    risk factors (age, familyhistory, genetic factors) can help us capitalize on identifying those who
                    are at an elevated risk for developing cancer.
                    <br><br>
                    Early detection is proven to reduce the mortality of all types of cancer, especially for individuals
                    at and elevated risk of developing it. Discovering cancer early enables a better likelihood of
                    successful treatment outcomes. By assessing risk profiles for cancer, screening, prevention and risk
                    reduction strategies can be tailored both on an individual and population level. As a research team,
                    we estimate the impact that risk-based early detection interventions have on the individual, health
                    care system &
                    population.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="page-container">

        <div class="row">
            <div class="col-lg-9">
                <div class="image-container">
                    <img src="{{ asset('images/static/group.jpg') }}" alt="Early Detection Group">
                </div>
            </div>
            <div class="col-lg-3">
                <h2 style="margin-top:0">Who We Are</h2>

                <p>Our research team, led by Rasika Rajapakshe, works at the BC Cancer Agency's Center for the Southern
                    Interior, located in the breath-taking city of Kelowna, British Columbia, where Rasika is a senior
                    medical physicist. The group is made up of students, research associates, and scientists, and our
                    aim is
                    to reduce cancer mortality by improving screening techniques and enhancing cancer detection,
                    particularly for those at higher risk.</p>
            </div>
        </div>
    </div>

@endsection