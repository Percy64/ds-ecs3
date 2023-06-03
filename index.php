<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoproducto.php';

$t=new tipoproducto();
$t->id=2;
$t->desc='Galletitas';

$p=new producto();
$p->id=1;
$p->nombre='Merenguitas';
$p->precio=1000;
$p->stock=10;
$p->tipoproducto=$t;
$p->mostrardatos();

