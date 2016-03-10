@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать фотографии</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" ng-app="sort" ng-controller="SliderSortController">
            <div class="col-md-offset-2 col-md-6">
                <div ui:sortable="sortableOptions" ng-model="slider" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div ng-repeat="photo in slider" class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<% photo.id %>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<% photo.id %>" aria-expanded="false" aria-controls="collapse<% photo.id %>">
                                    ---------
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<% photo.id %>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<% photo.id %>">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <img class="img img-responsive" src="<% photo.url %>" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop