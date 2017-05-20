<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Página Inicial', route('home'));
});

// Home > Consertos
Breadcrumbs::register('consertos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Consertos', route('consertos'));
});

// Home > Consertos > Novo
Breadcrumbs::register('novo_conserto', function($breadcrumbs)
{
    $breadcrumbs->parent('consertos');
    $breadcrumbs->push('Novo', route('novo_conserto'));
});

// Home > Clientes
Breadcrumbs::register('clientes', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Clientes', route('clientes'));
});

// Home > Clientes > Novo
Breadcrumbs::register('novo_cliente', function($breadcrumbs)
{
    $breadcrumbs->parent('clientes');
    $breadcrumbs->push('Novo', route('novo_cliente'));
});

// Home > Funcionarios
Breadcrumbs::register('funcionarios', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Funcionarios', route('funcionarios'));
});

// Home > Funcionarios > Novo
Breadcrumbs::register('novo_funcionario', function($breadcrumbs)
{
    $breadcrumbs->parent('funcionarios');
    $breadcrumbs->push('Novo', route('novo_funcionario'));
});

/*// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});*/


// SITE DOCUMENTACAO
// https://laravel-breadcrumbs.readthedocs.io/en/latest/start.html