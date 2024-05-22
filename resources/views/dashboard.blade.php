<x-app-layout>

                        <h5 class="card-title">{{ __('Dashboard') }}</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('Total Number of Posts') }}</h5>
                                        <p class="card-text">{{ $totalPosts }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('Total Number of Unpublished Posts') }}</h5>
                                        <p class="card-text">{{ $totalUnpublishedPosts }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('Total Number of Published Posts') }}</h5>
                                        <p class="card-text">{{ $totalPublishedPosts }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
</x-app-layout>
