<?php

interface Viewable
{
    public function viewContent(): void;
}

interface Editable
{
    public function editContent(): void;
}

interface Deletable
{
    public function deleteContent(): void;
}

class RegularUser implements Viewable
{
    public function viewContent(): void
    {
        echo "コンテンツを閲覧します。\n";
    }
}

class EditorUser implements Viewable, Editable
{
    public function viewContent(): void
    {
        echo "コンテンツを閲覧します。\n";
    }

    public function editContent(): void
    {
        echo "コンテンツを編集します。\n";
    }
}

class AdminUser implements Viewable, Editable, Deletable
{
    public function viewContent(): void
    {
        echo "コンテンツを閲覧します。\n";
    }

    public function editContent(): void
    {
        echo "コンテンツを編集します。\n";
    }

    public function deleteContent(): void
    {
        echo "コンテンツを削除します。\n";
    }
}

// 使用例
function edit(Editable $user): void
{
    $user->editContent();
}

// ユーザーの作成
$regularUser = new RegularUser();
$editorUser = new EditorUser();
$adminUser = new AdminUser();

// 編集操作の実行
edit($editorUser);
edit($adminUser);

// 型エラーで利用を防げる
// edit($regularUser);
