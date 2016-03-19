@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать отзывы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" ng-app="sort" ng-controller="ReviewSortController">
            <div class="col-md-offset-2 col-md-6">
                <div ui:sortable="sortableOptions" ng-model="reviews" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div ng-repeat="review in reviews" class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<% review.id %>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<% review.id %>" aria-expanded="false" aria-controls="collapse<% review.id %>">
                                    <% review.title %>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<% review.id %>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<% review.id %>">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <img class="img img-responsive" src="<% review.image %>" alt=""/>
                                </div>
                                <div class="col-md-9">
                                    <% review.description %>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop