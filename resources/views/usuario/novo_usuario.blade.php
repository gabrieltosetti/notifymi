@extends('layouts.principal')

@section('title', 'Novo Usuário')

@section('content_title', 'Novo Usuário')

@section('breadcrumbs')
    {!! Breadcrumbs::render('novo_usuario') !!}
@endsection

@section('css')
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
@stop

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row"> <!--row 1-->
                    <div class="col-xs-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Cadastro</h5>
                            </div> <!--/ibox title-->
                            <div class="ibox-content">
                                <form class="form-horizontal" action="#" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-12"><p>Quais seus dados?</p></div>
                                    </div>
                                    <div class="row"> <!--row 2-->

                                        <div class="col-xs-12 col-sm-6 b-r">
                                            <!--nome completo-->
                                            <div class="form-group  {{ $errors->has('nome') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="nome">Nome Completo</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nome" value="{{ old('nome') }}" id="nome">
                                                    <span class="help-block"><?php echo $errors->first('nome'); ?></span>
                                                </div>
                                            </div>
                                            <!--/nome completo-->
                                            <!--RG-->
                                            <div class="form-group  {{ $errors->has('rg') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="rg">RG</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rg" data-mask="99.999.999-9" value="{{ old('rg') }}" id="rg">
                                                    <span class="help-block"><?php echo $errors->first('rg'); ?></span>
                                                    <span class="help-block">Exemplo: 99.999.999-99</span>
                                                </div>
                                            </div>
                                            <!--/RG-->
                                        </div> <!--/col xs 12-->
                                        <div class="col-xs-12 col-sm-6">
                                            <!--CPF-->
                                            <div class="form-group  {{ $errors->has('cpf') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="cpf">CPF</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="cpf" data-mask="999.999.999-99" value="{{ old('cpf') }}" id="cpf">
                                                    <span class="help-block"><?php echo $errors->first('cpf'); ?></span>
                                                    <span class="help-block">Exemplo: 999.999.999-99</span>
                                                </div>
                                            </div>
                                            <!--/CPF-->
                                        </div> <!--/col xs 12-->
                                    </div> <!--/row 2-->
                    <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                    <div class="row">
                                        <div class="col-xs-12"><p>Como podemos entrar em contato?</p></div>
                                    </div>
                                    <div class="row"> <!--row 3-->
                                        <div class="col-xs-12 col-sm-6 b-r">
                                            <!--CELULAR-->
                                            <div class="form-group  {{ $errors->has('celular') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="celular">Celular</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="celular" data-mask="(99)99999-9999" value="{{ old('celular') }}" id="celular">
                                                    <span class="help-block"><?php echo $errors->first('celular'); ?></span>
                                                    <span class="help-block">Exemplo: (99)99999-9999</span>
                                                </div>
                                            </div>
                                            <!--/CELULAR-->
                                        </div> <!--/col xs 12-->
                                        <div class="col-xs-12 col-sm-6">
                                            <!--TELEFONE-->
                                            <div class="form-group  {{ $errors->has('telefone') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="telefone">Telefone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="telefone" data-mask="(99)9999-9999" value="{{ old('telefone') }}" id="telefone">
                                                    <span class="help-block"><?php echo $errors->first('telefone'); ?></span>
                                                    <span class="help-block">Exemplo: (99)9999-9999</span>
                                                </div>
                                            </div>
                                            <!--/TELEFONE-->
                                        </div> <!--/col xs 12-->
                                    </div> <!--/row 3-->
                    <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                    <div class="row">
                                        <div class="col-xs-12"><p>Onde podemos te encontrar?</p></div>
                                    </div>
                                    <div class="row"> <!--row 4-->
                                        <div class="col-xs-12 col-sm-6 b-r">
                                            <!--CIDADE-->
                                            <div class="form-group  {{ $errors->has('cidade') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="cidade">Cidade</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" id="cidade">
                                                    <span class="help-block"><?php echo $errors->first('cidade'); ?></span>
                                                </div>
                                            </div>
                                            <!--/CIDADE-->
                                            <!--BAIRRO-->
                                            <div class="form-group  {{ $errors->has('bairro') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="bairro">Bairro</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" id="bairro">
                                                    <span class="help-block"><?php echo $errors->first('bairro'); ?></span>
                                                </div>
                                            </div>
                                            <!--/BAIRRO-->
                                            <!--RUA-->
                                            <div class="form-group  {{ $errors->has('rua') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="rua">Rua</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rua" value="{{ old('rua') }}" id="rua">
                                                    <span class="help-block"><?php echo $errors->first('rua'); ?></span>
                                                </div>
                                            </div>
                                            <!--/RUA-->
                                        </div> <!--/col xs 12-->
                                        <div class="col-xs-12 col-sm-6">
                                            <!--NUMERO-->
                                            <div class="form-group  {{ $errors->has('numero') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="numero">Número</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="numero" value="{{ old('numero') }}" id="numero">
                                                    <span class="help-block"><?php echo $errors->first('numero'); ?></span>
                                                </div>
                                            </div>
                                            <!--/NUMERO-->
                                            <!--COMPLEMENTO-->
                                            <div class="form-group {{ $errors->has('complemento') ? 'has-error' : ''}}">
                                                <label for="complemento" class="col-sm-3 control-label">Complemento</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control"  placeholder="Opcional" name="complemento" id="complemento">{{ old('complemento') }}</textarea>
                                                    <span class="help-block"><?php echo $errors->first('complemento'); ?></span>
                                                </div>
                                            </div>
                                            <!--/COMPLEMENTO-->
                                        </div> <!--/col xs 12-->
                                    </div> <!--/row 4-->
                    <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                    <div class="row">
                                        <div class="col-xs-12"><p>Use estes dados para entrar no sistema:</p></div>
                                    </div>
                                    <div class="row"> <!--row 5-->
                                        <div class="col-xs-12 col-sm-6 b-r">
                                            <!--EMAIL-->
                                            <div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="email">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                                                    <span class="help-block"><?php echo $errors->first('email'); ?></span>
                                                    <!--<span class="help-block">Este email será usado para login no sistema</span>-->
                                                </div>
                                            </div>
                                            <!--/EMAIL-->
                                        </div> <!--/col xs 12-->
                                        <div class="col-xs-12 col-sm-6">
                                            <p>Não se preocupe, esta senha poderá ser alterada a qualquer momento depois de criada!</p>
                                            <!--SENHA-->
                                            <div class="form-group  {{ $errors->has('senha') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="senha">Senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="senha" value="{{ old('senha') }}" id="senha">
                                                    <span class="help-block"><?php echo $errors->first('senha'); ?></span>
                                                </div>
                                            </div>
                                            <!--/SENHA-->
                                            <!--CONFIRMAR SENHA-->
                                            <div class="form-group  {{ $errors->has('confirmar') ? 'has-error' : ''}}">
                                                <label class="col-sm-3 control-label" for="confirmar">Confirmar Senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="confirmar" value="{{ old('confirmar') }}" id="confirmar">
                                                    <span class="help-block"><?php echo $errors->first('confirmar'); ?></span>
                                                </div>
                                            </div>
                                            <!--/CONFIRMAR SENHA-->
                                        </div> <!--/col xs 12-->
                                    </div> <!--/row 5-->

                    <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p>O Notify-Mi permite criar usuários com diferentes níveis de privilégios.
                                            Favor, escolha a opção mais adequada para este novo usuário:</p>
                                        </div>
                                    </div>
                                    <div class="row"> <!--row 6-->
                                        <div class="col-xs-12">
                                            <!--PERMISSAO-->
                                                <div class="i-checks"><label> <input type="radio" value="permissao1" name="permissao" checked="checked"> <i></i>Nível 1</label></div>
                                                <ul>
                                                    <li>Cadastra e visualiza consertos;</li>
                                                    <li>Cadastra e visualiza clientes;</li>
                                                </ul>
                                                <div class="i-checks"><label> <input type="radio" value="permissao2" name="permissao"> <i></i>Nível 2</label></div>
                                                <ul>
                                                    <li>Tudo anterior;</li>
                                                    <li>+ Cadastra usuários até nível 1;</li>
                                                    <li>+ Pode lançar acompanhamentos nos consertos;</li>
                                                </ul>
                                                <div class="i-checks"><label> <input type="radio" value="permissao3" name="permissao"> <i></i>Nível 3</label></div>
                                                <ul>
                                                    <li>Tudo anterior;</li>
                                                    <li>+ Cadastra usuários até nível 2;</li>
                                                    <li>+ Visualiza avaliações;</li>
                                                    <li>+ Gera relatórios;</li>
                                                </ul>
                                                <div class="i-checks"><label> <input type="radio" value="permissao4" name="permissao"> <i></i>Nível 4</label></div>
                                                <ul>
                                                    <li>Tudo anterior;</li>
                                                    <li>+ Cadastra usuários até nível 3;</li>
                                                </ul>
                                            <!--/PERMISSAO-->
                                        </div> <!--/col xs 12-->
                                    </div> <!--/row 6-->
                    <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                    <div class="row">
                                        <div class="col-xs-12"><p>Tudo certo? Vamos finalizar!</p></div>
                                    </div>
                                    <div class="row"> <!--row 7-->
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary" type="submit">Criar!</button>
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
                                        </div>
                                    </div> <!--/row 7-->

                                </form>
                            </div> <!--/ibox content-->
                        </div> <!--/ibox-->
                    </div><!--/col xs 12-->
                </div> <!--/row 1-->
            </div> <!--/content-->
@endsection

@section('scripts')
<!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

<!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
@stop
