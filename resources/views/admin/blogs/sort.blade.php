@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать посты</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" ng-app="sort" ng-controller="BlogSortController">
            <div class="col-md-offset-2 col-md-6">
                <div ui:sortable="sortableOptions" ng-model="posts" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div ng-repeat="post in posts" class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<% post.id %>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<% post.id %>" aria-expanded="false" aria-controls="collapse<% post.id %>">
                                    <% post.title %>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<% post.id %>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<% post.id %>">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <img class="img img-responsive" src="<% post.preview %>" alt=""/>
                                </div>
                                <div class="col-md-9">
                                    <% post.description %>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop