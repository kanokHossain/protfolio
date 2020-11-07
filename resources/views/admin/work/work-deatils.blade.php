<div class="view gallery-page">
    <div class="content">
        <div class="view-wrapper">
            <div class="view">
                <div class="item-content">
                    <div class="container">
                        <h3 class="highlight" style="text-align: left">{{$detail->title}} <span class="highlight"></span></h3>
                        <div class="row">
                            <div class="col-md-9">
                                <img class="fluid-width" alt="Project 1" src="{{$detail->image_url}}" />
                            </div>
                            <div class="col-md-3">
                                <h4>Project Description</h4>
                                <p>{{$detail->description}}</p>
                                <h4>Project Credential</h4>
                                {!! $detail->credential !!} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
//
<div class="loaded-content content-container show"><div class="item-content">
    <div class="container">
        <h3>Single <span class="highlight">Image</span></h3>
        <div class="row">
            <div class="col-md-9">
                <img class="fluid-width" alt="Project 1" src="images/portfolio/1.jpg">
            </div>
            <div class="col-md-3">
                <h4>Project Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <h4>Project Details</h4>
                <p><span class="field">Client:</span> Themeforest</p>
                <p><span class="field">Date:</span> 26th April, 2014</p>
                <p><span class="field">Tags:</span> Photography, Design</p>
            </div>
        </div>
    </div>
</div></div>