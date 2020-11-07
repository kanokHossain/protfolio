<div class="loaded-content content-container show"><div class="item-content">
    <div class="container">
        <h3 style="text-align: left"> <span class="highlight">{{$detail->title}}</span></h3>
        <div class="row">
            <div class="col-md-9">
                <img class="fluid-width" alt="Project 1" src="{{$detail->image_url}}" />
            </div>
            <div class="col-md-3">
                <h4>Project Description</h4>
                <p>{{$detail->description}}</p>
                <h4>Project Credential</h4>
                <p><span class="field">Live Url: </span><a target="blank" href="{{$detail->live_url}}">{{$detail->live_url}}</a></p>
                {!! $detail->credential !!} 
            </div>
        </div>
    </div>
</div>