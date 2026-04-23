<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">

        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center">
                <span></span>Our Projects<span></span>
            </p>
            <h1 class="text-center mb-5">Recently Completed Projects</h1>
        </div>

        <!-- 🔥 Filters -->
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">

                    <li class="mx-2 active" data-filter="*">All</li>

                    @foreach ($categories as $category)
                    <li class="mx-2" data-filter=".cat-{{ $category->id }}">
                        {{ $category->name }}
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <!-- 🔥 Projects -->
        <div class="row g-4 portfolio-container">

            @foreach ($projects as $project)

            <div class="col-lg-4 col-md-6 portfolio-item cat-{{ $project->category_id }} wow fadeInUp">

                <div class="rounded overflow-hidden">

                    <!-- Image -->
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->name }}" style="height: 220px; object-fit: cover;">

                        <div class="portfolio-overlay">

                            <!-- View Image -->
                            <a class="btn btn-square btn-outline-light mx-1"
                                href="{{ asset('storage/' . $project->image) }}" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a>

                            <!-- Link -->
                            @if($project->link)
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ $project->link }}"
                                target="_blank">
                                <i class="fa fa-link"></i>
                            </a>
                            @endif

                        </div>
                    </div>

                    <!-- Info -->
                    <div class="bg-light p-4">

                        <p class="text-primary fw-medium mb-2">
                            {{ $project->category->name ?? '' }}
                        </p>

                        <h5 class="lh-base mb-0">
                            {{ $project->name }}
                        </h5>

                        <p class="text-muted mt-2">
                            {{ Str::limit($project->description, 80) }}
                        </p>

                    </div>

                </div>
            </div>

            @endforeach

        </div>

    </div>
</div>
<!-- Projects End -->