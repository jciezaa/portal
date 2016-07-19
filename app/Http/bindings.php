<?php

use Lio\Forum\ThreadRepository;
use Lio\Forum\Topics\TopicRepository;
use Lio\Replies\ReplyRepository;
use Lio\Tags\TagRepository;
use Lio\Users\UserRepository;

Route::bind('reply', function($id) {
    return app(ReplyRepository::class)->find($id) ?: abort(404);
});

Route::bind('tag', function($slug) {
    return app(TagRepository::class)->findBySlug($slug) ?: abort(404);
});

Route::bind('thread', function($slug) {
    return app(ThreadRepository::class)->findBySlug($slug) ?: abort(404);
});

Route::bind('topic', function($slug) {
    return app(TopicRepository::class)->findBySlug($slug) ?: abort(404);
});

Route::bind('username', function($username) {
    return app(UserRepository::class)->findByUsername($username) ?: abort(404);
});