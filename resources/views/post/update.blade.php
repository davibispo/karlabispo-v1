@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>BLOG RAÍZES DA INFÂNCIA | EDITAR ARTIGO</h2>
                <p></p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>EDITAR ARTIGO</b></div>

                            <div class="card-body"> 
                    
                                {{ Form::model($post, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostController@update', $post->id], 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) }}

                                <div class="form-group row">
                                    {{ Form::label('titulo', 'Título:', ['class'=>'col-sm-4 col-form-label text-md-right']) }}
                                    <div class="col-md-12">
                                        {{ Form::text('titulo', null, ['class'=>'form-control', 'required']) }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{ Form::label('texto', 'Texto:', ['class'=>'col-sm-4 col-form-label text-md-right']) }}
                                    <div class="col-md-12">
                                        {{ Form::textarea('texto', null, array('class' =>'form-control input', 'cols' => 20, 'rows' =>10, 'required' => '', 'maxlength' => ""))}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{ Form::label('resumo', 'Resumo:', ['class'=>'col-sm-4 col-form-label text-md-right']) }}
                                    <div class="col-md-12">
                                        {{ Form::textarea('resumo', null, array('class' =>'form-control input', 'cols' => 20, 'rows' =>5, 'required' => '', 'maxlength' => "550"))}}
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    {{ Form::label('categoria', 'Categoria:', ['class'=>'col-sm-4 col-form-label text-md-right']) }}
                                    <div class="col-md-12">
                                        {{ Form::select('categoria', [
                                            'Geral' => 'Geral', 
                                            'Disforia de Gênero' => 'Disforia de Gênero',
                                            'Primeira Infância' => 'Primeira Infância',
                                            'Adolescência' => 'Adolescência',
                                            'Temperamentos' => 'Temperamentos',
                                            'Educação' => 'Educação',
                                            ], null, ['class'=>'form-control input','placeholder' => '-- Escolha a categoria --']) }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{ Form::label('imagem', 'Imagem (1024 L x 768 A):', ['class'=>'col-sm-4 col-form-label text-md-right']) }}
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm">
                                            <input type="file" name="imagem" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        {{ Form::submit('Atualizar', ['class'=>'btn btn-dark btn-sm']) }}
                                    </div>
                                </div>
                                {{ Form::close() }}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        tinymce.init({
            selector: 'textarea',
            menubar: false,
        });
    </script>
@endsection