<?php
class PostModel
{
    public function getPosts(): array
    {
        // 実際にはデータベースから取得します
        return [
            ['title' => '最初の投稿', 'content' => 'こんにちは、世界！'],
            ['title' => '二番目の投稿', 'content' => 'PHPは楽しいです。']
        ];
    }
}

class PostView
{
    public function render(array $posts): void
    {
        foreach ($posts as $post) {
            echo "<h2>{$post['title']}</h2>";
            echo "<p>{$post['content']}</p>";
        }
    }

    /**
     * JSONを返すビューの例
     */
//    public function render(array $posts): void
//    {
//        header('Content-Type: application/json; charset=utf-8');
//        echo json_encode($posts);
//    }
}

class PostController
{
    public function __construct(private PostModel $model, private PostView $view) { }

    public function displayPosts(): void
    {
        $posts = $this->model->getPosts();
        $this->view->render($posts);
    }
}

// 使用例
$model = new PostModel();
$view = new PostView();
$controller = new PostController($model, $view);
$controller->displayPosts();
