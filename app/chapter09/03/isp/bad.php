<?php

interface UserOperationInterface
{
    public function viewContent(): void;
    public function editContent(): void;
    public function deleteContent(): void;
}

class RegularUser implements UserOperationInterface
{
    public function viewContent(): void
    {
        echo "コンテンツを閲覧します。\n";
    }

    public function editContent(): void
    {
        // 一般ユーザーは編集権限がない
        throw new BadMethodCallException('編集権限がありません。');
    }

    public function deleteContent(): void
    {
        // 一般ユーザーは削除権限がない
        throw new BadMethodCallException('削除権限がありません。');
    }
}

class EditorUser implements UserOperationInterface
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
        // 編集者は削除権限がない
        throw new BadMethodCallException('削除権限がありません。');
    }
}

class AdminUser implements UserOperationInterface
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
$regularUser = new RegularUser();
$regularUser->viewContent();
// BadMethodCallException がスローされる
// $regularUser->editContent();
// $regularUser->deleteContent();

$editorUser = new EditorUser();
$editorUser->viewContent();
$editorUser->editContent();
// BadMethodCallException がスローされる
// $editorUser->deleteContent();

$adminUser = new AdminUser();
$adminUser->viewContent();
$adminUser->editContent();
$adminUser->deleteContent();
