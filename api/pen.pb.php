<?php
// Code generated by github.com/kongdeqiang/protoc-gen-php. DO NOT EDIT.

namespace app/mobile/v1;

// This is a compile-time assertion to ensure that this generated file
// is compatible with the github.com/kongdeqiang/protoc-gen-php package it is being compiled against.

use think\Controller;
abstract class BlogService extends  Controller {

		abstract protected  function GetArticles();

		abstract protected  function CreateArticle();

}
