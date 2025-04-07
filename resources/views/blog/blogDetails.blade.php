@include('layouts.header')

<div class="feature_section" id="features-section">
    <div class="container text-center">
        <div class="row pt-3" style="margin: 0px;">
            
            <div class="col-lg-8 text-left image-container  fe-details" style="text-align: justify !important;">
                <div>
                    {{-- @if (Str::contains(request()->url(), 'restoji')) --}}
                        {{-- <img src="resources/images/blog-img.png" alt="POS Dashboard" class="" width="100%"> --}}
                    {{-- @else
                        <img src="resources/images/pos-dashboard-majestic.png" alt="POS Dashboard" class="dashboard-img">
                    @endif --}}
                    <img src="data:image/png;base64,{{$blog->image}}"  alt="Image" style="" width="100%">
                </div>
           
                <div>
                    <h3>{{ $blog->title }}</h3>
                    <h4>Introduction</h4>
                    <p>
                        <div>{!! $blog->content !!}</div>
                    </p>
              
                </div>
              
                {{-- <div class="blog_list">
                    <h5>1. Faster Order Processing & Billing</h5>
                    <p>In a busy restaurant, speed is everything. A modern POS system:</p>
                    <ul>
                        <li>Helps staff take orders quickly—whether from the counter, tableside, or even online.</li>
                        <li>Reduces errors by syncing orders directly with the kitchen.</li>
                        <li>Supports multiple payment methods, including cash, card, and digital wallets, ensuring a smooth checkout experience.</li>
                    </ul>
                    <h5>2. Easy Inventory & Stock Management</h5>
                    <p>Say goodbye to stock shortages and wastage! With a smart POS system:</p>
                    <ul>
                        <li>Track ingredients and stock levels in real-time.</li>
                        <li>Get automatic alerts when supplies are low.</li>
                        <li>Reduce food waste and control costs efficiently.</li>
                    </ul>
                    <h5>3. Seamless Online Order Integration</h5>
                    <p>Restaurants today need more than just in-house dining. Restoji POS integrates with customer ordering apps, allowing you to:</p>
                    <ul>
                        <li>Accept online orders directly into your system.</li>
                        <li>Manage dine-in and takeaway orders from one platform.</li>
                        <li>Improve customer experience with faster service.</li>
                    </ul>
                    <h5>4. Better Customer Experience & Loyalty</h5>
                    <p>A great dining experience keeps customers coming back! With a modern POS, you can:</p>
                    <ul>
                        <li>Offer discounts, loyalty programs, and cashback offers.
                        </li>
                        <li>Quickly retrieve customer preferences and past orders.</li>
                        <li>Send personalized promotions to regular customers.</li>
                    </ul>
                   
                </div> --}}
                
            </div>

               <div class="col-lg-4 profile_section">
                    <div class="profile-card author-section">
                        <h5>Restoji POS</h5>
                        <p>Your All-in-One Restaurant POS Solution</p>
                        <p style="text-align: justify !important;">Restoji POS is designed to streamline restaurant operations with faster order processing, real-time inventory tracking, and seamless online order integration. Whether you're running a small café or a busy restaurant, Restoji POS helps you manage orders, payments, and customer relationships with ease.</p>
                        <p style="text-align: justify !important;">Empower your restaurant with smart technology and data-driven insights. Experience the future of restaurant management with Restoji POS!</p>
                    </div>
            
                
                    
                    <div class="article-list mt-5">
                        <h5 class="mt-3">More Blogs</h5>
                        <ul class="list-unstyled more_blog_list" style="text-align: left;">
                            @foreach ($allBlogs as $blogs)
                                <li class="{{ $blogs->id === $blog->id ? 'active-blog' : '' }}">
                                    <a href="{{ route('blogs.show', $blogs->slug) }}" style="text-decoration: none; color: inherit; display: block; width: 100%;">
                                        {{ $blogs->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div> 
           

        </div>
    </div>
</div>