<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
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