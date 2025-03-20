@include('layouts.header')
<div class="feature_section" id="features-section">
    <div class="container text-center">
        {{-- <div class="row pt-3" style="margin: 0px;">
            <div class="col-lg-12 text-left image-container  fe-details" style="text-align: justify !important;">
                <div>
                  <h2>Blog</h2>
                </div>
            </div>

        </div> --}}
        
    </div>
    <div class="container mt-5">

            <h4>Latest Blogs</h4>
            <div class="container mt-4">
                <div class="row">
                    <!-- Blog 1 -->
                    @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card blog-card">
                            {{-- <img src="https://source.unsplash.com/400x300/?restaurant,food" alt="Blog Image"> --}}
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                <p ><div class="card-content" >{!! $blog->content !!}</div></p>
                                <a href="{{ route('blogs.show', $blog->slug) }}">Read More →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- 
                    <div class="col-md-4">
                        <div class="card blog-card">
                            
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                <p class="card-text">From inventory tracking to seamless billing, find out why a POS system is essential for modern restaurants.</p>
                                <a href="{{ url('/blog-details') }}">Read More →</a>
                            </div>
                        </div>
                    </div> --}}
{{--             
                   
                    <div class="col-md-4">
                        <div class="card blog-card">
                           
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/blog-details') }}" >Boosting Sales with Restoji POS</a></h5>
                                <p class="card-text">Learn how data insights from Restoji POS can help increase revenue and customer retention.</p>
                                <a href="{{ url('/blog-details') }}">Read More →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card blog-card">
                     
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/blog-details') }}">The Future of Digital Payments in Restaurants</a>
                                </h5>
                                <p class="card-text">Explore how digital wallets, UPI, and contactless payments are changing the restaurant industry.</p>
                                <a href="{{ url('/blog-details') }}">Read More →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card blog-card">
                           
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/blog-details') }}">Mastering Restaurant Inventory with Restoji POS</a>
                                </h5>
                                <p class="card-text">Avoid stock shortages and waste. Learn how to manage restaurant inventory efficiently.</p>
                                <a href="{{ url('/blog-details') }}">Read More →</a>
                            </div>
                        </div>
                    </div>
            
                    
                    <div class="col-md-4">
                        <div class="card blog-card">
               
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/blog-details') }}">How to Improve Customer Loyalty with POS Data</a>
                                </h5>
                                <p class="card-text">Use customer purchase history and personalized offers to build a loyal customer base.</p>
                                <a href="{{ url('/blog-details') }}">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
    </div>
</div>