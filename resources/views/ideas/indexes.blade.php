@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="panel ">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-10 offset-1 text-center">
                        <h3>{{ __('views.Idea Dominance Index') }}</h3>
                    </div>
                    <div class="col-md-1 text-md-right">
                        <a class="btn btn-primary btn-block" href="{{ route('ideas.popularity_indexes') }}">{{ __('IPI') }}</a>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="accordion mb-3" id="accordion">
                    <div class="card" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125); border-radius: calc(0.25rem - 1px);">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Guide
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show1" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body col-md-10 offset-1">
                            <p>The Idea Dominance Index (IDI) shows what are the most <u>strongly</u>
                            supported ideas universally and within any nation. As the people
                            give more points to a particular idea within their Ideological Profiles,
                            the idea rises higher on the IDI.</p>
                            <p>If you think there is an idea that should be higher on the IDI, explain
                            to other people why they should support this idea. If you think there
                            is an idea that should not be so high on the IDI, give other people
                            better ideas for them to support instead.</p>
                        </div>
                      </div>
                    </div>
                </div>
                
                @include('blocks.search')

                @include('blocks.ideas', ['index'=>'dominance'])

            </div>
        </div>
    </div>
    </div>
</div>
@endsection

