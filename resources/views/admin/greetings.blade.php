@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Текста для секций
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            {!! Form::model($category->greetings) !!}

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingHome">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHome" aria-expanded="false" aria-controls="collapseHome">
                                        <b>Главная</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseHome" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHome">
                                <div class="panel-body">
                                    {!! Form::label('home_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('home_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('home_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('home_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTeam">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTeam" aria-expanded="false" aria-controls="collapseTeam">
                                        <b>Команда</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTeam" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTeam">
                                <div class="panel-body">
                                    {!! Form::label('team_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('team_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('team_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('team_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingAbout">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout">
                                        <b>О студии</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseAbout" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAbout">
                                <div class="panel-body">
                                    {!! Form::label('about_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('about_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('about_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('about_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingProcess">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProcess" aria-expanded="false" aria-controls="collapseProcess">
                                        <b>Процесс</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseProcess" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingProcess">
                                <div class="panel-body">
                                    {!! Form::label('process_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('process_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('process_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('process_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingProjects">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProjects" aria-expanded="false" aria-controls="collapseProjects">
                                        <b>Проекты</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseProjects" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingProjects">
                                <div class="panel-body">
                                    {!! Form::label('projects_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('projects_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('projects_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('projects_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingReviews">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseReviews" aria-expanded="false" aria-controls="collapseReviews">
                                        <b>Отзывы</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseReviews" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingReviews">
                                <div class="panel-body">
                                    {!! Form::label('reviews_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('reviews_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('reviews_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('reviews_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingQuestions">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseQuestions" aria-expanded="false" aria-controls="collapseQuestions">
                                        <b>Вопрос-ответ</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseQuestions" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuestions">
                                <div class="panel-body">
                                    {!! Form::label('questions_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('questions_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('questions_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('questions_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingBlog">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseBlog" aria-expanded="false" aria-controls="collapseBlog">
                                        <b>Блог</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseBlog" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBlog">
                                <div class="panel-body">
                                    {!! Form::label('blog_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('blog_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('blog_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('blog_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingPartners">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePartners" aria-expanded="false" aria-controls="collapsePartners">
                                        <b>Партнеры</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsePartners" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPartners">
                                <div class="panel-body">
                                    {!! Form::label('partners_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('partners_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('partners_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('partners_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingContacts">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseContacts" aria-expanded="false" aria-controls="collapseContacts">
                                        <b>Контакты</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseContacts" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingContacts">
                                <div class="panel-body">
                                    {!! Form::label('contacts_heading', 'Заголовок: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('contacts_heading', null, ['class' => 'form-control']) !!}
                                    <hr>
                                    {!! Form::label('contacts_description', 'Описание: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('contacts_description', null, ['class' => 'form-control editor']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group">
                    {!! Form::submit('Сохранить', ['class' => 'btn btn-success btn-lg col-md-offset-3 col-md-6']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop