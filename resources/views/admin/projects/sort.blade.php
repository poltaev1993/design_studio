@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать проекты</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" ng-app="sort" ng-controller="ProjectSortController">
            <div class="col-md-offset-2 col-md-6">
                <div ui:sortable="sortableOptions" ng-model="projects" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div ng-repeat="project in projects" class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<% project.id %>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<% project.id %>" aria-expanded="false" aria-controls="collapse<% project.id %>">
                                    <% project.title %>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<% project.id %>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<% project.id %>">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <img class="img img-responsive" src="<% project.preview %>" alt=""/>
                                </div>
                                <div class="col-md-9">
                                    <% project.description %>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop